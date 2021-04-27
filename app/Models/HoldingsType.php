<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class HoldingsType extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function investorType()
    {
        return $this->hasOne(InvestorType::class, 'investor_type_id');
    }

    public function investor()
    {
        return $this->hasOne(Investor::class, 'investor_id');
    }

    public function trustDetails()
    {
        return $this->hasMany(TrustDetail::class, 'holdings_type_id');
    }

    public function retirementAccounts()
    {
        return $this->hasMany(RetirementAccount::class, 'holdings_type_id');
    }

    public function holdingsTypeFormat()
    {
        return [
            'id'    =>  $this->id,
            'slug'  => $this->slug,
        ];
    }
}
