<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table= 'portfolios';
    protected $primaryKey = 'Portfolio_id';
    protected $fillable = [
        'user_id',
        'Portfolio_Title',
        'Content_Image',
        'Portfolio_content',
    ];
}

