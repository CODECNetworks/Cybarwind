<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Laravel\Facades\Image;

class resourcesController extends Controller
{

    public function index(){

        $resources=Resource::orderBy('id','DESC')->paginate(10);
        $categories=Category::all();
       
       return view('backend.resource.index',compact('categories','resources'));
   }

   public function create(){

      return view('backend.resource.create');

  }

    public function store(Request $request)
    {        
        // dd($request->all());
         $request->validate([
              'category_id' => 'required',
              'description' => 'required',
              'image' => 'mimes:png,jpg,jpeg|max:2048'
         ]);
    
         $resource = new Resource();
         $resource->name = $request->name;
         $image = $request->file('image');
         $file_extention = $request->file('image')->extension();
         $file_name = carbon::now()->timestamp . '.' . $file_extention;    
         $this->GenerateResourceThumbailImage($image, $file_name);
         $resource->image = $file_name;        
         $resource->save();
         return redirect()->route('resources.list')->with('success','Record has been added successfully !');
    }
    
    public function GenerateResourceThumbailImage($image, $file_name){
    
        $destinationPath=public_path('uploads/backend/resources');
        $img=Image::read($image->path());
        $img->cover(124,124,"top");
        $img->resize(124,124 ,function($constraint){
            $constraint->aspectRatio();
        })->save($destinationPath.''.$file_name);
    
    }
}
