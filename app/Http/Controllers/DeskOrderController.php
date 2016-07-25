<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
//use App\Http\Controllers;  

class DeskOrderController extends Controller
{
    //
     public function index(){ 
  $desklists = DB::select('select * from tbldesktop'); 
  return view('desk_view',['desklists'=>$desklists]); 
 }
}
