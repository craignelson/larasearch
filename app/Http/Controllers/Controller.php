<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function GetBookApi($url)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get($url);
        $response = $request->getBody()->getContents();
        // Convert JSON string to Object
        $books = json_decode($response, true);
//        print_r($books);
        for($i = 0; $i < 10; $i++){
            $imageURL = $books['items'][$i]['volumeInfo']['imageLinks']['thumbnail'];
            echo '<img src="' . $imageURL . '"> ';
            echo "<h2>" . $books['items'][$i]['volumeInfo']['title'] . ' ';
            echo "by Author " . implode(",", $books['items'][$i]['volumeInfo']['authors']) . '</h2> '; 
            echo "<i>Description = " . substr($books['items'][$i]['volumeInfo']['description'],0,70) . '...</i>';
            echo '<pre>';
        }
        exit;
    }
}
