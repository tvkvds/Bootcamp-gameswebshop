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

}
