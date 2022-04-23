<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function show(){
		
		return view('default.addUser',['title'=>'addUser']);
		//$user=User::find(3);
		//$user->delete();
		
		//$users=User::all();
	/*
		$users=User::withTrashed()->restore();
		
		
		foreach($users as $user){
			if($user->trashed()){
				echo $user->name.' Удален</br>';
			}else{
				echo $user->name.' Не удален</br>';
			}
		}
		dump($users);
		*/
		
	}
	
	public function save(Request $request){
		
		if(isset($request->name)&&isset($request->age)&&isset($request->salary)){
		$user=new User;
		
		$user->name=$request->name;
		$user->age=$request->age;
		$user->salary=$request->salary;
		$user->save();
		
		}else{
			
			print "Fill the form";
				
		}
		
		return view('default.addUser',['title'=>'addUser']);
		//dump($user);
		
	}
		
		
}
