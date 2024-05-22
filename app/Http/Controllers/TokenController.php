<?php

namespace App\Http\Controllers;

use App\Models\cashIn;
use App\Models\CashOut;
use Illuminate\Http\Request;
use App\Models\User; // Make sure to import your User model
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TokenController extends Controller
{
                            // FUNCTION FOR SPIN THE WHEEL
  public function updateSpinTokenBalance(Request $request)
  {
    /** @var \App\Models\User $user */
    $user = Auth::user();

      if (!$user) {
          return response()->json(['error' => 'User not authenticated'], 401);
      }
  
      // Check if the user can spin based on the last_spin_time attribute
      $lastSpinTime = $user->last_spin_time;
      $currentTime = now();
      $twentyFourHours = 24 * 60 * 60; // 24 hours in seconds
  
      // If last spin time is set and the current time is less than 24 hours since last spin
      if ($lastSpinTime && $currentTime->diffInSeconds($lastSpinTime) < $twentyFourHours) {
          return response()->json(['error' => 'Cannot spin yet, time interval not elapsed'], 400);
      }

       // Get the prize won by the user from the request
    $prize = $request->input('prize');

    // Update token balance based on the prize won by the user
    $user->token_balance += $prize;

    // Update last_spin_time for the user
    $user->last_spin_time = $currentTime; 


    $formattedTokenBalance = number_format($user->token_balance, 2);
    return response()->json(['token_balance' => $formattedTokenBalance]);
  }
  


            // FUNCTION FOR UPDATING TOKEN BALANCE DISPLAY AND COVERSION
    public function showTokenPage()
    {
        /** @var \App\Models\User $user */

        // Retrieve the authenticated user
        $user = Auth::user();

        // Check if the user is authenticated
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
        
        // Pass token_balance and token_clicked to the view,
        $CashInAdmin = User::select('GcashNumber','username','Cash_In_Image','id')->where('user_type', 'admin')->where('GcashNumber' ,'9658341037')->get();
        $CashInAdmin = $CashInAdmin[0];
        $token_balance = $user->token_balance;
        $conversion_balance = $user->conversion_balance;
        $token_clicked = $user->token_clicked;


        // Return the view with the token_balance and token_clicked
        return view('token_page', compact('user', 'token_balance', 'conversion_balance', 'token_clicked','CashInAdmin'));
    
    }



                //FUNCTION OF SECOND GAME
    public function updateTokenBalance(Request $request)
{
    /** @var \App\Models\User $user */
    $user = Auth::user();
    if (!$user) {
        return response()->json(['error' => 'User not authenticated'], 401);
    }

    if ($user->token_clicked) {
        // Check if the specified time interval has passed since the last click
        $lastTokenClickTime = $user->last_token_click_time;
        $interval = now()->diffInHours($lastTokenClickTime);
        $timeInterval = 86400; // Specify the time interval in seconds

        if ($interval >= $timeInterval) {
            // Reset token_clicked and update last_token_click_time
            $user->token_clicked = false;
            $user->last_token_click_time = now();
        } else {
            // Return error response indicating the time interval hasn't passed yet
            return response()->json(['error' => 'Time interval not elapsed yet'], 400);
        }
    } else {
        // Update token_clicked and last_token_click_time
        $user->token_clicked = true;
        $user->last_token_click_time = now();
    }

    // Increment the token balance
    $user->token_balance += 1;
    $user->save();

    $formattedTokenBalance = number_format($user->token_balance, 2);
    return response()->json(['token_balance' => $formattedTokenBalance]);
}



                //FUNCTION OF PLAY GAMES TODAY
public function updateThirdGameTokenBalance(Request $request)
{
    /** @var \App\Models\User $user */
    $user = Auth::user();
    if (!$user) {
        return response()->json(['error' => 'User not authenticated'], 401);
    }

  $user->token_balance += 1;
  $user->save();

  $formattedTokenBalance = number_format($user->token_balance, 2);
  return response()->json(['token_balance' => $formattedTokenBalance]);
}

//KAY COMPLETE PROFILE FUNCTION
public function updateThirdSaveTokenBalance(Request $request)
{
    /** @var \App\Models\User $user */
    $user = Auth::user();
    if (!$user) {
        return response()->json(['error' => 'User not authenticated'], 401);
    }


    $user->token_balance += 1;
    $user->last_save_time = now();
    $user->save();

    $formattedTokenBalance = number_format($user->token_balance, 2);
    return response()->json(['token_balance' => $formattedTokenBalance]);
}

                //FUNCTION OF LOGIN TODAY FUNCTION
public function updateThirdLoginTokenBalance(Request $request)
{
    /** @var \App\Models\User $user */
    $user = Auth::user();
    if (!$user) {
        return response()->json(['error' => 'User not authenticated'], 401);
    }

    $user->token_balance += 1;
    $user->login_time = now();
    $user->save();

    $formattedTokenBalance = number_format($user->token_balance, 2);
    return response()->json(['token_balance' => $formattedTokenBalance]);
}

                    //FUNCTION OF POST TODAY 
public function updateThirdPostTokenBalance(Request $request)
{
    /** @var \App\Models\User $user */  //nagdeclare me

    $user = Auth::user();
    if (!$user) {
        return response()->json(['error' => 'User not authenticated'], 401);
    }

  $user->token_balance += 1;
  $user->last_post_time = now();
  $user->save();

  $formattedTokenBalance = number_format($user->token_balance, 2);
  return response()->json(['token_balance' => $formattedTokenBalance]);
}

public function Cash_in(Request $request){

    $validator = validator::make($request->all(), [
        'from_id' => ['required', 'string   ', 'max:255'],
        'to_id' =>['required', 'string', 'max:255'],
        'username' =>['required', 'string', 'max:255'],
        'avatar' =>['required', 'string', 'max:255'],
        'Reference_Number' =>['required', 'string', 'max:255'],
        'Image_receipt' =>'required|mimes:png,jpg,jpeg,webp',
        'Content' =>['required', 'string', 'max:255'],  
        'Amount' =>['required', 'string', 'max:255'],
        'GcashNumber' =>['required', 'string', 'max:255'],
        'token_balance' =>['required', 'string', 'max:255'],
       ]);


       if ($validator->fails()) {
        return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
    }
    try {   
        
       if ($request->has('Image_receipt'))
       {
       $file = $request->file('Image_receipt');
       $extension = $file->getClientOriginalExtension();

       $filename = time().'.'.$extension;
       $path = 'uploads/Cash_In_Request/';
       $file->move($path, $filename);
    
       $newpost = cashIn::create([
            'from_id' => $request->from_id,
            'to_id' => $request->to_id,
            'username' => $request->username,
            'GcashNumber' =>$request->GcashNumber,
            'avatar' =>$request->avatar,
            'Content' =>$request->Content,
            'Amount' =>$request->Amount,
            'Reference_Number' =>$request->Reference_Number,
            'token_balance' =>$request->token_balance,
            'Image_receipt' =>$request->$path.$filename,

            
       ]);
    }
    return response()->redirectTo('Token Page');
} catch (\Exception $e) {
    return response()->json(['success' => false, 'msg' => $e->getMessage()]);
}







 



}


public function Cash_Out(Request $request){

    $validator = validator::make($request->all(), [
        'from_id' => ['required', 'string   ', 'max:255'],
        'to_id' =>['required', 'string', 'max:255'],
        'username' =>['required', 'string', 'max:255'],
        'avatar' =>['required', 'string', 'max:255'],
        'Gcash_name' =>['required', 'string', 'max:255'],
        'Image_QR' =>'nullable|mimes:png,jpg,jpeg,webp',
        'Content' =>['required', 'string', 'max:255'],  
        'Amount' =>['required', 'string', 'max:255'],
        'GcashNumber' =>['required', 'string', 'max:255'],
        'token_balance' =>['required', 'string', 'max:255'],
        
       ]);

       if ($validator->fails()) {
        return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
    }
    try {   

       if ($request->has('Image_QR'))
       {
       $file = $request->file('Image_QR');
       $extension = $file->getClientOriginalExtension();

       $filename = time().'.'.$extension;
       $path = 'uploads/Cash_Out_Request/';
       $file->move($path, $filename);
    
        CashOut::create([
            'from_id' => $request->from_id,
            'to_id' => $request->to_id,
            'username' => $request->username,
            'GcashNumber' =>$request->GcashNumber,
            'avatar' =>$request->avatar,
            'Content' =>$request->Content,
            'Amount' =>$request->Amount,
            'Gcash_name' =>$request->Gcash_name,
            'Image_QR' =>$request->$path.$filename,
            'token_balance'=>$request->token_balance,

            
       ]);
    }
 

    return response()->redirectTo('Token Page');
} catch (\Exception $e) {
    return response()->json(['success' => false, 'msg' => $e->getMessage()]);
}

}

}