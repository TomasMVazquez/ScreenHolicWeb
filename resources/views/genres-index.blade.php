{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

@section('pageTitle', 'Listado de Géneros')

@section('mainContent')
	<!-- Listado de géneros -->
	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<h1>Listado de generos</h1>
		<h2>Peliculas</h2>
		<ul>
			@foreach ($genresMovies as $genre)
				<li>
					<b> {{ $genre['name'] }} </b> <br>
			@endforeach
		</ul>
		<h2>Series</h2>
		<ul>
			@foreach ($genresSeries as $genre)
				<li>
					<b> {{ $genre['name'] }} </b> <br>
			@endforeach
		</ul>
	</div>
@endsection
