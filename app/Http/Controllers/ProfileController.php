<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Category;
use App\Models\posts;
use App\Models\Rating;
use App\Models\Search;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Chatify\Facades\ChatifyMessenger as Chatify;
use Illuminate\Support\Str;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $data = Category::all();
        $posts = posts::all();
        $users_id = Auth::id();
        $search = Search::findOrFail($users_id);
        $to_id = Auth::id();
        $status_Notify = 0;
        $reviews = Rating::where('search_username', $search->username)->get();
        $ratings = Rating::where('search_username', $search->username)->get();
        $count = $ratings->count();

        $count = $reviews->count();

        $total = 0;

        foreach($reviews as $review)
        {
            $total += $review->user_rating;
        }


        $ratings =  $count > 0 ? $total / $count : 0;

        
        $highestRatedUser = Rating::select('search_username')->where('username',$search->username)
        ->selectRaw('AVG(user_rating) as avg_rating')
        ->groupBy('search_username')
        ->havingRaw('AVG(user_rating) = 5.0')
        ->orderByDesc('avg_rating')
        ->limit(1)
        ->first();

    $outstandingUser = Rating::select('search_username')->where('username',$search->username)
        ->selectRaw('AVG(user_rating) as avg_rating')
        ->groupBy('search_username')
        ->havingRaw('AVG(user_rating) >= 4.6 AND AVG(user_rating) < 4.9')
        ->orderByDesc('avg_rating')
        ->limit(1)
        ->first();

    $excellentUser = Rating::select('search_username')->where('username',$search->username)
        ->selectRaw('AVG(user_rating) as avg_rating')
        ->groupBy('search_username')
        ->havingRaw('AVG(user_rating) >= 4.0 AND AVG(user_rating) < 4.5')
        ->orderByDesc('avg_rating')
        ->limit(1)
        ->first();


        $average = $count > 0 ? $total / $count : 0;

        return view('dashboard.profileEdit',['user' => $request->user()],['reviews'=>$reviews,'ratings'=>$ratings,'search'=>$search,'average' => $average, 'highestRatedUser' => $highestRatedUser, 'outstandingUser' => $outstandingUser,
        'excellentUser' => $excellentUser]);


    }






    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if($request->has('profile_pic')){
            $file = $request->file('profile_pic');
            $extension = $file->getClientOriginalExtension();


        }

                // if there is a [file]
                if ($request->hasFile('avatar')) {
                    // allowed extensions
                    $allowed_images = Chatify::getAllowedImages();

                    $file = $request->file('avatar');
                    // check file size
                    if ($file->getSize() < Chatify::getMaxUploadSize()) {
                        if (in_array(strtolower($file->extension()), $allowed_images)) {
                            // delete the older one
                            if (Auth::user()->avatar != config('chatify.user_avatar.default')) {
                                $avatar = Auth::user()->avatar;
                                if (Chatify::storage()->exists($avatar)) {
                                    Chatify::storage()->delete($avatar);
                                }
                            }
                            // upload
                            $filename = Str::uuid() . "." . $file->extension();
                            $update = User::where('id', Auth::user()->id)->update(['avatar' => $filename]);
                            $path = 'storage/users-avatar/';
                            $file->move($path,$filename);
                            $success = $update ? 1 : 0;
                        } else {
                            $msg = "File extension not allowed!";
                            $error = 1;
                        }
                    } else {
                        $msg = "File size you are trying to upload is too large!";
                        $error = 1;
                    }
                }

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
