<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PagesController extends Controller
{
    public function index(){
    	$products = Post::where('post_type','PRODUCT')
    					->where('featured', 1)
    					->get();
    	$furnitures = $products->where('category_id', 2);
    	$offices = $products->where('category_id', 3);
    	$architects = $products->where('category_id', 4);

    	$projects = Post::where('post_type', 'PROJECT')
    					->where('status', 'PUBLISHED')
    					->take(5)
    					->get();

    	return view('index', [
    				'projects' => $projects,
    				'offices' => $offices,
    				'architects' => $architects,
    				'furnitures' => $furnitures
    				]);
    }
}
