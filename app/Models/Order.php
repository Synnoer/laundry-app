<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_details',
        'total_weight',
        'service',
        'fragrance',
        'order_date',
        'completion_estimation_date',
        'user_id'
    ];

    protected $casts = [
        'product_details' => 'array',
        'order_date' => 'datetime',
        'completion_estimation_date' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
