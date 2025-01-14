<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class resourcesController extends Controller
{
    public function index()
    {
        $categories = Category::pluck('name');
        
        return view('frontend.resources',compact('categories'));
    }
}
