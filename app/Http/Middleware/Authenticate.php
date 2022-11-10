<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $message = $this->translate('unauthenticated');
        return $this->renderJson(['message' => $message], 401);
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
