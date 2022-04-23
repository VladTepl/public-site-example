@extends('default.layouts.layout')


<form method="get" action="/user/save">
@csrf
	<input type="text" id="name" name="name" value="" placeholder="Имя"></br></br>
	<input type="text" id="age" name="age" value="" placeholder="age"></br></br>
	<input type="text" id="salary" name="salary" value="" placeholder="salary"></br></br>
	
	<button type="submit">Submit</button>
	
<p>The user will be added to the database table</p>