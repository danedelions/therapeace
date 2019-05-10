<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::creator('partials.admin.header', 'App\Http\ViewComposers\AdminNotificationComposer');
        View::creator(['partials.client.header', 'partials.therapist.header' ], 'App\Http\ViewComposers\MessageNotificationComposer');        
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
