<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    public function uploadMedia(Request $request)
    {
        $uploadedFile = $request->file('file');


        $fileId =[];

    return response()->json(['id' => $fileId]);
}

}
