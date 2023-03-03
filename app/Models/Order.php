<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer',
        'email',
        'phone_number',
        'address',
        'note',
        'payment_method',
        'user_id',
        'sub_total'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }


    public function totalMoney()
    {
        $total = 0;
        foreach ($this->items()->get() as $item) {
            $total += $item->price * $item->quantity;
        }
        return $total;
    }
}
