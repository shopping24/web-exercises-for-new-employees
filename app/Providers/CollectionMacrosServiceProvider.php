<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Collection;


class CollectionMacrosServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // TODO Add a countBy method to the Collection class via a macro
        // Docu: https://laravel.com/docs/5.7/collections#extending-collections
    }
}
