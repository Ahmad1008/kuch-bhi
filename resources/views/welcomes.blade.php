@extends('layout')
@section('title','Welcome 5B')

@section('navbar')
@parent
<p>Append</p>
@endsection
@section('content')
<div class="jumbotron">
	<h1>Welcome </h1>
	<p>Controllers</p>
	<a id="index" class="navbar-brand" href="{{url('/simple')}}">Checking Simple controller </a> <br>
	<a id="index" class="navbar-brand" href="{{url('/simpledatapassing')}}">Sending data to page form controller</a> 
</div>
@endsection
