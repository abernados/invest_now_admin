<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrustDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'holdings_type_id',
        'company_name',
        'email',
        'phone',
        'ein',
        'state',
    ];

    public function investor()
    {
        return $this->hasOne(Investor::class, 'investor_id');
    }

    public function holdingsType()
    {
        return $this->belongsTo(HoldingsType::class, 'holdings_type_id');
    }

    public function format()
    {
        return [
            'name'                  =>  $this->name,
            'holdings_type'         =>  $this->holdingsType->slug,
            'company_name'          =>  $this->company_name,
            'email'                 =>  $this->email,
            'phone'                 =>  $this->phone,
            'ein'                   =>  $this->ein,
            'state'                 =>  $this->state,
        ];
    }
}
