<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shops';

    /**
     * The products that belong to the shop.
     */
    public function products()
    {
        return $this->belongsToMany('App\Products');
    }
}
