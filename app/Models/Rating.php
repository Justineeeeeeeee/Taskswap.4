<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $table = 'ratings';
    protected $fillable = [
        'username',
        'user_review',
        'user_rating',
        'search_username',
        'created_at',
        'updated_at',
    ];

    public function search()
    {
        return $this->belongsTo(Search::class, 'username', 'username');
    }

}
