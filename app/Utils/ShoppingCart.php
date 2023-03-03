<?php

namespace App\Utils;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ShoppingCart
{
    const SHOPPING_CART = 'SHOPPING_CART';

    public static function getAll()
    {
        $items = Session::get(self::SHOPPING_CART) ?? [];
        return $items;
    }

    public static function addToCart($productId, $quantity)
    {
        $product = Product::findOrFail($productId);
        $items = Session::get(self::SHOPPING_CART) ?? [];
        $checkExist = false;
        foreach ($items as $key => $item) {
            if ($item->id == $productId) {
                $items[$key]->quantity += $quantity;
                $checkExist = true;
                break;
            }
        }
        if (!$checkExist) {
            $items[] = (object)[
                'id' => $product->id,
                'thumbnail' => $product->nameImage,
                'price' => $product->price,
                'quantity' => $quantity,
                'name' => $product->name,
                'sku' => $product->sku,
            ];
        }
        Session::put(self::SHOPPING_CART, $items);
        return true;
    }

    public static function getTotal()
    {
        $total = 0;
        $items = Session::get(self::SHOPPING_CART) ?? [];
        foreach ($items as $key => $item) {
            $total += $item->quantity * $item->price;
        }
        return $total;
    }

    public static function removeItem($productId)
    {
        Product::findOrFail($productId);
        $items = Session::get(self::SHOPPING_CART);
        foreach ($items as  $key => $item) {
            if ($item->id == $productId) {
                unset($items[$key]);
            }
        }
        Session::put(self::SHOPPING_CART, $items);
        return true;
    }

    public static function getTotalProduct()
    {
        $totalProduct = 0;
        $items = Session::get(self::SHOPPING_CART) ?? [];
        foreach ($items as $key => $item) {
            $totalProduct += $item->quantity;
        }
        return $totalProduct;
    }
    
    public static  function updateItems($products)
    {
        $cartItems = Session::get(self::SHOPPING_CART) ?? [];
        foreach ($products as $product) {
            $product = (object)$product;
            foreach ($cartItems as $key => $cartItem) {
                if ($cartItem->id == $product->id) {
                    $cartItems[$key]->quantity = $product->quantity;
                    break;
                }
            }
        }
        Session::put(self::SHOPPING_CART, $cartItems);
        return true;
    }

    public static function clearAll()
    {
        Session::forget(self::SHOPPING_CART);
    }
}
