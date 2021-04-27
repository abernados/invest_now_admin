<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssociatedPerson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'country',
        'phone_number',
        'address',
        'city',
        'state',
        'zip'
    ];

    public function companyInformation()
    {
        return $this->hasOne(companyInformation::class, 'company_information_id');
    }

    public function format()
    {
        return [
            'name'              =>  $this->name,
            'country'           =>  $this->country,
            'email'             =>  $this->email,
            'phone_number'      =>  $this->phone_number,
            'city'              =>  $this->city,
            'zip'               =>  $this->zip,
            'state'             =>  $this->state,
            'address'           =>  $this->address
        ];
    }
}
