<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;




class spaceController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }
    
        public function index() 
                {
        $url = ('http://api.open-notify.org/astros.json' );
        $client = new \GuzzleHttp\Client();
        $array = $client->get($url);
        $results = $array->getBody()->getContents();
        $data = json_decode($results, true);
        return view('space.space')
                ->withData($data);
         
    }
}
