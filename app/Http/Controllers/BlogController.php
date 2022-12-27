<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Image;

class BlogController extends Controller
{
    public function index(){
        $catagories = array();
        $blogs=array();
        return view('blog', compact('catagories','blogs'));

    }
    public function store(Request $request){
        if ($request->file('image')) {
            $thumbnailImage = $request->file('image');
            $thumbnailImageName = date('YmdHi') . $thumbnailImage->getClientOriginalName();
            Image::make($thumbnailImage)->save('photos/'.$thumbnailImageName);
            $save_url = 'photos/'.$thumbnailImageName;
        }
        $title = $request->input('title');
        $description = $request->input('description');
        //$catagory = $request->input('catagory');
        $blog = new Blog();
        $blog['title'] = $title;
        $blog['description'] = $description;
        //$blog['catagory'] = $catagory;
        $blog['image'] = $thumbnailImageName;
        $blog->save();
        
        $catagories = array();
        $blogs= Blog::all();
        return view('blog', compact('catagories','blogs'));

    }
    public function show(Request $request){
       
        $blogs = Blog::all();
        return view('blogGrid', compact('blogs'));
    }
    public function viewBlog($id){
        $blog = Blog::find($id);
        return view('blogArticle', compact('blog'));
    }
}
