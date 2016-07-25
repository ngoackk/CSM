<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class ProductShowController extends Controller
{
       public function index(){ 
  $plist = DB::select('select * from tblproduct'); 
  return view('productshow',['plist'=>$plist]); 
 }
}
