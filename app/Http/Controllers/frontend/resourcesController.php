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
          $categories1 = Category::pluck('name'); // store category name and category id 
         // Retrieve all resources, ordered by ID in descending order, and paginate them with 10 records per page
        //  $resources = Resource::with('category')->get();        // dd($resources);

        $categories = Category::with('resources')->get();

        // return view('resources.index', compact('categories'));

        $trendings = Category::with(['resources' => function($query) {
            // Get only the first resource for each category
            $query->distinct()->take(1);
        }])->get();
        
        return view('frontend.resources',compact('categories','categories1','trendings'));
    }
}
