<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestorDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'subscription_agreement',
        'sample_broker_dealer_aggreement',
        'another_agreement',
        'first_name',
        'last_name',
    ];

    public function investor()
    {
        return $this->belongsTo(Investor::class, 'investor_id');
    }
}
