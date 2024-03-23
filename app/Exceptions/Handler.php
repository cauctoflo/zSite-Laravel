<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Throwable $exception) 
    {
        if ($request->expectsJson()) {
            /**
             * Render an exception into a JSON response.
             *
             * @param  \Illuminate\Http\Request  $request
             * @param  \Throwable  $exception
             * @return \Illuminate\Http\JsonResponse
             */
            function renderJson($request, Throwable $exception)
            {
                // Add your logic here to render the exception into a JSON response
            }
            return renderJson($request, $exception);
        }

        if ($this->shouldReport($exception) && app()->environment('production')) {
            $exception = new HttpException(500, $exception->getMessage(), $exception);
            return view('error/404');

            
        } // Add this closing brace
    }
    }
