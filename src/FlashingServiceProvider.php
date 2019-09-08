<?php
/**
 * FlashingServiceProvider
 *
 * @author: tuanha
 * @last-mod: 08-Sept-2019
 */

namespace Bkstar123\Flashing;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Bkstar123\Flashing\Facades\Flashing;
use Bkstar123\Flashing\Services\FlashingNotifier;

class FlashingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'bkstar123_flashing');

        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/bkstar123_flashing'),
        ]);

        $this->publishes([
            __DIR__ . '/resources/js' => public_path('js/vendor/bkstar123_flashing'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('flashing', function ($app) {
            return new FlashingNotifier;
        });

        $loader = AliasLoader::getInstance();
        $loader->alias('Flashing', Flashing::class);
    }
}
