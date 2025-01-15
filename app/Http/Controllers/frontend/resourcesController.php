<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Resource;
use Illuminate\Http\Request;

class resourcesController extends Controller
{
    public function index()
    {
          $categories1 = Category::pluck('name'); 
        
        // $categories = Category::with('resources')->get();

        $categories = Category::with(['resources' => function($query) {
            // Get only the first resource for each category
            $query->distinct()->take(1);
        }])->get();
        
    
        return view('frontend.resources',compact('categories','categories1'));
    }
}
