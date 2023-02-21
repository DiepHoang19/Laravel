<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'sku',
        'quantity',
        'nameImage',
        'path'
    ];

    public function scopeSearchByKeyword($query, $keyword)
    {
        if ($keyword) {
            return $query->where('name', 'LIKE', '%' . $keyword . '%');
        }
        return $query;
    }
}
