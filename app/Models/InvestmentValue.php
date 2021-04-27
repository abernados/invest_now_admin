<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'investor_id',
        'amount',
        'shares',
    ];

    public function investor()
    {
        return $this->hasOne(Investor::class, 'investor_id');
    }

    public function format()
    {
        return [
            'amount'    =>  $this->amount,
            'shares'    =>  $this->shares,
        ];
    }
}
