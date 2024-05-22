<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormRequestPost;
use App\Models\cashIn;
use App\Models\posts;
use App\Models\Category;
use App\Models\Notification;
use App\Models\TransactionHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Storage;
use App\Models\Upload;
use App\Models\Rating;
use App\Models\Search;
use App\Models\User;

class post_Controller extends Controller
{
    public function index(){
        $data = Category::all();
        $posts = posts::all();
        $users_id = Auth::id(); 
        $to_id = Auth::id(); 
        $status_Notify = 0;
        $search = Auth::user();
        $reviews = Rating::where('search_username', $search->username)->get();
        $ratings = Rating::where('id', $users_id)->get();
        $ratings = Rating::where('search_username', $search->username)->get();
        $count = $ratings->count();

        $count = $reviews->count();

        $total = 0;

        foreach($reviews as $review)
        {
            $total += $review->user_rating;
        }


        $ratings =  $count > 0 ? $total / $count : 0;
        

        $posts = posts::where('users_id', $users_id)->get();
        $Cash_In_Request = cashIn::where('to_id', $to_id)->where('status' ,$status_Notify)->get(); 

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

        if(Auth::id())
        {
            $user_type=Auth()->user()->user_type;
        
            if($user_type == 'user'){
                return view('dashboard.dashboard',['data'=>$data, 'highestRatedUser' => $highestRatedUser, 'outstandingUser' => $outstandingUser,
                'excellentUser' => $excellentUser,'posts'=>$posts,'reviews'=>$reviews,'average'=>$average,'ratings'=>$ratings,'search'=>$search]);
            }
                else if ($user_type == 'admin'){
                    return view('Admin.Homeadmin',['Cash_In_Request'=>$Cash_In_Request]);
                }else{
                    redirect()->back();
                }
        
        }
    }




    public function Myportfolio()
    {
        $data = Category::all();
        $posts = posts::all();

        if(Auth::id())
        {
            $user_type=Auth()->user()->user_type;

            if($user_type == 'user'){
                return view('dashboard.portfolio',['data'=>$data],['posts'=>$posts]);
            }
                else if ($user_type == 'admin'){
                    return view('Admin.Homeadmin');
                }else{
                    redirect()->back();
                }

        }

    }

    public function TokenPage()
    {
        $data = Category::all();
        $posts = posts::all();


        if(Auth::id())
        {
            $user_type=Auth()->user()->user_type;

            if($user_type == 'user'){
                return view('token_page',['data'=>$data],['posts'=>$posts]);
            }
                else if ($user_type == 'admin'){
                    return view('Admin.Homeadmin');
                }else{
                    redirect()->back();
                }

        }

    }
    public function TransactionHistory(Request $request)
    {
        $data = Category::all();
        $posts = posts::all();
        $users_id = Auth::id();
        $search = Auth::user();
        $reviews = Rating::where('search_username', $search->username)->get();
        $ratings = Rating::where('search_username', $search->username)->get();
        $TransactionHistory = TransactionHistory::where('Posted_by', $search->username)->get();


        $count = $ratings->count();

        $total = 0;

        foreach($ratings as $rating)
        {
            $total += $rating->user_rating;
        }

        $average = $count > 0 ? $total / $count : 0;

        $search = Search::findOrFail($users_id);

        if(Auth::id())
        {
            $user_type=Auth()->user()->user_type;

            if($user_type == 'user'){
                return view('dashboard.transactionHistory',['TransactionHistory'=> $TransactionHistory, 'average'=>$average,'data'=>$data,'reviews'=>$reviews,'ratings'=>$ratings,'search'=>$search],['posts'=>$posts]);
            }
                else if ($user_type == 'admin.'){
                    return view('Admin.Homeadmin');
                }else{
                    redirect()->back();
                }

        }
    }
    public function TaskStatus()
    {
        $data = Category::all();
        $users_id = Auth::id();
        $search = Auth::user();
        $tasker_id = Auth::user()->first_name.' '.Auth::user()->last_name;
        $posts = posts::where('users_id', $users_id)
                    ->orWhere('tasker_id', $tasker_id)->get();
                    $reviews = Rating::where('search_username', $search->username)->get();
                    $ratings = Rating::where('id', $users_id)->get();
                    $search = Search::findOrFail($users_id);
        $canSubmit = true;
        $ratings = Rating::where('search_username', $search->username)->get();
        $count = $reviews->count();

        $total = 0;

        foreach($reviews as $review)
        {
            $total += $review->user_rating;
        }

        $average = $count > 0 ? $total / $count : 0;
        return view('dashboard.taskStatus',['average'=>$average,'data'=>$data,'reviews'=>$reviews,'ratings'=>$ratings,'search'=>$search],['posts'=>$posts]);
    }

    public function todo_tasks()
    {
        $data = Category::all();
        $progress = "0";
        $search = Auth::user();
        $users_id = Auth::id();
        $reviews = Rating::where('search_username', $search->username)->get();
        $ratings = Rating::where('id', $users_id)->get();
        $search = Search::findOrFail($users_id);
        $reviews = Rating::where('search_username', $search->username)->get();
        $ratings = Rating::where('search_username', $search->username)->get();

        $count = $ratings->count();

        $total = 0;

        foreach($ratings as $rating)
        {
            $total += $rating->user_rating;
        }
        $average = $count > 0 ? $total / $count : 0;

        $tasker_id = Auth::user()->first_name.' '.Auth::user()->last_name;
        $posts = posts::where([
                ['tasker_id', $tasker_id],
                ['task_progress', '!=',  $progress],
                ])->get();
        return view('dashboard.to-do_tasks_content',['average'=>$average,'data'=>$data,'reviews'=>$reviews,'ratings'=>$ratings,'search'=>$search],['posts'=>$posts]);
    }

    public function upload(Request $request)
    {
        $file = $request->file;
        $filename= time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$filename);

        posts::where('post_id', $request->submit_id)
            ->update([
                'task_progress' => $request->submit_progress,
                'file' => $filename,
            ]);

        return redirect(route('todo_tasks'));

    }

    public function download(Request $request, $file)
    {

        return response()->download(public_path('assets/'.$file));
    }

    public function posted_tasks()
    {
        $data = Category::all();
        $users_id = Auth::id();
        $search = Auth::user();
        $reviews = Rating::where('search_username', $search->username)->get();
        $ratings = Rating::where('id', $users_id)->get();
        $search = Search::findOrFail($users_id);
        $posts = posts::where('users_id', $users_id)->get();
        $reviews = Rating::where('search_username', $search->username)->get();
        $ratings = Rating::where('search_username', $search->username)->get();

        $count = $ratings->count();

        $total = 0;

        foreach($ratings as $rating)
        {
            $total += $rating->user_rating;
        }
        $average = $count > 0 ? $total / $count : 0;
       /* $post_id = $posts->pluck('id');
        $uploads = uploads::whereIn('post_id',$post_id)->get();*/
        return view('dashboard.posted_tasks_content',['average'=>$average,'data'=>$data,'reviews'=>$reviews,'ratings'=>$ratings,'search'=>$search],['posts'=>$posts]);
    }

    public function declineTasker(Request $request){
        // Validate form data
        $validator = Validator::make($request->all(), [
            'decline_progress' => 'required|string|max:255',
            'decline_tasker' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
        }

        try {
            // Update post in the database
            DB::table('posts')
                ->where('post_id', $request->decline_id)
                ->update([
                    'task_progress' => $request->decline_progress,
                    'tasker_id' => $request->decline_tasker,
                ]);

            return response()->json(['success' => true, 'msg' => 'Post updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => $e->getMessage()]);
        }
     }

     public function confirmProgress(Request $request){
        // Validate form data
        $validator = Validator::make($request->all(), [
            'confirm_progress' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
        }

        try {
            // Update post in the database
            DB::table('posts')
                ->where('post_id', $request->confirm_id)
                ->update([
                    'task_progress' => $request->confirm_progress,
                ]);

            return response()->json(['success' => true, 'msg' => 'Post updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => $e->getMessage()]);
        }
     }

     public function denyProgress(Request $request){
        // Validate form data
        $validator = Validator::make($request->all(), [
            'deny_progress' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
        }

        try {
            // Update post in the database
            DB::table('posts')
                ->where('post_id', $request->deny_id)
                ->update([
                    'task_progress' => $request->deny_progress,
                    'comments' => $request->deny_comment,
                ]);

            return response()->json(['success' => true, 'msg' => 'Post updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => $e->getMessage()]);
        }
     }

     public function editProgress(Request $request){
        // Validate form data
        $validator = Validator::make($request->all(), [
            'accept_progress' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
        }

        try {
            // Update post in the database
            DB::table('posts')
                ->where('post_id', $request->accept_id)
                ->update([
                    'task_progress' => $request->accept_progress,
                ]);

            return response()->json(['success' => true, 'msg' => 'Post updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => $e->getMessage()]);
        }
     }

    public function store(Request $request){
       $data = $request->validate([
        'post_title' => ['required', 'string', 'max:255'],
        'post_category' => ['required', 'string', 'max:255'],
        'post_content' =>['required', 'string', 'max:255'],
        'users_id' =>['required', 'string', 'max:255'],
        'tasker_id' =>['required', 'string', 'max:255'],
        'task_progress' =>['required', 'string', 'max:255'],
        'file' =>['required', 'string', 'max:255'],
        'comments' =>['required', 'string', 'max:255'],
        'payment_status' =>['required', 'string', 'max:255'],
        'Amount' =>['required', 'Integer'],
        'Posted_by' =>['required', 'string', 'max:255'],

       ]);

       $newpost = posts::create([
            'post_title' => $request->post_title,
            'post_category' => $request->post_category,
            'post_content' => $request->post_content,
            'users_id' =>$request->users_id,
            'tasker_id' =>$request->tasker_id,
            'task_progress' =>$request->task_progress,
            'Amount' =>$request->Amount,
            'file' =>$request->file,
            'comments' =>$request->comments,
            'payment_status' =>$request->payment_status,
            'Posted_by'=>$request->Posted_by,
       ]);


       return redirect(route('dashboard'));

    }



    // delete functionality
    public function deletePost($id){
        try {
            $delete_post = posts::where('post_id',$id)->delete();
            // if success print success msg
            return response()->json(['success' => true, 'msg' => 'Post Deleted Successfully']);

        } catch (\Exception $e) {
            return response()->json(['Failed' => false, 'msg' => $e->getMessage()]);
        }
    }

    public function editPost(Request $request){
        // Validate form data
        $validator = Validator::make($request->all(), [
            'edit_title' => 'required|string|max:255',
            'edit_category' => 'required|string|max:255',
            'edit_content' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
        }

        try {
            // Update post in the database
            DB::table('posts')
                ->where('post_id', $request->edit_id)
                ->update([
                    'post_title' => $request->edit_title,
                    'post_category' => $request->edit_category,
                    'post_content' => $request->edit_content,
                ]);

            return response()->json(['success' => true, 'msg' => 'Post updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => $e->getMessage()]);
     }


}

public function Payment(Request $request){

    $Status =posts::where('post_id', $request->post_id)->value('payment_status');

    if($Status == "Not Paid"){

    if($request->token_balance <= $request->Amount){
    $user = Auth::id();


    $validator = Validator::make($request->all(), [
        'post_id' => 'required|integer|max:255',
        'postedBy' => 'required|string|max:255',
        'avatar' => 'required|string|max:255',
        'Amount' => 'required|integer',
        'post_category' => 'required|string|max:255',
        'tasker_avatar' => 'required|string|max:255',
        'post_content' => 'required|string|max:255',
        'post_title' => 'required|string|max:255',
        'payment_status' => 'required|string|max:255',
        'tasker_id' => 'required|string|max:255',
    ]);
    if ($validator->fails()) {
        return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
    }

    try {

        TransactionHistory::create([
        'post_id' => $request->post_id,
        'Posted_by' => $request->postedBy,
        'avatar' => $request->avatar,
        'Amount' =>$request->Amount,
        'post_category' =>$request->post_category,
        'tasker_avatar' =>$request->tasker_avatar,
        'post_content' =>$request->post_content,
        'post_title' =>$request->post_title,
        'payment_status' =>$request->payment_status,
        'tasker_id'=>$request->tasker_id,
   ]);

   $newTokenBalanceUser =  (int)$request->Amount - (int)$request->token_balance;

   DB::table('users')
   ->where('id', $user)
   ->update([
       'token_balance' => $newTokenBalanceUser,
   ]);


   $TaskerBalance = User::where('username', $request->tasker_id)->value('token_balance');

   $NewTaskerBalance =  3000 +  (int)$TaskerBalance ;

   DB::table('users')
   ->where('username', $request->tasker_id)
   ->update([
       'token_balance' => $NewTaskerBalance,
   ]);

   DB::table('posts')
   ->where('post_id', $request->post_id)
   ->update([
       'payment_status' => $request->payment_status,
   ]);

   



   $data = Category::all();
   $users_id = Auth::id();
   $search = Auth::user();
   $reviews = Rating::where('search_username', $search->username)->get();
   $ratings = Rating::where('id', $users_id)->get();
   $search = Search::findOrFail($users_id);
   $posts = posts::where('users_id', $users_id)->get();
   $reviews = Rating::where('search_username', $search->username)->get();
   $ratings = Rating::where('search_username', $search->username)->get();

   $count = $ratings->count();

   $total = 0;

   foreach($ratings as $rating)
   {
       $total += $rating->user_rating;
   }
   $average = $count > 0 ? $total / $count : 0;
   
   return view('dashboard.posted_tasks_content',['average'=>$average,'data'=>$data,'reviews'=>$reviews,'ratings'=>$ratings,'search'=>$search],['posts'=>$posts]);

        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => $e->getMessage()]);
        }
    
}
    }
else
{
    $data = Category::all();
    $users_id = Auth::id();
    $search = Auth::user();
    $reviews = Rating::where('search_username', $search->username)->get();
    $ratings = Rating::where('id', $users_id)->get();
    $search = Search::findOrFail($users_id);
    $posts = posts::where('users_id', $users_id)->get();
    $reviews = Rating::where('search_username', $search->username)->get();
    $ratings = Rating::where('search_username', $search->username)->get();

    $count = $ratings->count();

    $total = 0;

    foreach($ratings as $rating)
    {
        $total += $rating->user_rating;
    }
    $average = $count > 0 ? $total / $count : 0;
    
    return view('dashboard.posted_tasks_content',['average'=>$average,'data'=>$data,'reviews'=>$reviews,'ratings'=>$ratings,'search'=>$search],['posts'=>$posts]);
}




}


}
