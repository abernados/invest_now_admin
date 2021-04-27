<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentChannel extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_bank',
        'is_credit_or_debit_card',
        'is_bank_wire',
        'is_mail_in_check',
    ];
}
