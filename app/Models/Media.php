<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable =
        [
            'type',
            'path',
            'is_main',
            'product_id'
        ];
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}