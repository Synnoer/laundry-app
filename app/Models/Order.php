<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_description',
        'quantity',
        'total_weight',
        'service',
        'fragrance',
        'total_price',
        'subtotal',
        'discount',
        'order_date',
        'completion_estimation_date'
    ];
}

