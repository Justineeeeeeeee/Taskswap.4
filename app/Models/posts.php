<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'post_title',
        'post_category',
        'post_content',
        'users_id',
        'tasker_id',
        'task_progress',
        'file',
        'comments',
        'payment_status',
        'avatar',
        'Amount',
        'Posted_by',
    ];
}
