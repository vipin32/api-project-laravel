<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {

            // if($e instanceOf JWTException)
            // {
            //     return response(['error'=>'Token is not provided'], 400);
            // }
        });
    }

    public function render($request, Throwable $exception)
    {

        if($exception instanceOf TokenBlacklistedException)
        {
            return response(['error'=>'Token cannot be used, get new token'], 400);
        }
        else if($exception instanceOf TokenInvalidException)
        {
            return response(['error'=>'Token is invalid'], 400);
        }
        else if($exception instanceOf JWTException)
        {
            return response(['error'=>'Token is not provided'], 400);
        }

        return parent::render($request, $exception);
    }
}
