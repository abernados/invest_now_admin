<?php

namespace App\Models;

use App\Support\Filter;
use App\Support\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory, Searchable, Filter;

    protected $fillable = [
        'investor_id',
        'investor_type_id',
        'first_name',
        'last_name',
        'email',
        'is_accredited'
    ];

    protected $dates = ['created_at'];
    
    public function type()
    {
        return $this->belongsTo(InvestorType::class, 'investor_type_id');
    }

    public function jointAccounts()
    {
        return $this->hasOne(JointAccount::class, 'investor_id');
    }

    public function companyInformation()
    {
        return $this->hasOne(CompanyInformation::class, 'investor_id');
    }

    public function holdingsTypes()
    {
        return $this->hasOne(HoldingsType::class, 'investor_id');
    }

    public function accreditedInvestors()
    {
        return $this->hasMany(AccreditedInvestor::class, 'investor_id');
    }

    public function investorDocuments()
    {
        return $this->hasMany(InvestorDocument::class, 'investor_id');
    }

    public function investoAddressInfos()
    {
        return $this->hasOne(InvestorAddressInfo::class, 'investor_id');
    }

    public function investMentRequirement()
    {
        return $this->hasOne(InvestmentRequirement::class, 'investor_id');
    }

    public function investmentValues()
    {
        return $this->hasOne(InvestmentValue::class, 'investor_id');
    }

    public function qualityReasons()
    {
        return $this->hasMany(QualityReason::class, 'investor_id');
    }

    public function additionalnfos()
    {
        return $this->hasMany(AdditionalInfo::class, 'investor_id');
    }

    public function trustDetails()
    {
        return $this->hasOne(TrustDetail::class, 'investor_id');
    }

    public function retirementAccounts()
    {
        return $this->hasOne(RetirementAccount::class, 'investor_id');
    }

    public function cardDetails()
    {
        return $this->hasMany(InvestorCreditCardDetail::class, 'investor_id');
    }
}
