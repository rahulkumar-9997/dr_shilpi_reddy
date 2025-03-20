<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Support\Facades\Log;

class Handler extends ExceptionHandler 
{
    
	
        public function render($request, Throwable $exception)
        {
            // Log error details
            Log::error('Exception caught:', [
                'message' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine(),
            ]);

            // Handle HTTP Exception (like 404, 500, etc.)
            if ($this->isHttpException($exception)) {
                $statusCode = $exception->getStatusCode();

                if ($statusCode == 404) {
                    return response()->view('errors.404', [], 404);
                }
                if ($statusCode == 500) {
                    return response()->view('errors.500', [], 500);
                }
            }

            // Default Laravel Exception Handler
            return parent::render($request, $exception);
        }

        
}