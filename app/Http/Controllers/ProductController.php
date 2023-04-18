<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $info = DB::table('product')->get();
        return view('welcome',['info' => $info]);
    }
}
