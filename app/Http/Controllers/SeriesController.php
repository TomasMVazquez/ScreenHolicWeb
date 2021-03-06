<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Curl;

class SeriesController extends Controller
{
  public function getPage($id)
  {
    $data = Curl::to("https://api.themoviedb.org/3/discover/tv?api_key=8cf5839284635d0e7a91a80666d3c22d&language=es-ES&sort_by=popularity.desc&page=".$id."&timezone=America%2FBuenos_Aires&include_null_first_air_dates=false")->get();
    $jsonData = json_decode($data,true);
    return $jsonData;
  }
  public function getSeries()
  {
    $data = Curl::to("https://api.themoviedb.org/3/discover/tv?api_key=8cf5839284635d0e7a91a80666d3c22d&language=es-ES&sort_by=popularity.desc&page=1&timezone=America%2FBuenos_Aires&include_null_first_air_dates=false")->get();
    $jsonData = json_decode($data,true);
    return $jsonData;
  }
  public function index()
  {
    $jsonData = $this->getSeries();
    $totalPages = $jsonData["total_pages"];
    $totalResults = $jsonData["total_results"];
    $series = $jsonData["results"];

    return view('series-all', compact('series','totalPages','totalResults'));
  }

  public function pages($id)
  {
    $jsonData = $this->getPage($id);
    $totalPages = $jsonData["total_pages"];
    $totalResults = $jsonData["total_results"];
    $series = $jsonData["results"];

    return view('series-all', compact('series','totalPages','totalResults'));
  }

  public function getSerieDetail($id)
  {
    $data = Curl::to("https://api.themoviedb.org/3/tv/".$id."?api_key=8cf5839284635d0e7a91a80666d3c22d&language=es-ES")->get();
    $jsonData = json_decode($data,true);
    return $jsonData;
  }

  public function detail($id)
  {
    $serieDetail = $this->getSerieDetail($id);
    return view('serie-detail', compact('serieDetail'));
  }
}
