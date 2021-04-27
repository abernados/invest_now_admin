<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RetirementAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'holdings_type_id',
        'contact_phone_number',
        'contact_ein',
        'company_name',
    ];

    public function investor()
    {
        return $this->hasOne(Investor::class, 'investor_id');
    }

    public function holdingsType()
    {
        return $this->belongsTo(HoldingsType::class, 'holdings_type_id');
    }

    public function retirementAccountDetails()
    {
        return $this->hasOne(RetirementAccountDetail::class, 'retirement_account_id');
    }

    public function format()
    {
        return [
            'name'                  =>  $this->name,
            'email'                 =>  $this->email,
            'holdings_type'         =>  $this->holdingsType->slug,
            'contact_phone_number'  =>  $this->contact_phone_number,
            'contact_ein'           =>  $this->contact_ein,
            'company_name'          =>  $this->company_name,
            'details'               =>  $this->retirementAccountDetails->format(),
        ];
    }
}
