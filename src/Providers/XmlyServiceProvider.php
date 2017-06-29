<?php

namespace Superman2014\XmlySdk\Providers;

use Illuminate\Support\ServiceProvider;
use Superman2014\XmlySdk\Foundation\Application;
use Illuminate\Foundation\Application as LaravelApplication;
use Laravel\Lumen\Application as LumenApplication;

class XmlyServiceProvider extends ServiceProvider
{

    //延迟加载
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->setupConfig();
    }

    protected function setupConfig()
    {

        $config = __DIR__ . '/../../config/xmly.php';

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([
                $config => config_path('xmly.php'),
            ]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('xmly');
        }

        $this->mergeConfigFrom($config, 'xmly');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'xmly',
            function ($app) {
                $app = new Application(config('xmly'));

                if (config('xmly.use_laravel_cache')) {
                    $app->cache = new CacheBridge();
                }

                return $app;
            }
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
			'xmly',
		];
    }
}
