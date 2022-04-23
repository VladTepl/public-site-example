<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(){
		
		
		
		return view('default.contact',['title'=>'contact']);
	}
	public function result(Request $request){
		
		//dump($request->all());
		
		
		dump($request->query());
		
		$name=$request->input('name');
		return view('default.result',['title'=>'contact','name'=>$name]);
	}
}
