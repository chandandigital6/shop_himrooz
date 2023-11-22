<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function category(){
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function subCategory(){
        return $this->belongsTo(SubCategory::class, 'sub_categorie_id');
    }

    public function productImages(){
        return $this->hasMany(ProductImage::class, 'products_id');
    }

    public function variations(){
        return $this->hasMany(ProductVariation::class, 'product_id');
    }
}
