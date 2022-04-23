<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
	
	public function show(){
		
		$array=['title'=>'index',
				'data'=>[
						'one'=>'List 1',
						'two'=>'List 2',
						'three'=>'List 3',
						'four'=>'List 4',
						'five'=>'List 5'
						],
		//'script'=>"<script>alert('hello')</script>"
				];
		
		return view('default.index',$array);
	}
}
