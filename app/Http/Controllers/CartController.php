<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Utils\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        DB::beginTransaction();
        try {
            $order = Order::create([
                'customer' => $request->customer,
                'email' => $request->email,
                'address' => $request->address,
                'phone_number' => $request->phone_number,
                'note' => $request->note,
                'payment_method' => $request->payment_method,
                'user_id' => Auth::check() ? Auth::id() : 0,
                'sub_total' => ShoppingCart::getTotal(),
            ]);

            $cartItems = ShoppingCart::getAll();
            foreach ($cartItems as $cartItem) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $cartItem->id,
                    'price' => $cartItem->price,
                    'quantity' => $cartItem->quantity,
                ]);
            }

            ShoppingCart::clearAll();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('page.pageSuccess')->with([
                'error' => "Order failed!"
            ]);
        }


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
