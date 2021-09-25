<?php


namespace App\Services;


use DateInterval;
use Exception;
use Illuminate\Support\Facades\Log;
use LST\LSTConvertorService;
use Throwable;

class LSTService
{
    /**
     * @var LSTConvertorService
     */
    private LSTConvertorService $LSTConvertorService;


    /**
     * LSTService constructor.
     * @param LSTConvertorService $LSTConvertorService
     */
    public function __construct(LSTConvertorService $LSTConvertorService)
    {

        $this->LSTConvertorService = $LSTConvertorService;
    }

    public function convertUTCDateTime(InputModel $inputModel)
    {
        try {
            $dateTime = $inputModel->getDateTime();
            $dateTime->add(new DateInterval('P4D'));
            return $this->LSTConvertorService->convertUTCtoLST($dateTime->format('Y-m-d H:i:s'));
        } catch (Throwable $e) {
            Log::error($e->getMessage());
            throw new Exception('conversion exception!!!');
        }
    }
}
