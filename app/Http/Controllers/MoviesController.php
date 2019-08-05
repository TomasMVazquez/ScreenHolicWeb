<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Curl;

class MoviesController extends Controller
{
    public function getPage($id)
    {
      $data = Curl::to("https://api.themoviedb.org/3/discover/movie?api_key=8cf5839284635d0e7a91a80666d3c22d&language=es-ES&sort_by=release_date.desc&include_adult=false&include_video=false&page=".$id)->get();
      $jsonData = json_decode($data,true);
      return $jsonData;
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

    public function pages($id)
    {
      $jsonData = $this->getPage($id);
      $totalPages = $jsonData["total_pages"];
      $totalResults = $jsonData["total_results"];
      $movies = $jsonData["results"];
      return view('movies-all', compact('movies','totalPages','totalResults'));
    }

    public function getMovieDetail($id)
    {
      $data = Curl::to("https://api.themoviedb.org/3/movie/".$id."?api_key=8cf5839284635d0e7a91a80666d3c22d&language=es-ES")->get();
      $jsonData = json_decode($data,true);
      return $jsonData;
    }

    public function detail($id)
    {
      $movieDetail = $this->getMovieDetail($id);
      // $movieDetail = $jsonData["results"];
      return view('movie-detail', compact('movieDetail'));
    }
}
