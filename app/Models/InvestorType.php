<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class InvestorType extends Model
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

    public function holdingsType()
    {
        return $this->hasOne(HoldingsType::class, 'investor_type_id');
    }

    public function investoAddressInfos()
    {
        return $this->hasMany(InvestorAddressInfo::class, 'investor_type_id');
    }

    public function investMentRequirement()
    {
        return $this->hasMany(InvestmentRequirement::class, 'investor_type_id');
    }

    public function qualityReasons()
    {
        return $this->hasMany(QualityReason::class, 'investor_type_id');
    }

    public function format()
    {
        return [
            'name'  =>  $this->name,
            'slug'  =>  $this->slug
        ];
    }
}
