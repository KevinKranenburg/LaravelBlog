<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct($category, $id = 0)
    {

        return 'Category = ' . $category . ' en id = ' . $id;
        return view ('product', ['category' => $category, 'id' => $id]);
    }
}
