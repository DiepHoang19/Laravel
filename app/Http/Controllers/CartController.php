<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Utils\ShoppingCart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shoppingCart()
    {
        return view('client.pages.card');
    }

    public function checkout()
    {
        return view('client.pages.checkout');
    }

    public function detail()
    {
        return view('client.pages.product-detail');
    }

    public function wishlist()
    {
        return view('client.pages.shop-wishlist');
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|int|exists:products,id',
            'quantity' => 'required|int'
        ]);
        $result = ShoppingCart::addToCart($request->product_id, $request->quantity);
        if ($result) {
            return redirect()->back()->with([
                'message' => 'Add to cart successfully !'
            ]);
        }
        return redirect()->back()->with([
            'error' => 'Add to cart failed !'
        ]);
    }

    public function removeCartItem( $id)
    {
        Product::findOrFail($id);
        $result = ShoppingCart::removeItem($id);
        if($result) {
            return back()->with([
                'message' => 'Remove cart item success'
            ]);
        }
        return back()->with([
            'error' => 'Remove cart item failed'
        ]);
    }

    public function updateCart(Request $request)
    {
        $validated = $request->validate([
            'products' => 'required|array',
            'products.*.id' => 'required|int|exists:products,id',
            'products.*.quantity' => 'required|int',
        ]);
        $result = ShoppingCart::updateItems($request->products);
        return back();
    }
}
