<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    use HasFactory;


    protected $fillable = [
        'products_id',
        'tag_name',
    ];


    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }
}
