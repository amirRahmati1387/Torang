<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =
        [
            'title',
            'description',
            'summary',
            'show_home',
            'price',
            'discount',
            'carat',
            'Fee',
            'weight',
            'brand_id'
        ];
    // public function categories()
    // {
    //     return $this->belongsToMany(category::class, 'product_categories');
    // }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories', 'product_id', 'category_id');
    }
    public function medias()
    {
        return $this->hasMany(Media::class);
    }
    public function attributes()
    {
        return $this->hasMany(Attribute::class, 'product_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brands::class);
    }
}