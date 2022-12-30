<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendResponse($result, $message)
    {
        $response = [
            'succsess' => true,
            'message' => $message,
            'data' => $result
        ];

        return response()->json($response, 200);
    }

    public function sendError($error, $errorMessage = [], $code = 404)
    {
        $response = [
            "succsess" => false,
            "message" => $error
        ];

        if(!empty($errorMessage)) 
        {
            $response['data'] = $errorMessage;
        }

        return response()->json($response, $code);
    }
}
