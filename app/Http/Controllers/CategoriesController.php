<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function categories() {
        $categories = Category::all();
        return view('site.categories', ['categories' => $categories]);
    }
}
