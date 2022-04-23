<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id=1){
		
		$array=['title'=>'article',
				'data'=>[
						'one'=>'List 1',
						'two'=>'List 2',
						'three'=>'List 3',
						'four'=>'List 4',
						'five'=>'List 5'
						],
				'dataI'=>['List 1','List 2','List 3','List 4','List 5'],
						
		'script'=>"<script>alert('hello')</script>"];
		
		return view('default.article',$array);
	}
}
