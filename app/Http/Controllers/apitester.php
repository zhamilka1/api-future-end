<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class apitester extends Controller
{
    public function __invoke(){
        $client = new Client();
        $response = $client->request('POST', 'http://127.0.0.1:8000/api/v1/notebook', [
            'form_params' => [
                "initials" => "zubkov p a",
                "number" => "8800",
                "email" => "zha@gas"
            ]
        ]);
        return json_encode($response);
    }
}
