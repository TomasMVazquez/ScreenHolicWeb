{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

@section('pageTitle', 'Movies')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')

<div class="cardy">
  @foreach ($movies as $movie)

    <div class="card" style="width: 18rem;margin-top: 10px;">
      <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}" class="card-img-top" alt="...">
      <div class="card-body cardShow">
        <h5 class="card-title">{{ $movie['title']}}</h5>
        <h6 class="card-text">{{ $movie['release_date']}}</h6>
        <p class="card-text">{{ $movie['overview']}}</p>
        <a href="/movies/{{ $movie['id']}}" class="btn btn-primary btnCard">Ver</a>
      </div>
    </div>

  @endforeach

</div>
<br>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>

{{-- {{ dd($movies,$totalPages,$totalResults) }} --}}

@endsection
