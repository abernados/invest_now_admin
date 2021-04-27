<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_name',
        'name',
        'email',
        'phone_number',
        'ein',
        'state',
    ];

    public function investor()
    {
        return $this->hasOne(Investor::class, 'investor_id');
    }

    public function associatedPeople()
    {
        return $this->hasOne(AssociatedPerson::class, 'company_information_id');
    }

    public function format()
    {
        return [
            'contact_name'      =>  $this->contact_name,
            'name'              =>  $this->name,
            'email'             =>  $this->email,
            'phone_number'      =>  $this->phone_number,
            'ein'               =>  $this->ein,
            'state'             =>  $this->state,
            'associated_people' =>  $this->associatedPeople->format()
        ];
    }
}
