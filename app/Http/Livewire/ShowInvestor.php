<?php

namespace App\Http\Livewire;

use App\Models\Investor;
use Carbon\Carbon;
use Livewire\Component;

class ShowInvestor extends Component
{
    public $tab = 1, $investor, $first_name, $last_name,
        $email_address, $mobile_number, $investor_address_info,
        $phone_number, $country, $address, $city, $state, $zip,
        $investor_requirements, $social_security_number, $date_of_birth,
        $investment_amount, $accredited_investor, $annual_income, $net_worth,
        $investor_documents, $subscription_agreement, $sample_broker_dealer_aggreement,
        $another_agreement, $investor_card_details, $card_last_four_digits , $card_expiry;

    public function mount($investor_id)
    {
        $this->investor = $this->getInvestor($investor_id);

        $this->investor_address_info = $this->investor->investoAddressInfos;

        $this->investor_requirements = $this->investor->investMentRequirement;

        $this->investor_investment_values = $this->investor->investmentValues;

        $this->checkIfInvestorIsAccredited($this->investor);

        $this->investor_documents = $this->investor->investorDocuments;

        $this->investor_card_details = $this->investor->cardDetails;

        $this->first_name = isset($this->investor->first_name) ?  $this->investor->first_name : null;
        $this->last_name = isset($this->investor->last_name) ?  $this->investor->last_name : null;
        $this->email_address = isset($this->investor->email) ?  $this->investor->email : null;

        $this->phone_number = isset($this->investor_address_info->phone_number) ?  $this->investor_address_info->phone_number : null;
        $this->country = isset($this->investor_address_info->country) ?  $this->investor_address_info->country : null;
        $this->address = isset($this->investor_address_info->address)  ?  $this->investor_address_info->address : null;
        $this->city = isset($this->investor_address_info->city) ?  $this->investor_address_info->city : null;
        $this->state = isset($this->investor_address_info->state) ? $this->investor_address_info->state : null;
        $this->zip = isset($this->investor_address_info->zip) ? $this->investor_address_info->zip : null;

        $this->social_security_number = isset($this->investor_requirements->social_security_number) ? $this->investor_requirements->social_security_number : null;
        $this->date_of_birth = isset($this->investor_requirements->date_of_birth) ? Carbon::parse($this->investor_requirements->date_of_birth)->format('M d, Y') : null;
        $this->investment_amount =  '$' . number_format(isset($this->investor_investment_values->amount) ? $this->investor_investment_values->amount : 0, 2, '.', ',');

        $this->subscription_agreement = isset($this->investor_documents->subscription_agreement) ? $this->investor_documents->subscription_agreement : null; 
        $this->sample_broker_dealer_aggreement = isset($this->investor_documents->sample_broker_dealer_aggreement) ? $this->investor_documents->sample_broker_dealer_aggreement : null; 
        $this->another_agreement = isset($this->investor_documents->another_agreement) ? $this->investor_documents->another_agreement : null; 

        $this->card_expiry = isset($this->investor_card_details->expiration_month) . '/' . isset($this->investor_card_details->expiration_year);
        $this->card_last_four_digits = isset($this->investor_card_details->last_four_digits);
    }

    public function getInvestor($investor_id)
    {
        return Investor::find($investor_id);
    }

    public function checkIfInvestorIsAccredited($investor)
    {
        if ($investor->accreditedInvestors) {
            $this->accredited_investor = 'Not Accredited';
            
            $this->annual_income = '$' . number_format( isset($investor->accreditedInvestors->annual_income) ? $investor->accreditedInvestors->annual_income : 0 , 2, '.', ',');
            $this->net_worth = '$' . number_format(isset($investor->accreditedInvestors->annual_income) ? $investor->accreditedInvestors->annual_income : 0, 2, '.', ',');

            return;
        }

        $this->accredited_investor = 'Accredited';

        $this->annual_income = '$' . number_format(isset($investor->additionalnfos->annual_income) ? $investor->additionalnfos->annual_income :0 , 2, '.', ',');
        $this->net_worth = '$' . number_format(isset($investor->additionalnfos->annual_income) ? $investor->additionalnfos->annual_income : 0, 2, '.', ',');
    }

    public function render()
    {
        return view('investors.show')->layout('layouts.default', ['simple' => true]);
    }
}
