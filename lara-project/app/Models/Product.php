<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\Builder as QueryBuilder;

#[Fillable(['name', 'price', 'quantity', 'reorder_level', 'description', 'category_id', 'brand_id', 'image'])]
class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function scopeParticularCategory(Builder $query, $category_id) : Builder|QueryBuilder {
        return $query->select('id', 'name', 'price', 'image', 'quantity')
            ->where('category_id', $category_id)
            ->where('active', 1)
            ->orderBy('id', 'desc')
            ->limit(5);
    }
}
