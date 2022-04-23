@extends('default.layouts.layout')

	@section('navbar')
		@parent
	@endsection
	
	@section('content')
		<p>Hello, {{$name}}!</p>
	@endsection
	
	@section('footer')
		@parent
	@endsection