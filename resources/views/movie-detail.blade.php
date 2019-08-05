{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

@section('pageTitle', 'Movies')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}
@php
  $genres = ""
@endphp

@section('mainContent')
<br>
<div class="cardy" style="justify-content: center;">

    <div class="card mb-6" style="max-width: 1140px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="https://image.tmdb.org/t/p/w500{{ $movieDetail['backdrop_path'] }}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body cardShow">
                    <h5 class="card-title">{{ $movieDetail['title']}}</h5>
                    <p class="card-text"><small class="text-muted">{{ $movieDetail['release_date']}}</small></p>
                    @if (count($movieDetail['genres'])==1)
                      <p class="card-text"><small class="text-muted">{{ $movieDetail['genres'][0]['name']}}</small></p>
                    @else
                      @for ($i = 0; $i < count($movieDetail['genres']); $i++)
                        @php
                        $genres = $movieDetail['genres'][$i]['name'] . " - " . $genres
                        @endphp
                      @endfor
                      <p class="card-text"><small class="text-muted">{{ $genres}}</small></p>
                    @endif
                    <p class="card-text">{{$movieDetail['overview']}}</p>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
