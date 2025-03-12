<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shipping_user_name',
        'shipping_email',
        'shipping_phone',
        'shipping_address',
        'shipping_city',
        'shipping_province',
        'specific_address',
        'coupon_code',
        'coupon_discount',
        'total_price',
        'final_price',
        'payment_status',
        'payment_method',
        'status',
        'notes',
    ];
}
