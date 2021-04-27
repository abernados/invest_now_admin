<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JointAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_joint_tenants_with_right_of_survivorship',
        'is_joint_tenatns_common',
        'is_tenants_by_the_entirely',
    ];

    public function investor()
    {
        return $this->hasOne(Investor::class, 'investor_id');
    }

    public function format()
    {
        return $this->typeOfIndividual();
    }

    protected function typeOfIndividual()
    {
        if ($this->is_joint_tenants_with_right_of_survivorship) {
            return [
                'is_joint_tenants_with_right_of_survivorship'   =>  true
            ];
        }
        if ($this->is_joint_tenatns_common) {
            return [
                'is_joint_tenatns_common'   =>  true
            ];
        }
        if ($this->is_tenants_by_the_entirely) {
            return [
                'is_tenants_by_the_entirely'   =>  true
            ];
        }
    }
}
