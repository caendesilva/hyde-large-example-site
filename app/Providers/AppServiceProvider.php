<?php

namespace App\Providers;

use Hyde\Hyde;
use Hyde\Foundation\HydeKernel;
use Hyde\Support\Models\Redirect;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       Hyde::kernel()->booting(function (HydeKernel $kernel) {
           $kernel->pages()->addPage(new Redirect('posts.html', 'posts/', false));
       });
    }
}
