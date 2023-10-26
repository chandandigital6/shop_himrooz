<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductSubcategoryController extends Controller
{
    public function getProductSubcategories(Categorie $category) {
        return response()->json($category->subCategories);
    }

}
