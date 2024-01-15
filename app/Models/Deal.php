<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'product_variation_id', 'start_time', 'end_time', 'discount',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function variation(){
        return $this->belongsTo(ProductVariation::class, 'product_variation_id');
    }
}
