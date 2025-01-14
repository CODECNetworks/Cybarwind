<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class resourcesCategoriesController extends Controller
{
  
    public function index(){

         $brands=Category::orderBy('id','DESC')->paginate(10);
        
        return view('backend.category.index',compact('brands'));
    }


    public function create(){

       return view('backend.category.create');

   }

   public function store(Request $request)
   {
       try {
           // Validate input using Validator::make
           $validator = Validator::make($request->all(), [
               'name' => 'required',
               'title' => 'required',
           ]);
   
           // Check if validation fails
           if ($validator->fails()) {
               return redirect()->back()
                   ->withErrors($validator)
                   ->withInput(); // Return old input for user convenience
           }
   
           // Save the new category
           $category = new Category();
           $category->name = $request->name;
           $category->title = $request->title;
           $category->save();
   
           // Redirect with a success message
           return redirect()->route('resources-category.list')
               ->with('success', 'Category created successfully!');
   
       } catch (\Exception $e) {
           // Handle any unexpected errors
           return redirect()->back()
               ->withErrors(['error' => 'Something went wrong. Please try again later.'])
               ->withInput();
       }
   }
   

}
