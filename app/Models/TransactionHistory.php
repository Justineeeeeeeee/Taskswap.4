<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'post_id',
        'Posted_by',
        'avatar',
        'Amount',
        'post_category',
        'post_content',
        'post_title',
        'payment_status',
        'tasker_id',
        'tasker_avatar',
        
        
    ];
}