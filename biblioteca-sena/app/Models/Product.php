<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = ["name", "descriptions", "editorial","autor", "image", "category_id"];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
