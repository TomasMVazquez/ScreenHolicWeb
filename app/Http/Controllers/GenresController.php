<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Curl;

class GenresController extends Controller
{
  public function getGenreSerie()
  {
    $data = Curl::to("https://api.themoviedb.org/3/genre/tv/list?api_key=8cf5839284635d0e7a91a80666d3c22d&language=es-ES")->get();
    $jsonData = json_decode($data,true);
    $genresSeries = $jsonData["genres"];
    return $genresSeries;
  }
  public function getGenreMovie()
  {
    $data = Curl::to("https://api.themoviedb.org/3/genre/movie/list?api_key=8cf5839284635d0e7a91a80666d3c22d&language=es-ES")->get();
    $jsonData = json_decode($data,true);
    $genresMovies = $jsonData["genres"];
    return $genresMovies;
  }

  public function index()
  {
    $data = Curl::to("https://api.themoviedb.org/3/genre/movie/list?api_key=8cf5839284635d0e7a91a80666d3c22d&language=es-ES")->get();
    $jsonData = json_decode($data,true);
    $genres = $jsonData["genres"];
    // $genres->getGenreMovie();
    return view('genres-index', compact('genres'));
  }
}
