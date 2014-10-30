
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

<h2> p7 , Formulaires </h2>
<!--comments -->


<a href="http://localhost:8000/p3"> p3 </a>
<a href="http://localhost:8000/p4"> p4 </a>

<form action="http://localhost:8000/p7" method="GET">
	<input type="text" name="nom" placeholder="placeholder" value="value"/>
	<input type="password" name="radio" placeholder="placeholder" id="forcssandjs" disabled="true"/>
	<input type="submit"/>

	<p>
		site du cname : <input type="radio" name="site" value="st martin">
						<input type="radio" name="site" value="blabla">
	</p>

</form>

<? php
	echo "bonjour" $_GET['nom'];
?>

<? php
	echo "bonjour" ;
?>



</body>