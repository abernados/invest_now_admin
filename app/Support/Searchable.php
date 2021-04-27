<?php

namespace App\Support;

use Illuminate\Database\Eloquent\Builder;

trait Searchable
{
    public function scopeSearch(Builder $query, $search)
    {
        $query->whereLike($this->search, $search);
    }

    public function scopeResult($query, $request)
    {
        $query->order($request);
        $query->dateFilter($request);
        !$request->limit ?: $query->limit($request->limit ?? $query->count());
        !$request->search ?: $query->search($request->search);

        $data = $query->get();

        if ($request->page && $request->per_page) {
            $paginated = $query->paginate($request->per_page);
            $custom_data = $paginated->toArray();
            $data = [
                'data' => [
                    'data'  => $custom_data['data'],
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
}
