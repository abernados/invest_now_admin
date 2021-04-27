<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestorAddressInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'address',
        'city',
        'state',
        'zip',
        'investor_id',
        'phone_number',
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
            'name'          =>  $this->name,
            'address'       =>  $this->address,
            'city'          =>  $this->city,
            'state'         =>  $this->state,
            'zip'           =>  $this->zip,
            'phone_number'  =>  $this->phone_number,
        ];
    }
}
