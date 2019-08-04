{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

@section('pageTitle', 'Listado de Géneros')

@section('mainContent')
	<!-- Listado de géneros -->
	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<h2>Listado de generos</h2>
		<ul>
			@foreach ($genres as $genre)
				<li>
					<b> {{ $genre['name'] }} </b> <br>
			@endforeach
		</ul>
	</div>
@endsection
