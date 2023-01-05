<?php

namespace App\Exceptions;

use Exception;

class customException extends Exception
{
    public function render($request, Exception $exception)
    {
        
        if ($exception instanceof customException) {
            return response()->view('error.404');
        }
        return parent::render($request, $exception);
    }
}
