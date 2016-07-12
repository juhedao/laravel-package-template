<?php
namespace Juhedao\PackageName;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {

        $this->handleConfigs();
        // $this->handleMigrations();
        // $this->handleViews();
        // $this->handleTranslations();
        // $this->handleRoutes();
        // $this->handleHelpers();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        // Bind any implementations.
        $this->app->bind('ClassName', function() {
            return new ClassName();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return [];
    }

    private function handleHelpers() {
        $helpPath = __DIR__ .'/helpers/*.php';
        foreach(glob($helpPath) as $fileName){
            require_once($fileName);
        }
    }

    private function handleConfigs() {
        $configPath = __DIR__ . '/config/package-name.php';
        $this->publishes([$configPath => config_path('juhedao\package-name.php')]);
        $this->mergeConfigFrom($configPath, 'juhedao.package-name');
    }

    private function handleTranslations() {
        $this->loadTranslationsFrom(__DIR__.'/lang', 'package-name');
    }

    private function handleViews() {
        $this->loadViewsFrom(__DIR__.'/views', 'juhedao-package-name-views');
        $this->publishes([__DIR__.'/views' => base_path('resources/views/vendor/package-name')]);
    }

    private function handleMigrations() {
        $this->publishes([__DIR__ . '/migrations' => base_path('database/migrations')]);
    }

    private function handleRoutes() {
        require __DIR__ . '/routes.php';
    }
}
