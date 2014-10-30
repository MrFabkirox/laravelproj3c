<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title> page title </title>
	<link media="all" type="text/css" rel="stylesheet" 
	href="assets/css/style.css">
</head>

<style type="text/css">
	.important {color:red;}
</style>

<body>

@extends('menu')
@section('content')
<html stuff>
@stop

	<h2>page2<h2>

		<p class="important">Paragraphe important en rouge</p>

		<p>
		add doctype. <br />
		charset.
		{{ HTML::style('css/style.css') }}
		</p>

		<img src="assets/img/lubuntuPix.png" alt='pix3'>
		{{ HTML::image('assets/img/lubuntuPix.png') alt='pix3' }} 

		<ol>
			<li>first element</li>
				<ul>
					<li>first sublist</li>
					<li>second sublist</li>
						<ol>
							<li>first</li>
							<li>second</li>
						</ol>
				</ul>
			<li>second element</li>
		</ol>
======================<br />
		<img src="lubuntuPix.jpg;" alt="pix"></a>
		<img src={{ HTML::image('http://localhost/lubuntuPix.jpg') alt="pix2" }} />
		{{ HTML::image('lubuntuPix.png') alt='pix3' }}
<br />======================<br />
		<li>
			<dl>
				<dt>first dt</dt>
				<dd>first dd</dd>

				<dt>first dt</dt>
				<dd>first dd</dd>

			<form action="http://localhost:8000/p3">
				<button> p3 </button>
			</form>


			<a href="http://localhost:8000/p3">p3</a>

			</dl>
		</li>

		<tr>
			<td>td1</td>
			<td>td2</td>
		</tr>

		<p>
			table avec border
		</p>

		<table>
			<caption>conjug</caption>

			<!-- premiere ligne horizontale -->
			<tr>
					<td colspan="2"></td>
					<th colspan="2"><premier group</th>
					<th colspan="2"><deuxiem group</th>
			</tr>

			<!-- deuxieme ligne horizontale -->
			<tr>
					<td colspan="2"></td>
					<th rowspan="2"><troisieme group</th>
					<th colspan="2"><premier groupe</th>
			</tr>
		</table>

</html>
</body>