<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/**
 * This route answers on group of http requests, requests is located in swagger
 **/
Route::group([
    "prefix" => "v1",
    "as" => "api.",
    "namespace" => "App\Http\Controllers"
], function(){
    Route::apiResource('notebook', 'NotebookApiController');
});

