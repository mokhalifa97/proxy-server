<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProxyController extends Controller
{
    
    // public function handle(Request $request){

    //     // Get the request URL, headers, and body from the client
    //     $request_url=$request->input('request_url');
    //     $headers= $request->header();
    //     $body=$request->all();

    //     // Create a new Guzzle HTTP client
    //     $client= new Client();

    //     // Make the API request
    //     $response= $client->request($request->method(),$request_url,[
    //         'headers' => $headers,
    //         'json' => $body
    //     ]);

    //     // Get the response data
    //     $responseData = $response->getBody()->getContents();

    //     // Return the response data back to the client
    //     return response($responseData, $response->getStatusCode())
    //         ->header('Content-Type', $response->getHeaderLine('Content-Type'));
    // }

    public function post(){
        $response= Http::get('https://jsonplaceholder.typicode.com/posts');

        return $response->json();
    }

}
