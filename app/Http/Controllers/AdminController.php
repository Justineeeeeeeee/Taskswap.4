<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cashIn;
use App\Models\CashInHistory;
use App\Models\CashOut;
use App\Models\CashOutHistory;
use App\Models\Category;
use App\Models\Notification;
use App\Models\posts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function CashOutRequest(){

        $posts = posts::all();
        $to_id = Auth::id(); 
        $status_Notify = 0;
        $from_id = CashOut::select('from_id')->get();
        $balance = User::all();
        $Cash_Out_Request = CashOut::where('to_id', $to_id)->where('status' ,$status_Notify)->get(); 

        if(Auth::id())
        {
            $user_type=Auth()->user()->user_type;

            
            if($user_type === 'admin'){
                return view('Admin.CashoutRequest',compact('Cash_Out_Request', 'posts', 'balance'));
            }
            else if ($user_type === 'user'){
                redirect()->back();

                }
                else{
                    redirect()->back();
                }
        
        }
            }



            public function ComplainsReport(){

                $data = Category::all();
                $posts = posts::all();
        
                if(Auth::id())
                {
                    $user_type=Auth()->user()->user_type;
                
                    if($user_type === 'admin'){
                        return view('Admin.Complains',['posts'=>$posts],['data'=>$data]);
                    }
                    else if ($user_type === 'user'){
                        redirect()->back();
        
                        }
                        else{
                            redirect()->back();
                        }
                
                }
                    }


                    
            public function TransactionHistory_admin(){

                $data = Category::all();
                $posts = posts::all();
                $status_Notify = 0;
                $to_id = 1;
                $CashInHistory = CashInHistory::where('from_id', $to_id)->where('status' ,$status_Notify)->get(); 
                $CashOutHistory = CashOutHistory::where('from_id', $to_id)->where('status' ,$status_Notify)->get(); 
        
                if(Auth::id())
                {
                    $user_type=Auth()->user()->user_type;
                
                    if($user_type === 'admin'){
                        return view('Admin.AdminTransaction_History',['posts'=>$posts, 'CashInHistory' => $CashInHistory],['data'=>$data, 'CashOutHistory' => $CashOutHistory]);
                    }
                    else if ($user_type === 'user'){
                        redirect()->back();
        
                        }
                        else{
                            redirect()->back();
                        }
                
                }
                    }

        public function EditGcashNumber(Request $request){
        
            $data = Category::all();
            $posts = posts::all();
            $to_id = Auth::id(); 
            $status_Notify = 0;
            $Notification = Notification::where('to_id', $to_id)->where('status' ,$status_Notify)->get(); 
            $validator = Validator::make($request->all(), [
                'GcashNumber' => 'max:255|string',
                'Cash_In_Image' => 'nullable|mimes:png,jpg,jpeg,webp',
            ]);

                if ($validator->fails()) {
                    return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
                }
            
                try {

                    if($request->has('Cash_In_Image')){
                        $edit_id = 1;
                        $file = $request->file('Cash_In_Image');
                        $extension = $file->getClientOriginalExtension();
            
                        $filename = time().'.'.$extension;
                        $path = 'uploads/GcashNumer/';
                        $file->move($path,$filename);
                    DB::table('users')
                    ->where('id', $edit_id)
                    ->update([
                        'GcashNumber' => $request->GcashNumber,
                        'Cash_In_Image' => $request->$path.$filename,
                        ]);
                    }
                        return view('Admin.CashoutRequest',['posts'=>$posts,'Notification'=>$Notification],['data'=>$data]);
                    } catch (\Exception $e) {
                        return response()->json(['success' => false, 'msg' => $e->getMessage()]);
                    }
                
            }

            public function EditCashoutNumber(Request $request){
        
                $data = Category::all();
                $posts = posts::all();
    
                $validator = Validator::make($request->all(), [
                    'GcashNumber' => 'max:255|string',
                    'Cash_out_Image' => 'nullable|mimes:png,jpg,jpeg,webp',
                ]);
    
                    if ($validator->fails()) {
                        return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
                    }
                
                    try {
    
                        if($request->has('Cash_out_Image')){
                            $edit_id = 1;
                            $file = $request->file('Cash_out_Image');
                            $extension = $file->getClientOriginalExtension();
                
                            $filename = time().'.'.$extension;
                            $path = 'uploads/GcashNumer/';
                            $file->move($path,$filename);
                        DB::table('users')
                        ->where('id', $edit_id)
                        ->update([
                            'GcashNumber' => $request->GcashNumber,
                            'Cash_out_Image' => $request->$path.$filename,
                            ]);
                        }
                            return view('Admin.CashoutRequest',['posts'=>$posts],['data'=>$data]);
                        } catch (\Exception $e) {
                            return response()->json(['success' => false, 'msg' => $e->getMessage()]);
                        }
                    
                }



            

        public function CashInProcess(Request $request){
            $posts = posts::all();
            $to_id = Auth::id(); 
            $status_Notify = 0;
            $from_id = cashIn::select('from_id')->get();
            $balance = User::all();
            $Cash_Out_Request = cashIn::where('to_id', $to_id)->where('status' ,$status_Notify)->get(); 

            $validator = Validator::make($request->all(), [
                'Value_Value' =>['required', 'string', 'max:255'],
                'Cash_In_Id' => ['required', 'string   ', 'max:255'],
                'from_id' => ['required', 'string   ', 'max:255'],
                'to_id' =>['required', 'string', 'max:255'],
                'username' =>['required', 'string', 'max:255'],
                'avatar' =>['required', 'string', 'max:255'],
                'Reference_Number' =>['required', 'string', 'max:255'],
                'Image_receipt' =>['required', 'string', 'max:255'],
                'Content' =>['required', 'string', 'max:255'],  
                'Amount' =>['required', 'string', 'max:255'],
                'GcashNumber' =>['required', 'string', 'max:255'],
                'Balance_toke_Cash_in' =>['required', 'string', 'max:255'],
                'adminName' =>['required', 'string', 'max:255'],
                'NewTokenBalance' =>['required', 'string', 'max:255'],
                'status' =>['required', 'string', 'max:255'],

                
                
            ]);
        
            if ($validator->fails()) {
                return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
            }
            try {   


                CashInHistory::create([
                    'from_id' => $request->from_id,
                    'to_id' => $request->to_id,
                    'username' => $request->username,
                    'GcashNumber' =>$request->GcashNumber,
                    'avatar' =>$request->avatar,
                    'Content' =>$request->Content,
                    'Amount' =>$request->Amount,
                    'Reference_Number' =>$request->Reference_Number,
                    'Image_receipt' =>$request->Image_receipt,
                    'Cash_In_Id' =>$request->Cash_In_Id,
                    'token_balance' =>$request->Balance_toke_Cash_in,
                    'newTokenBalance' =>$request->NewTokenBalance,
                    'TokenValue' =>$request->Value_Value,
                    'adminName' =>$request->adminName,
                    
    
                ]);

                // Update post in the database
                DB::table('users')
                    ->where('id', $request->to_id)
                    ->update([
                        'token_balance' => $request->NewTokenBalance,
                    ]);

                    DB::table('cash_ins')
                    ->where('Cash_In_Id', $request->Cash_In_Id)
                    ->update([
                        'status' => $request->status,
                    ]);
        
                    return view('Admin.CashoutRequest',compact('Cash_Out_Request', 'posts', 'balance'));
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'msg' => $e->getMessage()]);
            }
        

        }
             
        public function CashInDecline(Request $request){
            $posts = posts::all();
            $to_id = Auth::id(); 
            $status_Notify = 0;
            $from_id = CashOut::select('from_id')->get();
            $balance = User::all();
            $Cash_Out_Request = CashOut::where('to_id', $to_id)->where('status' ,$status_Notify)->get(); 

            $validator = Validator::make($request->all(), [
                'Value_Value' =>['required', 'string', 'max:255'],
                'Cash_In_Id' => ['required', 'string   ', 'max:255'],
                'from_id' => ['required', 'string   ', 'max:255'],
                'to_id' =>['required', 'string', 'max:255'],
                'username' =>['required', 'string', 'max:255'],
                'avatar' =>['required', 'string', 'max:255'],
                'Reference_Number' =>['required', 'string', 'max:255'],
                'Image_receipt' =>['required', 'string', 'max:255'],
                'Content' =>['required', 'string', 'max:255'],  
                'Amount' =>['required', 'string', 'max:255'],
                'GcashNumber' =>['required', 'string', 'max:255'],
                'Balance_toke_Cash_in' =>['required', 'string', 'max:255'],
                'adminName' =>['required', 'string', 'max:255'],
                'NewTokenBalance' =>['required', 'Integer', 'max:255'],
                'status' =>['required', 'string', 'max:255'],

                
                
            ]);
        
            if ($validator->fails()) {
                return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
            }
            try {   


                CashInHistory::create([
                    'from_id' => $request->from_id,
                    'to_id' => $request->to_id,
                    'username' => $request->username,
                    'GcashNumber' =>$request->GcashNumber,
                    'avatar' =>$request->avatar,
                    'Content' =>$request->Content,
                    'Amount' =>$request->Amount,
                    'Reference_Number' =>$request->Reference_Number,
                    'Image_receipt' =>$request->Image_receipt,
                    'Cash_In_Id' =>$request->Cash_In_Id,
                    'token_balance' =>$request->Balance_toke_Cash_in,
                    'newTokenBalance' =>$request->NewTokenBalance,
                    'TokenValue' =>$request->Value_Value,
                    'adminName' =>$request->adminName,
                    
    
                ]);

                // Update post in the database
                DB::table('users')
                    ->where('id', $request->to_id)
                    ->update([
                        'token_balance' => $request->NewTokenBalance,
                    ]);

                    DB::table('cash_ins')
                    ->where('Cash_In_Id', $request->Cash_In_Id)
                    ->update([
                        'status' => $request->status,
                    ]);
        
                    return response()->json(['success' => true, 'msg' => 'Post updated successfully']);
                } catch (\Exception $e) {
                    return response()->json(['success' => false, 'msg' => $e->getMessage()]);
                }

        }

        
        public function CashOutProcess(Request $request){
            $posts = posts::all();
            $to_id = Auth::id(); 
            $status_Notify = 0;
            $from_id = CashOut::select('from_id')->get();
            $balance = User::all();
            $Cash_Out_Request = CashOut::where('to_id', $to_id)->where('status' ,$status_Notify)->get(); 

            $validator = Validator::make($request->all(), [
                'Id_Id_Cash_out' => ['required', 'string', 'max:255'],
                'from_id' => ['required', 'string', 'max:255'],
                'to_id' =>['required', 'string', 'max:255'],
                'username' =>['required', 'string', 'max:255'],
                'avatar' =>['required', 'string', 'max:255'],
                'Reference_Number' =>['required', 'string', 'max:255'],
                'Image_receipt' =>'nullable|mimes:png,jpg,jpeg,webp',
                'Content' =>['required', 'string', 'max:255'],  
                'Amount' =>['required', 'string', 'max:255'],
                'GcashNumber' =>['required', 'string', 'max:255'],
                'Token_balance' =>['required', 'string', 'max:255'],
                'adminName' =>['required', 'string', 'max:255'],
                'NewTokenBalance' =>['required', 'string', 'max:255'],
                'status' =>['required', 'string', 'max:255'],
                'Name_Gcash' =>['required', 'string', 'max:255'],
                

                
                
            ]);
        
            if ($validator->fails()) {
                return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
            }
            try {   

                if($request->has('Image_receipt')){
                    $edit_id = 1;
                    $file = $request->file('Image_receipt');
                    $extension = $file->getClientOriginalExtension();
        
                    $filename = time().'.'.$extension;
                    $path = 'uploads/CashOutReceipts/';
                    $file->move($path,$filename);


                CashOutHistory::create([
                    'Cash_Out_id' =>$request->Id_Id_Cash_out,
                    'from_id' => $request->from_id,
                    'to_id' => $request->to_id,
                    'username' => $request->username,
                    'GcashNumber' =>$request->GcashNumber,
                    'avatar' =>$request->avatar,
                    'Content' =>$request->Content,
                    'Amount' =>$request->Amount,
                    'Reference_Number' =>$request->Reference_Number,
                    'Image_receipt' =>$request->$path.$filename,
                    'token_balance' =>$request->Token_balance,
                    'newTokenBalance' =>$request->NewTokenBalance,
                    'TokenValue' =>$request->Amount,
                    'adminName' =>$request->adminName,
                    'GcashName'=>$request->Name_Gcash,
                    
    
                ]);
            }

                // Update post in the database
                DB::table('users')
                    ->where('id', $request->to_id)
                    ->update([
                        'token_balance' => $request->NewTokenBalance,
                    ]);

                    DB::table('Cash_outs')
                    ->where('Cash_Out_id', $request->Id_Id_Cash_out)
                    ->update([
                        'status' => $request->status,
                    ]);
        
                return view('Admin.CashoutRequest',compact('Cash_Out_Request', 'posts', 'balance'));
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'msg' => $e->getMessage()]);
            }
        

        }

        public function CashOutProcessDecline(Request $request){
            $posts = posts::all();
            $to_id = Auth::id(); 
            $status_Notify = 0;
            $from_id = CashOut::select('from_id')->get();
            $balance = User::all();
            $Cash_Out_Request = CashOut::where('to_id', $to_id)->where('status' ,$status_Notify)->get(); 

            $validator = Validator::make($request->all(), [
                'Id_Id_Cash_out' => ['required', 'string', 'max:255'],
                'from_id' => ['required', 'string', 'max:255'],
                'to_id' =>['required', 'string', 'max:255'],
                'username' =>['required', 'string', 'max:255'],
                'avatar' =>['required', 'string', 'max:255'],
                'Reference_Number' =>['required', 'string', 'max:255'],
                'Image_receipt' =>['required', 'string', 'max:255'],
                'Content_content' =>['required', 'string', 'max:255'],  
                'Amount' =>['required', 'string', 'max:255'],
                'GcashNumber' =>['required', 'string', 'max:255'],
                'token_balance_balance' =>['required', 'string', 'max:255'],
                'adminName' =>['required', 'string', 'max:255'],
                'NewTokenBalance' =>['required', 'string', 'max:255'],
                'status' =>['required', 'string', 'max:255'],
                'Name_Gcash' =>['required', 'string', 'max:255'],
                

                
                
            ]);
        
            if ($validator->fails()) {
                return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
            }
            try {   




                CashOutHistory::create([
                    'Cash_Out_id' =>$request->Id_Id_Cash_out,
                    'from_id' => $request->from_id,
                    'to_id' => $request->to_id,
                    'username' => $request->username,
                    'GcashNumber' =>$request->GcashNumber,
                    'avatar' =>$request->avatar,
                    'Content' =>$request->Content_content,
                    'Amount' =>$request->Amount,
                    'Reference_Number' =>$request->Reference_Number,
                    'Image_receipt' =>$request->Image_receipt,
                    'token_balance' =>$request->token_balance_balance,
                    'newTokenBalance' =>$request->NewTokenBalance,
                    'TokenValue' =>$request->Amount,
                    'adminName' =>$request->adminName,
                    'GcashName'=>$request->Name_Gcash,
                    
    
                ]);
                // Update post in the database
                DB::table('users')
                    ->where('id', $request->to_id)
                    ->update([
                        'token_balance' => $request->NewTokenBalance,
                    ]);

                    DB::table('Cash_outs')
                    ->where('Cash_Out_id', $request->Id_Id_Cash_out)
                    ->update([
                        'status' => $request->status,
                    ]);
        
                    return response()->redirectTo('Cash Out Request');
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'msg' => $e->getMessage()]);
            }
        

        }


        public function UpdateCashINStatus(Request $request){
            // Validate form data
            $validator = Validator::make($request->all(), [
                'status' => 'required|string|max:255',
            ]);
        
            if ($validator->fails()) {
                return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
            }
        
            try {
                // Update post in the database
                DB::table('cash_in_histories')
                    ->where('Cash_in_History', $request->CashInID)
                    ->update([
                        'status' => $request->status,
    
                    ]);
        
                    return redirect(route('TransactionHistory_Admin'));
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'msg' => $e->getMessage()]);
            }
         }


         public function UpdateCashOUtStatus(Request $request){
            // Validate form data
            $validator = Validator::make($request->all(), [
                'status' => 'required|string|max:255',
            ]);
        
            if ($validator->fails()) {
                return response()->json(['Failed' => false, 'msg' => $validator->errors()->toArray()]);
            }
        
            try {
                // Update post in the database
                DB::table('cash_out_histories')
                    ->where('Cash_out_History', $request->idCashOut)
                    ->update([
                        'status' => $request->status,
    
                    ]);
        
                    return redirect(route('TransactionHistory_Admin'));
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'msg' => $e->getMessage()]);
            }
         }


         
             

}




