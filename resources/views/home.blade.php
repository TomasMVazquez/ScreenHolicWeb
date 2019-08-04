{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

{{-- Llenando de información los @yield() --}}
{{-- @section('bodyClass', 'class=bg-olive') --}}

@section('pageTitle', 'Home')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')
  <h1>Trending</h1>
  <br>
  <div class="cardy">
    @foreach ($trends as $trend)
      @if (array_key_exists('name',$trend))
        <div class="card" style="width: 18rem;margin-top: 10px;">
          <img src="https://image.tmdb.org/t/p/w500{{ $trend['poster_path'] }}" class="card-img-top" alt="...">
          <div class="card-body cardShow">
            <h5 class="card-title">{{ $trend['name']}}</h5>
            <h6 class="card-text">{{ $trend['first_air_date']}}</h6>
            <p class="card-text">{{ $trend['overview']}}</p>
            <a href="/movies/{{ $trend['id']}}" class="btn btn-primary btnCard">Ver</a>
          </div>
        </div>
      @else
        <div class="card" style="width: 18rem;margin-top: 10px;">
          <img src="https://image.tmdb.org/t/p/w500{{ $trend['poster_path'] }}" class="card-img-top" alt="...">
          <div class="card-body cardShow">
            <h5 class="card-title">{{ $trend['title'] ? $trend['title'] : $trend['name']}}</h5>
            <h6 class="card-text">{{ $trend['release_date']}}</h6>
            <p class="card-text">{{ $trend['overview']}}</p>
            <a href="/movies/{{ $trend['id']}}" class="btn btn-primary btnCard">Ver</a>
          </div>
        </div>
      @endif
    @endforeach

  </div>
@endsection
