<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use DB;
class admin extends Controller
{
    public function upload(Request $request)
    {
      $cate = $request->selectcategory;
      $name = $request->textinput;
      $price = $request->priceinput;
      $decrpt = $request->textarea;
      $img = $request->file('img');
      $imgName = $img->getClientOriginalName();
      $img->move('images/', $imgName);

      DB::table('product_master')->insert(["category" => $cate, "product_name" => $name, "price" => $price, "description" => $decrpt, "img" => $imgName]);
      return redirect('/');
    }
    public function putProduct()
    {
        $products = DB::table('product_master')->get()->all();
        return view('welcome', compact('products'));
    }
}
