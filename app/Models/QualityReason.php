<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualityReason extends Model
{
    use HasFactory;

    protected $fillable = [
        'individual_with_over_one_mil',
        'individual_with_over_two_hundred',
        'cfr',
    ];

    public function investor()
    {
        return $this->belongsTo(Investor::class, 'investor_id');
    }
}
