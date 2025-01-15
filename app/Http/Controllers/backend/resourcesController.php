<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Laravel\Facades\Image;

class resourcesController extends Controller
{

    // public function index()
    // {
    //     // Retrieve all resources, ordered by ID in descending order, and paginate them with 10 records per page
    //     $resources = Resource::with('category')->orderBy('id', 'DESC')->paginate(10);        // dd($resources);

    //     // Return the 'index' view with the resources data passed as a variable
    //     return view('backend.resources.index', compact('resources'));
    // }

    public function index()
{
    // Retrieve resources with their related category, ordered by ID, and paginated
    $resources = Resource::with('category')->orderBy('id', 'DESC')->paginate(10);

    // Process descriptions for each resource
    foreach ($resources as $resource) {
        // Add the short description attribute for each resource
        $resource->short_description = $this->getShortDescription($resource->description);
        // dd($resource->short_description);
    }

    // Return the 'index' view with resources data
    return view('backend.resources.index', compact('resources'));
}

public function getShortDescription($description)
{
    // Remove HTML tags and split the description into words
    $words = explode(' ', strip_tags($description));  

    // If there are more than 10 words, truncate and add "..."
    if (count($words) > 19) {
    //    dd(implode(' ', array_slice($words, 0, 19)) . '...');
        return implode(' ', array_slice($words, 0, 19)) . '...';
    }

    return implode(' ', $words);  // Return as is if less than or equal to 10 words
}


    public function create()
    {
        // Retrieve all categories from the Category model
        $categories = Category::all();

        // Return the 'create' view with the categories data passed as a variable
        return view('backend.resources.create', compact('categories'));
    }


    public function store(Request $request)
    {
        // Using Validator::make to validate the request data
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {

            $resource = new Resource();
            $resource->category_id = $request->category_id;
            $resource->description = $request->description;

            // Check if an image was uploaded
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $file_extension = $image->extension();
                $file_name = Carbon::now()->timestamp . '.' . $file_extension;

                // Generate thumbnail image
                $this->GenerateResourceThumbnailImage($image, $file_name);
                $resource->images = $file_name;   
                 // Save the resource to the database     
         $resource->save();
         return redirect()->route('resources.list')->with('success','Record has been added successfully !');
            }

        } catch (\Exception $e) {
            // Catch any exceptions and log the error
            return redirect()->back()->with('error', 'An error occurred while adding the resource: ' . $e->getMessage());
        }
    }

    public function GenerateResourceThumbnailImage($image, $file_name)
    {
        $destinationPath = public_path('uploads/backend/resources/');

        // Open the image and create a thumbnail
        $destinationPath=public_path('uploads/backend/resources/');
        $img=Image::read($image->path());
        $img->cover(124,124,"top");
        $img->resize(124,124 ,function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath.''.$file_name);
    }

    // public function store(Request $request)
    // {        
    //     // dd($request->all());
    //      $request->validate([
    //           'category_id' => 'required',
    //           'description' => 'required',
    //           'image' => 'mimes:png,jpg,jpeg|max:2048'
    //      ]);
    
    //      $resource = new Resource();
    //      $resource->category_id = $request->category_id;
    //      $resource->description = $request->description;
    //      $image = $request->file('image');
    //      $file_extention = $request->file('image')->extension();
    //      $file_name = carbon::now()->timestamp . '.' . $file_extention;    
    //      $this->GenerateResourceThumbailImage($image, $file_name);
    //      $resource->images = $file_name;        
    //      $resource->save();
    //      return redirect()->route('resources.list')->with('success','Record has been added successfully !');
    // }
    
    // public function GenerateResourceThumbailImage($image, $file_name){
    
    //     $destinationPath=public_path('uploads/backend/resources/');
    //     $img=Image::read($image->path());
    //     $img->cover(124,124,"top");
    //     $img->resize(124,124 ,function($constraint){
    //         $constraint->aspectRatio();
    //     })->save($destinationPath.''.$file_name);
    
    // }
}
