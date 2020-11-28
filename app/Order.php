<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Checkout;

class Order extends Model
{
    protected $primaryKey = 'order_id';

    protected $fillable = [
        'user_id',
        'order_name',
        'order_phone',
        'order_city',
        'order_district',
        'order_ward',
        'order_address',
        'order_status',
        'ship_method',
        'pay_method',
        'order_total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function checkouts()
    {
        return $this->hasMany(Checkout::class, 'order_id');
    }
}
