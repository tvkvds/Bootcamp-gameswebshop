<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;


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

    public function onlyFiveProducts()
    {
            //return five product results from pivot table per category
            //
            //return $this->products()->limit(5)->where('category_id, $categoryId); ??

            return $this->products()->limit(5);
            //this returns five result from pivot table, period.
    }

    

    
    

}
