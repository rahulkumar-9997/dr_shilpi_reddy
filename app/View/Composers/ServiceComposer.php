<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Service;
use Illuminate\Support\Facades\Cache;

class ServiceComposer
{
    public function compose(View $view)
    {
        $services = Cache::remember(
            'website_services',
            now()->addHours(12),
            function () {
                return Service::orderBy('sort_order')
                ->select('id', 'title', 'slug')
                ->get();
            }
        );

        $view->with('services', $services);
    }
}