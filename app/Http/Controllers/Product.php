<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ProductM;
class Product extends Controller
{
    public function Allproduct(Request $request){
       $Products = DB::table('_product')->get();
       return $Products;
    }
}
