<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Product;

class Shop extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Product', 'product_shop',
            'shop_id', 'product_id');
    }

    public function scopeNotAddProducts($query)
    {
        $productIdAdded = DB::table('product_shop')
            ->select('product_id as id')
            ->where('shop_id', '=', $this->getAttribute('id'))
            ->get();
        $productIds = [];
        foreach ($productIdAdded as $product)
        {
            $productIds[] = $product->id;
        }
        $products = Product::select('id', 'name')->whereNotIn('id', $productIds)->get();
        $productArray = [];
        foreach ($products as $product)
        {
            $productArray[$product->id] = $product->name;
        }
        return $productArray;
//        return $query->with(['products' => function($product) use ($productIdAdded) {
//            $product->whereNotIn('id', $productIdAdded);
//        }]);
//        return $query->products()->whereNotIn('id', $productIdAdded);
    }
}
