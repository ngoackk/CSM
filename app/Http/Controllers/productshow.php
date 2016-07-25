<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class productshow extends Controller
{
    //    public function index(){ 
  $productlists = DB::select('select * from tblproduct'); 
  return view('productshow',['productlists'=>$productlists]); 
 }
}
