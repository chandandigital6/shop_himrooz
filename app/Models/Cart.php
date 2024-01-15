<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'product_id', 'product_variation_id', 'amount', 'quantity',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function variation(){
        return $this->belongsTo(ProductVariation::class, 'product_variation_id');
    }

    public function deal(){
        return $this->hasOne(Deal::class, 'product_variation_id');
    }
}
