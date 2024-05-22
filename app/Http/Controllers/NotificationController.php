<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\CashInHistory;
use App\Models\CashOutHistory;
use App\Models\Category;
use App\Models\Notification;
use App\Models\posts;
use App\Models\Rating;
use App\Models\Search;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class NotificationController extends Controller
{



    public function Notification(){
        $data = Category::all();
        $posts = posts::all();
        $to_id = Auth::id();
        $status_Notify = 0;
        $users_id = Auth::id();
        $search = Auth::user();
        $reviews = Rating::where('search_username', $search->username)->get();
        $ratings = Rating::where('search_username', $search->username)->get();

        $count = $ratings->count();
        $total = 0;

        foreach($ratings as $rating)
        {
            $total += $rating->user_rating;
        }

        $average = $count > 0 ? $total / $count : 0;


        $search = Search::findOrFail($users_id);
        $Notification = Notification::where('to_id', $to_id)->where('status' ,$status_Notify)->get();
        $Cash_In_History = CashInHistory::where('to_id', $to_id)->where('status' ,$status_Notify)->get();
        $Cash_out_History = CashOutHistory::where('to_id', $to_id)->where('status' ,$status_Notify)->get();
        if(Auth::id())
        {
            $user_type=Auth()->user()->user_type;

            if($user_type == 'user'){
                return view('dashboard.Notifications', compact('average','Notification', 'Cash_In_History', 'data', 'posts','Cash_out_History','reviews','ratings','search'));
            }
                else if ($user_type == 'admin'){
                    return view('admin.Homeadmin',['Notification'=>$Notification],['data'=>$data, 'posts'=>$posts]);
                }else{
                    redirect()->back();
                }

        }
    }

    public function store(Request $request){



        $data = $request->validate([
         'from_id' => ['required', 'string', 'max:255'],
         'to_id' => ['required', 'string', 'max:255'],
         'Content' =>['required', 'string', 'max:255'],
         'username' =>['required', 'string', 'max:255'],
         'avatar' =>['required', 'string', 'max:255'],
         'post_id' =>['required', 'string', 'max:255'],
        ]);

        $NewNotification = Notification::create([
             'from_id' => $request->from_id,
             'to_id' => $request->to_id,
             'Content' => $request->Content,
             'username' => $request->username,
             'avatar' => $request->avatar,
             'post_id' => $request->post_id,

        ]);

        return redirect(route('dashboard'));

     }


     public function EditStatus(Request $request){
        // Validate form data
        $validator = Validator::make($request->all(), [
            'status' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
        }

        try {
            // Update post in the database
            DB::table('notifications')
                ->where('id', $request->id)
                ->update([
                    'status' => $request->status,

                ]);

                return redirect(route('Notifications'));
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => $e->getMessage()]);
        }
     }

     public function DeclineRequest(Request $request){
        // Validate form data
        $validator = Validator::make($request->all(), [
            'status' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
        }

        try {
            // Update post in the database
            DB::table('notifications')
                ->where('id', $request->id)
                ->update([
                    'status' => $request->status,

                ]);

                return redirect(route('Notifications'));
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => $e->getMessage()]);
        }
     }









}
