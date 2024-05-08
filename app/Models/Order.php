<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function deliveryMan() {
        return $this->belongsTo(Deliverymen::class);
    }

    public function confirmedBy() {
        return $this->belongsTo(Orderconfirmer::class);
    }

    public function chef() {
        return $this->belongsTo(Restaurantstaff::class);
    }

    public function orderItems() {
        return $this->hasMany(Orderitem::class);
    }
}
