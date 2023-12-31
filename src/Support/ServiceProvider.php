<?php

namespace VarenykyFaq\Support;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../../migrations');
        $this->loadRoutesFrom(__DIR__.'/../../routes/faq.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'VarenykyFaq');
        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'VarenykyFaq');
    }
}
