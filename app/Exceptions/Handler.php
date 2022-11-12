<?php

namespace App\Exceptions;

use App\Modules\Auth\Domain\Exceptions\LoginException;
use Carbon\Carbon;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\Exceptions\MissingAbilityException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [

    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
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
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param \Illuminate\Http\Request $request
     * @param AuthenticationException $exception
     * @return JsonResponse
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        $message = $this->translate('unauthenticated');
        return $this->renderJson(['message' => $message], 401);
    }

    public function render($request, Throwable $exception)
    {
        switch (true) {

            case $exception instanceof AuthenticationException:
            case $exception instanceof MissingAbilityException:
                $params['message'] = $this->translate('unauthenticated');
                $statusCode = Response::HTTP_UNAUTHORIZED;
                break;

            case $exception instanceof ValidationException:
                $params['message'] = $this->translate('invalid');
                $params['errors'] = $exception->errors();
                $statusCode = Response::HTTP_UNPROCESSABLE_ENTITY;
                break;

            case $exception instanceof LoginException:
                $params['message'] = trans('auth.failed');
                $statusCode = Response::HTTP_UNAUTHORIZED;
                break;


            case $exception instanceof NotFoundHttpException:
                return response()->make(view('errors.404'), 404);
                break;

            case $exception instanceof MethodNotAllowedHttpException:
                $params = ['message' => $this->translate('action_not_found')];
                $statusCode = 404;
                break;

            // Eloquent exceptions
            case $exception instanceof ModelNotFoundException:
                $params = ['message' => $this->translate('record_not_found')];
                $statusCode = 404;
                break;
            case $exception instanceof FileNotFoundException:
                $params = ['message' => $this->translate('file_not_found')];
                $statusCode = 404;
                break;

            default:
                $message = $this->translate('internal_server_error');

                $params = ['message' => $message];
                if (env('APP_DEBUG')) {
                    $params['exception'] = [
                        'class' => get_class($exception),
                        'message' => $exception->getMessage(),
                        'file' => $exception->getFile(),
                        'line' => $exception->getLine(),
                        'backtrace' => $exception->getTrace(),
                    ];

                    $params['request'] = [
                        'url' => $request->url(),
                        'method' => $request->method(),
                        'headers' => $request->headers->all(),
                        'params' => $request->all(),
                    ];
                }

                $statusCode = 500;
                break;
        }

        return $this->renderJson($params, $statusCode);
    }

    protected function renderJson($json, $status)
    {
        $request = Request::instance();

        $json['meta'] = [
            'now' => Carbon::now()->format('Y-m-d H:i'),
            'ip' => $request->ip(),
        ];

        return response()->json($json, $status)
            ->header('Content-type', 'application/json; charset=UTF-8');
    }

    protected function translate($message)
    {
        return trans("app.exceptions.handler.$message");
    }
}
