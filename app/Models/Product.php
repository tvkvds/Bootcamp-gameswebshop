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
        return $this->hasMany(Image::class);
    }
}
