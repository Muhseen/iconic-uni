<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainPageController extends Controller
{
    public function index()
    {
        $products = Product::orderBy(DB::raw('RAND()'))->take(10)->get();
        return view('guest.homepage')->withProducts($products);
    }
}
