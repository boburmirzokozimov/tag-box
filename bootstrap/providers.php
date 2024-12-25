<?php

declare(strict_types=1);


use App\Common\Infrastructure\Laravel\Providers\AppServiceProvider;
use App\Common\Infrastructure\Laravel\Providers\AuthServiceProvider;
use App\Common\Infrastructure\Laravel\Providers\BroadcastServiceProvider;
use App\Common\Infrastructure\Laravel\Providers\EventServiceProvider;
use App\Common\Infrastructure\Laravel\Providers\RouteServiceProvider;

return [
    AppServiceProvider::class,
    AuthServiceProvider::class,
    BroadcastServiceProvider::class,
    EventServiceProvider::class,
    RouteServiceProvider::class,
];
