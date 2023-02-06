<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = 'Products';
        return view('products.index', compact('title'));
    }

    public function detail($id) {
        return "Product's id = ". $id;
    }
}
