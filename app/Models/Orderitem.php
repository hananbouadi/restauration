<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    use HasFactory;

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function recipe() {
        return $this->belongsTo(Recipe::class);
    }
}
