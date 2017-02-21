<?php

namespace App\Http\Controllers;

use App\Shop;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shopList = Shop::paginate(5);

        return view('shop.index', [
            'shopList' => $shopList,
        ]);
    }

    public function shopItems($id)
    {
        $shop = Shop::find($id);

        return view('shop.shopItems', [
            'shop' => $shop,
        ]);
    }

    public function addItem(Request $request)
    {
        $shopId     = $request->input('shopId');
        $productIds = $request->input('productIds');
        Shop::find($shopId)->products()->attach($productIds);
        return redirect()->action('ShopController@index');
    }

    public function deleteItem(Request $request)
    {
        $shopId    = $request->input('shopId');
        $productId = $request->input('productId');
        Shop::find($shopId)->products()->detach($productId);
        return redirect()->action('ShopController@shopItems', ['id' => $shopId]);
    }
}
