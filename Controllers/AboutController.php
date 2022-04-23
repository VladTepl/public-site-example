<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AboutController extends Controller
{
   public function show(){
	   
	return view('default.about')->withTitle('about');
	}
	

} 
