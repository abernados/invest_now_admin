<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentRequirement extends Model
{
    use HasFactory;

    protected $fillable = [
        'social_security_number',
        'date_of_birth',
        'investor_id',
    ];

    public function investorType()
    {
        return $this->belongsTo(InvestorType::class, 'investor_type_id');
    }

    public function investor()
    {
        return $this->hasOne(Investor::class, 'investor_id');
    }

    public function format()
    {
        return [
            'social_security_number'    =>  $this->social_security_number,
            'date_of_birth'             =>  $this->date_of_birth,
        ];
    }
}
