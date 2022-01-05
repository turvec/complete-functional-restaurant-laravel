<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    /**
     * Get all of the foods for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function foods(): HasMany
    {
        return $this->hasMany(Food::class, 'category_id', 'id');
    }
}
