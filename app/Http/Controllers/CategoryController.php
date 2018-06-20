<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index() {
        $category = Category::all();

        return view('category',
            [
                'titel' => 'Dit is een titel',
                'categories' => $category
            ]
            
            
        );
    }
}
