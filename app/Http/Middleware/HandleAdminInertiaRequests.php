<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class HandleAdminInertiaRequests extends HandleInertiaRequests
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'admin';
}
