<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BootstrapFormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        \Form::component('bsText', 'cms::components.form.text', ['name', 'value' => null, 'attributes' => []]);
        \Form::component('bsToggle', 'cms::components.form.toggle', ['name','label' ,'value' => null,'checked'=>false ,'attributes' => []]);
        \Form::component('bsTextArea', 'cms::components.form.textarea', ['name', 'value' => null, 'attributes' => [], 'classes'=>'']);
        \Form::component('bsSubmit', 'cms::components.form.submit', ['name', 'attributes'=>[]]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
