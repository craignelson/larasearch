<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class BookController extends Controller
{   
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request) {
        $author = $request->input('author');
        $url = ('https://www.googleapis.com/books/v1/volumes?q=authors:' . $author );

        $client = new \GuzzleHttp\Client();
        $array = $client->get($url);
        $books = $array->getBody()->getContents();
        $data = json_decode($books,true);
        return view('books.books')
                ->withData($data);   
    }
   
}

