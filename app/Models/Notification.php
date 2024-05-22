<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_id',
        'to_id',
        'Content',
        'username',
        'avatar',
        'post_id',
        'status',
    ];





}
