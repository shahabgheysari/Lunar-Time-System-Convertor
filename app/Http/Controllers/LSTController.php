<?php

namespace App\Http\Controllers;

use App\Services\LSTService;
use Illuminate\Http\Request;
use InvalidArgumentException;
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
        $data = '';
        $message='';
        $statusCode = 200;
        try {
            $this->validateDateTime($request->input('dateTime'));
            $data = $this->LSTService->convertUTCDateTime($request->input('dateTime'));
        }catch (Throwable $exception){
            $statusCode = 400;
            $message = 'incorrect date time, correct format = yyyy-mm-dd hh:mm:ss';
        }

        return $this->jsonResponse([
            'data' => $data,
            'message' => $message
        ],$statusCode);
    }

    private function validateDateTime(string $dateTime)
    {
        if (empty(trim($dateTime)) || !preg_match("/^\d\d\d\d-(0?[1-9]|1[0-2])-(0?[1-9]|[12][0-9]|3[01]) (00|[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9]):([0-9]|[0-5][0-9])$/",$dateTime))
            throw new InvalidArgumentException('incorrect date time format.');
    }
}
