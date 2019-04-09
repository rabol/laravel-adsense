<?php

namespace Rabol\Adsense;

use Illuminate\Support\ServiceProvider;

class AdsenseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $sourceViewsPath = __DIR__.'/../resources/views';
        $this->loadViewsFrom($sourceViewsPath, 'adsense');

        $this->publishes([
            $sourceViewsPath => resource_path('views/vendor/adsense'),
        ], 'views');

        $this->publishes([
            __DIR__ . '/../config/adsense.php' => config_path('adsense.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Adsense', \Rabol\Adsense\AdsenseFacade::class);
    }
}
