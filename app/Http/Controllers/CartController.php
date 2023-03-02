<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Models\Order;
use App\Models\Product;
use App\Utils\ShoppingCart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shoppingCart()
    {
        return view('client.pages.cart');
    }

    public function checkout()
    {
        $product =  Product::all();
        return view('client.pages.checkout');
    }


    public function postCheckout(CheckoutRequest $request)
    {
        $order = Order::create([
            'customer' => $request->customer,
            'email' => $request->email,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'note' => $request->note,
            'payment_method' => $request->payment_method,
        ]);


        return redirect()->route('page.pageSuccess')->with([
            'message' => "Order successfully!"
        ]);
    }


    public function detail($id)
    {
        $product =  Product::findOrFail($id);
        return view('client.pages.product-detail', [
            'product' => $product
        ]);
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

    public function removeCartItem($id)
    {
        Product::findOrFail($id);
        $result = ShoppingCart::removeItem($id);
        if ($result) {
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
