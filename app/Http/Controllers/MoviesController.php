<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Curl;

class MoviesController extends Controller
{
    public function pages()
    {
      $data = Curl::to("https://api.themoviedb.org/3/discover/movie?api_key=8cf5839284635d0e7a91a80666d3c22d&language=es-ES&sort_by=release_date.desc&include_adult=false&include_video=false&page=1")->get();
      $jsonData = json_decode($data,true);
      $totalPages = $jsonData["total_pages"];
      return $totalPages;
    }

    public function getMovies()
    {
      $data = Curl::to("https://api.themoviedb.org/3/discover/movie?api_key=8cf5839284635d0e7a91a80666d3c22d&language=es-ES&sort_by=popularity.desc&include_adult=false&include_video=false")->get();
      $jsonData = json_decode($data,true);
      return $jsonData;
    }

    public function index()
    {
      $jsonData = $this->getMovies();
      $totalPages = $jsonData["total_pages"];
      $totalResults = $jsonData["total_results"];
      $movies = $jsonData["results"];

      return view('movies-all', compact('movies','totalPages','totalResults'));
    }
}
