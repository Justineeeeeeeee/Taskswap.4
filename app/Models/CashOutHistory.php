<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashOutHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'Cash_Out_id',
        'from_id',
        'to_id',
        'username',
        'avatar',
        'Reference_Number',
        'Image_receipt',
        'Amount',
        'GcashNumber', 
        'status',
        'Content',
        'token_balance',
        'adminName',
        'newTokenBalance',
        'TokenValue',
        'GcashName',
    ];
}
