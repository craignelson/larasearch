<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class MoviesController extends Controller
{
    public function __contructor() {
        $this->middleware('auth');
    }
    
    public function index(Request $request) {
        
        $movie = $request->input('movie');
        $url = ('http://www.omdbapi.com/?apikey=c96d5a98&t=' . $movie );
        
        $client = new \GuzzleHttp\Client();
        $array = $client->get($url);
        $movies = $array->getBody()->getContents();
        $data = json_decode($movies);
        return view('movie.results')
                ->withData($data);   
    }
   
}
