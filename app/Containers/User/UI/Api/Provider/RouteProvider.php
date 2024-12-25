<?php

namespace App\Containers\User\UI\Api\Provider;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

final class RouteProvider extends ServiceProvider
{
    public function boot(): void
    {
        Route::middleware('web')
            ->group(base_path('app/Containers/User/UI/Api/Routes/api.php'));
    }
}
