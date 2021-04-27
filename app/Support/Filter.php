<?php

namespace App\Support;


trait Filter
{
    public function scopeGetDetails($query, $request)
    {
        $query->order($request);
        $query->dateFilter($request);
        $query->limit($request->limit ?? 100);
        !$request->search ?: $query->search($request->search);

        $data = $query->get()->map->format();

        if ($request->page) {
            $paginated = $query->paginate($request->per_page ?? 100);
            $transactions = ['data' => $this->details($paginated->items())];

            $custom_data = $paginated->toArray();
            $data = [
                'data' => [
                    'data'  => $transactions['data'],
                    'meta' => [
                        'current_page'      => $custom_data['current_page'],
                        'from'              => $custom_data['from'],
                        'per_page'          => $custom_data['per_page'],
                        'total'             => $custom_data['total'],
                    ]
                ]
            ];
        }

        return $data;
    }

    public function format($details = null)
    {
        !$details ?  $details = $this : $details;

        return [
            'investor_type'             =>  $details->type ? $details->type->format() : null,
            'first_name'                =>  $details->first_name,
            'last_name'                 =>  $details->last_name,
            'is_accredited'             =>  $details->is_accredited ? true : false,
            'type_details'              =>  $this->typeDetails($details),
            'addres_info'               =>  $details->investoAddressInfos ? $details->investoAddressInfos->format() : null,
            'investment_requirement'    =>  $details->investMentRequirement ? $details->investMentRequirement->format() : null,
            'investment_values'         =>  $details->investmentValues ? $details->investmentValues->format() : null,
        ];
    }

    
    protected function typeDetails($details)
    {
        if (isset($details->type->slug)) {
            if ($details->type->slug === 'individual') {
                return [
                    'individual'    =>  'individual'
                ];
            }
            if ($details->type->slug === 'more-than-one-individual') {
                return $details->jointAccounts->format();
            }
            if ($details->type->slug === 'a-company') {
                return $details->jointAccounts->format();
            }
            if ($details->type->slug === '401-k-ira-trust') {
                if ($details->trustDetails) {
                    return $details->trustDetails->format();
                }

                return $details->retirementAccounts()->format();
            }
        }
    }
}
