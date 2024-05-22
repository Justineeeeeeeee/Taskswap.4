<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Search extends Model
{

    protected $table = 'users';
    protected $fillable = [
        'first_name',
        'last_name', // Add other fields if any
        'username',
        'bio',
        'age',
        'gender',
        'location',
        'education',
        'skills',
        'rating',
        'reviews',
        'terms',
        'notes',
    ];




    // Define a method to calculate the average rating
    public function averageRating()
    {
        // Retrieve the total ratings for the user
        $totalRatings = $this->ratings()->avg('user_rating');

        // If there are ratings, calculate the average
        if ($totalRatings > 0) {
            return $totalRatings;
        } else {
            return 0; // Default to 0 if there are no ratings
        }
    }

    public function ratings() {
        return $this->hasMany(Rating::class, 'username', 'username');
    }
}
