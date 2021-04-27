<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestorCreditCardDetail extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function investor()
    {
        return $this->belongsTo(Investor::class, 'investor_id');
    }

    public function setCvvAttribute($value)
    {
        $this->attributes['cvv'] = encrypt($value);
    }

    public function setCardNumberAttribute($value)
    {
        $this->attributes['card_number'] = encrypt($value);
    }
}
