<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['name', 'status']; // Agrega 'name' y 'status' a la lista de atributos asignables

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}