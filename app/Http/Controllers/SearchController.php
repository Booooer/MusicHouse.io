<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function search($data){
        $json = json_decode($data);

        $result = Product::where('title',$json)->get();

        if (empty($result)) {
            return json_encode("Не удалось найти совпадений в бд");
        }

        return json_encode($result);
    }
}
