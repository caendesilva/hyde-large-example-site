<?php

namespace App\Providers;

use Hyde\Hyde;
use Hyde\Foundation\HydeKernel;
use Hyde\Support\Models\Redirect;
use Illuminate\Support\ServiceProvider;
use Hyde\Framework\Features\Navigation\NavigationData;

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
       Hyde::kernel()->booting(function (HydeKernel $kernel): void {
            $kernel->pages()->addPage(tap(new Redirect('json.html', '/hyde.json', false), function (Redirect $page): void {
                $page->navigation = new NavigationData('Json Version', 1000, true);
            }));

           $kernel->pages()->addPage(new Redirect('docs/index.html', '/docs/cover.html', false));
       });
    }
}
