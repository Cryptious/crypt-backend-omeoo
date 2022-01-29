<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all(Request $request){

        $product = product::with(['images']);

        return ResponseFormatter::success(
            $product->paginate(),'data Produk Berhasil diambil'
        );
    }
}
