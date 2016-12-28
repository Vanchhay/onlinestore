<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Social
class SocialsController extends Controller
{
    
    public function index(){
    	$socials = Social::all();
    	return view('partial/_socials')
    }
}
