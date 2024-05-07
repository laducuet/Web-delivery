<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AggregationPointEmployee extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'aggregation_point_id',
        'name',
        'position',
        'phone',
        'details',
    ];
    public function address(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(Address::class, 'addressable');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function aggregationPoint(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(AggregationPoint::class);
    }
}
