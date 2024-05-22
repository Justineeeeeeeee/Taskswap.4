<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Search;
use App\Models\Rating;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Debugging: Check if the query is being passed correctly
        // dd($query); // Uncomment for debugging

        $search = Search::where('username', 'like', "%$query%")
                     ->get();

        // Debugging: Check if the database query is returning the expected results
        // dd($users); // Uncomment for debugging

        return view('dashboard.SearchResults', ['search' => $search]); // Ensure correct view name
    }

    public function show($id)
    {
        $search = Search::findOrFail($id);

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


        $highestRatedUser = Rating::select('search_username')
        ->selectRaw('AVG(user_rating) as avg_rating')
        ->groupBy('search_username')
        ->havingRaw('AVG(user_rating) = 5.0')
        ->orderByDesc('avg_rating')
        ->limit(1)
        ->first();

    $outstandingUser = Rating::select('search_username')
        ->selectRaw('AVG(user_rating) as avg_rating')
        ->groupBy('search_username')
        ->havingRaw('AVG(user_rating) >= 4.6 AND AVG(user_rating) < 4.9')
        ->orderByDesc('avg_rating')
        ->limit(1)
        ->first();

    $excellentUser = Rating::select('search_username')
        ->selectRaw('AVG(user_rating) as avg_rating')
        ->groupBy('search_username')
        ->havingRaw('AVG(user_rating) >= 4.0 AND AVG(user_rating) < 4.5')
        ->orderByDesc('avg_rating')
        ->limit(1)
        ->first();
        $average = $count > 0 ? $total / $count : 0;

        // to display the user's profile information
        return view('dashboard.Feed', ['search' => $search,'average' => $average,'ratings'=>$ratings,'highestRatedUser' => $highestRatedUser, 'outstandingUser' => $outstandingUser,
        'excellentUser' => $excellentUser]);
    }
}
