<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected function jsonResponse($data,$status=200){
        return response()->json($data,$status,[],
            JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}
