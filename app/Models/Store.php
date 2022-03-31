<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    // create Fillable to massive creation of stores
    protected $fillable = ['name','description'];

// create function to save the products
    public function products(){
        // return with the hasMany where this model have many products
        return $this->hasMany(Product::class); // store_id
    }
}
