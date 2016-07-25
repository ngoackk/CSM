<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;  

class DeskOrder extends Controller
{
    //
     public function index(){ 
  $desklist = DB::select('select * from tbldesktop'); 
  return view('desk_view',['desklist'=>$desklist]); 
 }
}
