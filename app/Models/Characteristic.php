<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Characteristic extends Model
{
    protected $casts = [
        'meta_data' => 'array',
    ];

    protected $fillable = [
        'name',
        'meta_data',
        'characteristic_category_id',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CharacteristicCategory::class, 'characteristic_category_id');
    }

}
