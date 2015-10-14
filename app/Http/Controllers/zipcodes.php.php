<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class zipcodes.php extends Controller
{
  
   function index(){


                 $zipcode=\App\ZipCode::all();
         return view('zipcode',['zipcode'=>$zipcode]);
 }
