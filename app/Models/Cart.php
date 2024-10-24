<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'qty',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
