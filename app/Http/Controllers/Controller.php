<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @OA\Info(
     *     version="1.0.0",
     *     title="Future OpenApi Demo",
     *     description="L5 Swagger by Zhamka1"
     *     @OA\Contact(
     *          email="zhamilistono@gmail.com
     *     )
     * )
     * @OA\Server(
     *     url=L5_SWAGGER_CONST_HOST,
     *     description="DEMO_API_SERVER"
     * )
     */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

}
