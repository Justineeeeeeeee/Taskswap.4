<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashInHistory extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'Cash_In_Id',
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
    ];



}
