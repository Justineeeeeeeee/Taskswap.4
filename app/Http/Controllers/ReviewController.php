<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Rating;
use App\Models\Search;




class ReviewController extends Controller
{

    public function index($id)
    {
        $search = Search::findOrFail($id);
        $data = Category::all();
        $reviews = Rating::where('search_username', $search->username)->get();
        $ratings = Rating::where('id', $id)->get();


        return view('dashboard.ratings', compact('data', 'reviews','search','ratings'));
    }
    public function store($id,Request $request)
{


    $validatedData = $request->validate([
        'username' => 'required',
        'user_review' => 'required',
        'user_rating' => 'required|numeric|min:1|max:5', // Assuming ratings are between 1 and 5
        'search_username' => 'nullable'
    ]);


    $search = Search::findOrFail($id);

    // Create a new Rating instance and save it to the database
    $rating = new Rating();
    $rating->username = $validatedData['username'];
    $rating->user_review = $validatedData['user_review'];
    $rating->user_rating = $validatedData['user_rating'];
    $rating->search_username = $search->username; // Store the search_username
    $rating->save();


    // You can return a response if needed
    return view('dashboard.ratings', compact('id'));
}




public function destroy($id)
{
    try {
        // Find the review
        $review = Rating::findOrFail($id);
        // Delete the review from the database
        $review->delete();
        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
    }
}






public function update(Request $request, $id)
{
    // Validate the request
    $request->validate([
        'edit_username' => 'required',
        'edit_user_review' => 'required',
        'edit_user_rating' => 'required|numeric|min:1|max:5'
    ]);


    try {
        // Find the review
        $review = Rating::findOrFail($id);
        // Update the review
        $review->username = $request->input('edit_username');
        $review->user_review = $request->input('edit_user_review');
        $review->user_rating = $request->input('edit_user_rating');
        $review->save();


        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
    }
}
}


