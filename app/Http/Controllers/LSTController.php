<?php

namespace App\Http\Controllers;

use App\Services\InputModel;
use App\Services\LSTService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;


class LSTController extends Controller
{
    /**
     * @var LSTService
     */
    private LSTService $LSTService;

    /**
     * Create a new controller instance.
     *
     * @param LSTService $LSTService
     */
    public function __construct(LSTService $LSTService)
    {
        $this->LSTService = $LSTService;
    }

    public function convert(Request $request)
    {
        $result = [
            'data' => '',
            'message' => '',
            'statusCode' => 200
        ];
        $errorMessage = 'check your input, correct format is = yyyy-mm-dd hh:mm:ss and it should be greater than 1969-07-21 02:56:15!!';

        try {
            if ($this->validateInput($request)) {
                $result['data'] = $this->LSTService->convertUTCDateTime(new InputModel($request->json('dateTime')));
            }else{
                $result['message'] = $errorMessage;
            }
        }catch (Throwable $exception){
            $result['statusCode'] = 400;
            Log::error($exception->getMessage());
            $result['message'] = $errorMessage;
        }

        return $this->jsonResponse([
            'data' => $result['data'],
            'message' => $result['message']
        ],$result['statusCode']);
    }

    private function validateInput(Request $request)
    {
        $dateTime = $request->input('dateTime');
        if ($this->inputIsNotEmpty($dateTime) &&
            $this->requestIsJson($request) &&
            $this->checkInputUTCFormat($dateTime)) {
            return true;
        }
        return false;
    }

    /**
     * @param Request $request
     * @return bool
     */
    private function requestIsJson(Request $request): bool
    {
        if (!$request->isJson()) {
            return false;
        }
        return true;
    }

    /**
     * @param $dateTime
     * @return bool
     */
    private function inputIsNotEmpty($dateTime): bool
    {
        if (empty(trim($dateTime))) {
            return false;
        }
        return true;
    }

    /**
     * @param $dateTime
     * @return bool
     */
    private function checkInputUTCFormat($dateTime): bool
    {
        if (!preg_match("/^\d\d\d\d-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01]) (00|0[0-9]|1[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $dateTime)){
            return false;
        }
        return true;
    }
}
