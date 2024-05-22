<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio as ModelsPortfolio;
use App\Models\Portfolio;
use App\Models\posts;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Search;
use App\Models\Rating;



class PortfolioController extends Controller
{
        public function index($id)
        {
            
            $search = Search::findOrFail($id);

            $data = Category::all();
            $posts = posts::all();
            $portfolio = Portfolio::where('user_id', $id)->get();
            $reviews = Rating::where('search_username', $search->username)->get();
            $ratings = Rating::where('search_username', $search->username)->get();
            $count = $ratings->count();

            $total = 0;

            foreach($ratings as $rating)
            {
                $total += $rating->user_rating;
            }

            $average = $count > 0 ? $total / $count : 0;

            if (!$search) {
                // Handle the case when user with the provided ID doesn't exist
                abort(404, 'User not found');
            }

            return view('dashboard.SearchPortfolio',[ 'portfolio'=>$portfolio,'reviews'=>$reviews, 'data'=>$data, 'search' => $search, 'average' => $average],['posts'=>$posts,]);
        }



        public function view()
        {
            $id = Auth::id();
            $search = Search::findOrFail($id);

            $data = Category::all();
            $posts = posts::all();
            $portfolio = Portfolio::all();
            $users_id = Auth::id();
            $portfolio = Portfolio::where('user_id', $users_id)->get();
            $reviews = Rating::where('search_username', $search->username)->get();

            $ratings = Rating::where('search_username', $search->username)->get();
            $count = $ratings->count();

            $total = 0;

            foreach($ratings as $rating)
            {
                $total += $rating->user_rating;
            }

            $average = $count > 0 ? $total / $count : 0;

            if (!$search) {
                // Handle the case when user with the provided ID doesn't exist
                abort(404, 'User not found');
            }

            return view('dashboard.portfolio',['reviews'=>$reviews, 'data'=>$data, 'search' => $search, 'average' => $average],['posts'=>$posts, 'portfolio'=>$portfolio]);
        }


        public function store(Request $request){

            $request->validate([
                'Portfolio_Title' => 'required|max:255|string',
                'Portfolio_content' => 'required|max:255|string',
                'user_id' => 'required|max:255|string',
                'Content_Image' => 'nullable|mimes:png,jpg,jpeg,webp',
            ]);


            if ($request->has('Content_Image'))
            {
            $file = $request->file('Content_Image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;
            $path = 'Portfolio/';
            $file->move($path, $filename);


            }

            Portfolio::create([
                'Portfolio_Title' => $request->Portfolio_Title,
                'Portfolio_content' => $request->Portfolio_content,
                'user_id' => $request->user_id,
                'Content_Image' => $path.$filename,
            ]);


            return redirect('My Portfolio');
        }



        public function Update(Request $request){
            $validator = Validator::make($request->all(), [
                'Edit_Portfolio_Title' => 'required|max:255|string',
                'Edit_Portfolio_content' => 'required|max:255|string',
                'Edit_Content_Image' => 'nullable|mimes:png,jpg,jpeg,webp',
            ]);
        
            if ($validator->fails()) {
                return response()->json(['success' => false, 'msg' => $validator->errors()->toArray()]);
            }
        
            try {
                $path = $request->edit_file_path;
                if ($request->hasFile('Edit_Content_Image')) {
                    $file = $request->file('Edit_Content_Image');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                    $path = 'Portfolio/' . $filename;
                    $file->move(public_path('Portfolio'), $filename);
                }
        
                // Update post in the database
                DB::table('portfolios')
                    ->where('Portfolio_id', $request->edit_id)
                    ->update([
                        'Portfolio_Title' => $request->Edit_Portfolio_Title,
                        'Portfolio_content' => $request->Edit_Portfolio_content,
                        'Content_Image' => $path,
                    ]);
        
                return response()->json(['success' => true, 'msg' => 'Portfolio updated successfully']);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'msg' => $e->getMessage()]);
            }
        
                 }


                 public function destroy($id)
                 {
                     try {
                         $portfolio = Portfolio::findOrFail($id);
                         $portfolio->delete();
                 
                         return response()->json([
                             'success' => true,
                             'msg' => 'Portfolio item deleted successfully.'
                         ]);
                     } catch (\Exception $e) {
                         return response()->json([
                             'success' => false,
                             'msg' => 'Failed to delete the portfolio item.',
                             'error' => $e->getMessage() // Include error message for debugging
                         ]);
                     }
                 }












}
