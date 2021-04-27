<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccreditedInvestor extends Model
{
    use HasFactory;

    protected $fillable = [
        'annual_income',
        'net_worth'
    ];

    public function investor()
    {
        return $this->belongsTo(Investor::class, 'investor_id');
    }
}
