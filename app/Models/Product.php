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
        return $this->belongsToMany(Order::class)->withPivot('amount'); 
    }

    //filter products on search/shop page
    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false)
        
        {
            $query
                ->where('name', 'like', '%' . request('search') . '%');
        }
        
        if ($filters['categories'] ?? false)
        {
            foreach ($filters['categories'] as $category => $value)
            {
                $query->whereHas('categories', fn ($query) => 
                    $query->where('categories.id', $value)
                );  
            }
            
        }
        
        if ($filters['platforms'] ?? false)
        {
            foreach ($filters['platforms'] as $platform => $value)
            {
                $query->whereHas('platforms', fn ($query) => 
                    $query->where('platforms.id', $value)
                );
            }
        }

        #product price range
        $query->when($filters['price_min'] ?? false, fn ($query, $price_min)=>
            $query->where('price', '>', $price_min)
        );

        $query->when($filters['price_max'] ?? false, fn ($query, $price_max)=>
            $query->where('price', '>', $price_max)
        );

    }


}
