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
        return $this->belongsTo(Platform::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function orders()
    {
        return $this->belongsTo(Order::class)->withPivot('amount');
    }

    // public function avgRatings()
    // {
        
    //     return Rating::withSum('ratings', 'rating')->get();
    // }

    // public function userRating($user_id)
    // {
    //     return Rating::where('user_id', '=', $user_id)->get();  
    // }
}
