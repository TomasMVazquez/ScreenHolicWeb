{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

@section('pageTitle', 'Movies')
{{-- Como solo nos interesa mandar un string al yield, podemos pasar dicho string como 2do parámetro de la función @section() --}}

@section('mainContent')

<div class="cardy">
  @foreach ($series as $serie)

    <div class="card" style="width: 18rem;margin-top: 10px;">
      <img src="https://image.tmdb.org/t/p/w500{{ $serie['poster_path'] }}" class="card-img-top" alt="...">
      <div class="card-body cardShow">
        <h5 class="card-title">{{ $serie['name']}}</h5>
        <h6 class="card-text">{{ $serie['first_air_date']}}</h6>
        <p class="card-text">{{ str_limit($serie['overview'],100) }}</p>
        <a href="/series/{{ $serie['id']}}" class="btn btn-primary btnCard">Ver</a>
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
        @for ($i=1; $i < 6 ; $i++)
          <li class="page-item"><a class="page-link" href="/series/page/{{ $i }}">{{ $i }}</a></li>
        @endfor
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>

{{-- {{ dd($movies,$totalPages,$totalResults) }} --}}

@endsection
