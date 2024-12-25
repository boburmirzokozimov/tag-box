<?php

namespace App\Ship\Providers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Cache;

final class RouteServiceProvider extends ServiceProvider
{
    private Filesystem $filesystem;
    private Cache $cache;

    public function __construct($app)
    {
        parent::__construct($app);
        $this->filesystem = app(Filesystem::class);
        $this->cache = app(Cache::class);
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        parent::register();

        foreach ($this->getRegisteredContainersRoute() as $uiRouteProvider) {
            $this->app->register($uiRouteProvider);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Dynamically discover and register route providers.
     *
     * @return array
     */
    private function getRegisteredContainersRoute(): array
    {
        $isProduction = config('app.env') === 'production';

        if ($isProduction) {
            return $this->cache::rememberForever('registered_containers_route_providers', function () {
                return $this->discoverRouteProviders();
            });
        }

        return $this->discoverRouteProviders();
    }

    /**
     * Discover route providers in all container directories.
     *
     * @return array
     */
    private function discoverRouteProviders(): array
    {
        $routeProviders = [];

        foreach ($this->filesystem->directories(app_path('Containers')) as $directory) {
            $moduleName = basename($directory);
            $routeProviderPath = $directory . '/UI/Api/Provider/RouteProvider.php';

            if ($this->filesystem->exists($routeProviderPath)) {
                $routeProviders[] = "App\\Containers\\$moduleName\\UI\\Api\\Provider\\RouteProvider";
            }
        }

        return $routeProviders;
    }
}
