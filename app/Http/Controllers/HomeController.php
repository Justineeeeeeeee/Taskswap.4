<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Notification;
use App\Models\posts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $data = Category::all();
        $posts = posts::all();
        $to_id = Auth::id(); 
        $status_Notify = 0;
        $Notification = Notification::where('to_id', $to_id)->where('status' ,$status_Notify)->get(); 

        if(Auth::id())
{
    $user_type=Auth()->user()->user_type;

    if($user_type === 'user'){
        return view('dashboard.dashboard',);
    }
    else if ($user_type === 'admin'){
        return view('Admin.Homeadmin');
        }else{
            redirect()->back();
        }

}
    }
}

