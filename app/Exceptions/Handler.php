<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

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
            if (request()->is('api*'))
                {
                if ($e instanceof ModelNotFoundException)
                    return response()->json(['error' => 'Recurso no encontrado'],404);
                else if ($e instanceof ValidationException)
                    return response()->json(['error' => 'Datos no válidos'],400);
                else if (isset($e))
                    return response()->json(['error' => 'Error: ' .$e->getMessage()], 500);
                }

        });
    }
}
