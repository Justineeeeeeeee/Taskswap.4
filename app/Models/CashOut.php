<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashOut extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_id',
        'to_id',
        'username',
        'GcashNumber',
        'avatar',
        'Content',
        'Amount',
        'Gcash_name',
        'Image_QR', 
        'token_balance',
    ];
}
