
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title> page title </title>
	{{ HTML::style('assets/css/style.css') }}
</head>

<style type="text/css">
	.important {color:red;}
</style>

<body>

@extends('menu')
@section('content')
<html stuff>
@stop

<div class="bgImage"></div>
<h2> p3 </3>

<p>
	page4 blade php 2
</p>

<p class="important">
	important __________
</p>

{{ HTML::image("assets/img/lubuntuPix.jpg")}} 
<!--comments -->
</body>