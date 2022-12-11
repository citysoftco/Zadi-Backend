<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
     public function createSuccessResponse($code, $model, $data, $statusCode)
    {
        try {
            return response()
                ->json(['code' => $code, $model => $data],
                    $statusCode
                )
                ->header('Content-Type', 'Application/json');
        } catch (\Exception $e) {
            if ($e->getCode() == 23000) {
                return $this->createErrorResponse(2, 'Duplicate Exception ', 200);
            }
        }
    }

    public function createErrorResponse($code, $message, $statusCode)
    {
        try {
            return response()
                ->json(
                    [
                        'code' => $code,
                        'message' => $message
                    ],
                    $statusCode
                )
                ->header('Content-Type', 'Application/json');
        } catch (\Exception $e) {
            if ($e->getCode() == 23000) {
                return $this->createErrorResponse(2, 'Duplicate Exception ', 200);
            }
        }
    }
}
