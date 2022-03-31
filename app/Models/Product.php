<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // create Fillable to massive creation
    protected $fillable = ['name','description','price'];

    // get to access the price value
    public function getPriceAttribute()
    {
        return $this->attributes['price'] / 100; // 2000 / 100 = 20.00 
    }

    // to set the price value
    public function setPriceAttribute($attr){
        return $this->attributes['price'] = $attr * 100; // saving value with integer
    }

    // create function store
    public function store(){
        // return products of all stores
        return $this->belongsTo(Store::class);
    }
}
