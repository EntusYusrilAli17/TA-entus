<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class EshopController extends Controller
{
    public function __invoke(): View
    {
        $products = Product::with('media')->get();

        return view('eshop.home', compact('products'));
    }
}
