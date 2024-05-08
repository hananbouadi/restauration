<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
        'image'
    ];
     
    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }

    public function orderitems() {
        return $this->hasMany(Orderitem::class);
    }
}
