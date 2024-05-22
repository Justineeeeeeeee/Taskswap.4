<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\posts;
use App\Models\Rating;
use App\Models\Search;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class findTask extends Controller
{
    public function index(Request $request){
        $data = Category::all();
        $progress = "0";
        $users_id = Auth::id();
        $search = Auth::user();
        $reviews = Rating::where('search_username', $search->username)->get();

        $count = $reviews->count();

        $total = 0;

        foreach($reviews as $review)
        {
            $total += $review->user_rating;
        }


        $ratings =  $count > 0 ? $total / $count : 0;

        $search = Search::findOrFail($users_id);
        $selectedCategory = $request->input('category');
        $posts = posts::where([
            ['task_progress', $progress],
            ['users_id', '!=',  $users_id]
        ])->get();

        if ($selectedCategory) {
            $posts = posts::where('post_category', $selectedCategory)->get(); // Filter posts by selected category
            if ($posts->isEmpty()) {
                // If no posts found, pass a message to the view

                $message = "No posts found.";
                return view('findTask.Find_Task', compact('data', 'message','posts','reviews','ratings','search'));
            } else {
                // If posts found, pass them to the view
                return view('findTask.Find_Task', compact('data', 'posts','reviews','ratings','search'));
            }
        }

        if ($posts->isEmpty()) {
            // If no posts found, pass a message to the view
            $message = "No posts found.";
            return view('findTask.Find_Task', compact('data', 'message','posts','reviews','ratings','search'));
        } else {
            // If posts found, pass them to the view
            return view('findTask.Find_Task', compact('data', 'posts','reviews','ratings','search'));
        }


    }

    public function editTasker(Request $request){
        // Validate form data
        $validator = Validator::make($request->all(), [
            'edit_tasker' =>'required', 'string', 'max:255',
            'Tasker_avatar' =>'required', 'string', 'max:255',
            'progress' =>'required', 'string', 'max:255',

        ]);

        if ($validator->fails()) {
            return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
        }

        try {
            // Update post in the database
            DB::table('posts')
                ->where('post_id', $request->edit_id)
                ->update([
                    'avatar' =>$request->Tasker_avatar,
                    'tasker_id' =>$request->edit_tasker,
                    'task_progress' =>$request->progress,
                ]);

            return response()->json(['success' => true, 'msg' => 'Task took successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => $e->getMessage()]);
        }
     }


}
