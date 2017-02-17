<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    /**
     * The shops that belong to the product.
     */
    public function shops()
    {
        return $this->belongsToMany('App\Shop');
    }
}
