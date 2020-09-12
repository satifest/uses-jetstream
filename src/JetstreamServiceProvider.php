<?php

namespace Satifest\Jetstream;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerResources();
    }

    /**
     * Register the package resources such as routes, templates, etc.
     */
    protected function registerResources(): void
    {
        $this->bootBladeComponents();
        $this->bootLivewireComponents();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'satifest');
    }


    /**
     * Boot Blade components.
     */
    protected function bootBladeComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            $blade->component(View\Components\Welcome::class, 'satifest-jet-welcome');
        });
    }

    /**
     * Boot Livewire components.
     */
    protected function bootLivewireComponents(): void
    {
        //
    }
}
