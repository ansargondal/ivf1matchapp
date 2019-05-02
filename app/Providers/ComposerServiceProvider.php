<?php

namespace App\Providers;

use App\Http\View\Composers\MessageCountComposer;
use App\Http\View\Composers\NotificationComposer;
use App\Http\View\Composers\UserComposer;
use Illuminate\Support\Facades\View;
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
        View::composer([
            'layouts/admin/partials/sidebar',
            'layouts/admin/partials/',
        ], UserComposer::class);

        View::composer('layouts/admin/partials/header', NotificationComposer::class);

        View::composer([
            'layouts/admin/partials/header',
            'layouts/admin/partials/sidebar',
            'admin/messages'
        ], MessageCountComposer::class);
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
