<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 


class Product extends Model
{
    use HasFactory, SoftDeletes;

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'price_discount',
        'stock',
        'publisher',
        'release_date',
        'timestamps',
        'deleted'
    ];

    public function images()
    {
        return $this->hasMany(Image::class, 'product_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function platforms()
    {
        return $this->belongsToMany(Platform::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function orders()
    {
        return $this->belongsTo(Order::class)->withPivot('amount');
    }

    

    

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false)
        
        {
            #product name
            $query
                ->where('name', 'like', '%' . request('search') . '%')
                ->limit(15);   
            
            #product price range
            $query->when($filters['price_min'] ?? false, fn ($query, $price_min)=>
                $query->where('price', '>', $price_min)
            );

            $query->when($filters['price_max'] ?? false, fn ($query, $price_max)=>
                $query->where('price', '>', $price_max)
            );
            
            #product category/categories (should take in an array and check for each category in array)
            $query->when($filters['categories_filter'] ?? false , fn($query, $categories) =>
                $query->whereHas('categories', fn ($query) => 
                    $query->where('id', $categories)
                )
            );
            
            
        }

    }

}
