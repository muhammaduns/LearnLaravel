<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Post;   
class HomeController extends Controller
{
    public function index() 
    {

            // first controller here
    // $allCatogries = ['Category 1' , 'Category 2'];

    // $allCatogries = DB::table('categories')->get();
    
    
    $categories = Category::all();
    
    $posts = Post::when(request('category_id'), function($query){
            $query->where('category_id',request('category_id'));
                
    })

            ->latest()
            ->get();

    return view('index', 
    compact('categories', 'posts')); 

    // return view('index', [
    //     'categories' => $allCatogries, 
    //     'posts' => $posts
    // ]);
    }

}
