<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoldLoan extends Model
{
    protected $primaryKey = 'gl_id';
    protected $fillable = [
        'start_date',
        // other fillable attributes
        'end_date',
        'customer_name',
        'address',
        'loan_id',
        'amount',
        'total_amount',
        'gram',
        'status',
        'contact_no',
    ];
}