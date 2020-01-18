<?php

namespace App\Http\Controllers;


use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class fixturesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
        public function index() 
    {    
//        $client     = new \GuzzleHttp\Client;
//        $request    = new \GuzzleHttp\Psr7\Request('GET','https://api-football-v1.p.rapidapi.com/v2/predictions/157462');
//
//        $request->setRequestUrl('https://api-football-v1.p.rapidapi.com/v2/predictions/157462');
//        $request->setRequestMethod('GET');
//        $request->setHeaders(array(
//                'x-rapidapi-host' => 'api-football-v1.p.rapidapi.com',
//                'x-rapidapi-key' => 'd65147fd40mshd191c90491e4421p19ce0bjsnb7fb518cb18c'
//        ));
//
//        $client->enqueue($request)->send();
//        $response = $client->getResponse();
//
//        dd($response);
        $data = 'Coming Soon...';
        return view('fixtures.results')->withData($data);
        }
}
