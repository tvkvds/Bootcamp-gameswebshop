<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use HasFactory, SoftDeletes;

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function productImages()
    {
        return $this->hasManyThrough(Image::class, Product::class);
    }

    public function scopeFiveProducts($query)
    {
        return $query->whereIn('product.id', function($query) {
            return $query->fromSub(function($subQuery) {
                $query->select('id')
                    ->from('products gameswebshop_products')
                    ->limit(5);
            }, 'sq');
        });
    }

}
