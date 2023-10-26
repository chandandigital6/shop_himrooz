<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $guarded=['id'];
    use HasFactory;

    public function subCategories(){
        return $this->hasMany(SubCategory::class, 'categories_id');
    }
}