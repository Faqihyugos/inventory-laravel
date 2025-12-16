<?php

namespace App\Models;

use App\Traits\HasScope;
use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasScope;

    protected $fillable = ['user_id', 'product_id', 'quantity', 'status'];

    protected $casts = [
        'status' => OrderStatus::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
