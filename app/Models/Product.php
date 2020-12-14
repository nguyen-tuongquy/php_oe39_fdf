<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(Orderdetail::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function favourities()
    {
        return $this->hasMany(Rating::class);
    }
}
