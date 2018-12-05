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
        \Form::component('bsText', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
        \Form::component('bsToggle', 'components.form.toggle', ['name','label' ,'value' => null,'checked'=>false ,'attributes' => []]);
        \Form::component('bsTextArea', 'components.form.textarea', ['name', 'value' => null, 'attributes' => [], 'classes'=>'']);
        \Form::component('bsSubmit', 'components.form.submit', ['name', 'attributes'=>[]]);
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
