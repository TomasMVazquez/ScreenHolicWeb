<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Curl;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $data = Curl::to("https://api.themoviedb.org/3/trending/all/day?api_key=8cf5839284635d0e7a91a80666d3c22d")->get();
      $jsonData = json_decode($data,true);
      $totalPages = $jsonData["total_pages"];
      $totalResults = $jsonData["total_results"];
      $trends = $jsonData["results"];
      return view('home',compact('trends','totalPages'));
    }


}
