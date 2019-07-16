<?php

namespace Chuti\Contact;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;


class ContactServiceProvider extends ServiceProvider{
        public function boot()
        {
            /*Schema::defaultStringLength('150');*/
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/views','contact');
           // $this->publishes([__DIR__,'/database/migrations' => database_path('migrations')]);
            $this->loadMigrationsFrom(__DIR__.'/database/migrations');

            $this->mergeConfigFrom(__DIR__. '/config/contact.php',
                    'contact'
                );

            $this->publishes([
               __DIR__.'/config/contact.php' => config_path('contact.php'),
                
                __DIR__.'/views' => resource_path('views/vendor/contact'),
            ]);
        }

        public function register()
        {

        }
}