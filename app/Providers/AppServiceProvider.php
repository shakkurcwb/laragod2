<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        # MySQL BugFix
        Schema::defaultStringLength(191);

        // https://laravel.com/docs/5.7/blade

        # Includes
        Blade::include('shared.components.icon', 'icon');
        Blade::include('shared.components.img', 'img');
        Blade::include('shared.components.input', 'input');
        Blade::include('shared.components.checkbox', 'checkbox');
        Blade::include('shared.components.select2', 'select2');
        Blade::include('shared.components.select', 'select');
        Blade::include('shared.components.header', 'header');
        Blade::include('shared.components.success', 'success');
        Blade::include('shared.components.textarea', 'textarea');

        # Components
        Blade::component('shared.components.form', 'form');
        Blade::component('shared.components.form-group', 'formGroup');

        # Directives
        Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('m/d/Y H:i'); ?>";
        });

        # Custom If
        Blade::if('env', function ($environment) {
            return app()->environment($environment);
        });
    }

    public function register()
    {
        //
    }
}
