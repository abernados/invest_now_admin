<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RetirementAccountDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'address',
        'city',
        'state',
        'zip',
    ];

    public function retirementAccount()
    {
        return $this->hasOne(RetirementAccount::class, 'retirement_account_id');
    }

    public function format()
    {
        return [
            'country'   =>  $this->country,
            'address'   =>  $this->address,
            'city'      =>  $this->city,
            'state'     =>  $this->state,
            'zip'       =>  $this->zip,
        ];
    }
}
