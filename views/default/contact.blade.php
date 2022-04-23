@extends('default.layouts.layout')



<form method="post" action="{{route('result')}}">
@csrf
	<input type="text" id="name" name="name" value="" placeholder="Имя"></br></br>
	<input type="email" id="email" name="email" value="" placeholder="email"></br></br>
	<input type="text" id="site" name="site" value="" placeholder="Site"></br></br>
	<textarea  id="email" name="text" rows="3">Some text</textarea></br></br>
	<button type="submit">Submit</button>