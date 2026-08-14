<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\OurWork;
use App\Models\Media;
use App\Models\IbuCare;
use App\Models\FoundationCategory;
use App\Models\Schlorship;
use App\Models\Service;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;
class SitemapController extends Controller
{
    public function index()
    {
       
        $urls = collect();
        $staticRoutes = [
            ['url' => route('home'),            'priority' => '1.0', 'changefreq' => 'daily'],
            ['url' => route('about-us'),        'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => route('work'),            'priority' => '0.8', 'changefreq' => 'weekly'],
            ['url' => route('media'),           'priority' => '0.7', 'changefreq' => 'weekly'],
            ['url' => route('blog'),            'priority' => '0.8', 'changefreq' => 'daily'],
            ['url' => route('contact-us'),      'priority' => '0.6', 'changefreq' => 'monthly'],
            ['url' => route('our-foundation'),  'priority' => '0.8', 'changefreq' => 'monthly'],
            ['url' => route('schlorship'),      'priority' => '0.7', 'changefreq' => 'weekly'],
            ['url' => route('ibu-care'),        'priority' => '0.7', 'changefreq' => 'weekly'],
            ['url' => route('privacy-policy'),  'priority' => '0.3', 'changefreq' => 'yearly'],
            ['url' => route('terms-of-use'),    'priority' => '0.3', 'changefreq' => 'yearly'],
            ['url' => route('disclaimer'),      'priority' => '0.3', 'changefreq' => 'yearly'],
            ['url' => route('donation'),        'priority' => '0.6', 'changefreq' => 'monthly'],
            ['url' => route('fertility-conclave'), 'priority' => '0.6', 'changefreq' => 'monthly'],
            ['url' => route('services.index'),  'priority' => '0.8', 'changefreq' => 'weekly'],
        ];
        foreach ($staticRoutes as $route) {
            $urls->push((object) [
                'loc'        => $route['url'],
                'lastmod'    => now()->toAtomString(),
                'changefreq' => $route['changefreq'],
                'priority'   => $route['priority'],
            ]);
        }

        OurWork::select('slug', 'updated_at')->get()->each(function ($item) use ($urls) {
            $urls->push((object) [
                'loc'        => url('work/' . $item->slug),
                'lastmod'    => $item->updated_at?->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority'   => '0.6',
            ]);
        });

        Blog::select('slug', 'updated_at')->get()->each(function ($item) use ($urls) {
            $urls->push((object) [
                'loc'        => url('blog/' . $item->slug),
                'lastmod'    => $item->updated_at?->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority'   => '0.6',
            ]);
        });

        FoundationCategory::select('slug', 'updated_at')->get()->each(function ($item) use ($urls) {
            $urls->push((object) [
                'loc'        => route('our.foundation.details', $item->slug),
                'lastmod'    => $item->updated_at?->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority'   => '0.6',
            ]);
        });

        
        IbuCare::select('slug', 'updated_at')->get()->each(function ($item) use ($urls) {
            $urls->push((object) [
                'loc'        => url('ibu-care/' . $item->slug),
                'lastmod'    => $item->updated_at?->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority'   => '0.6',
            ]);
        });

        Service::select('slug', 'updated_at')->get()->each(function ($item) use ($urls) {
            $urls->push((object) [
                'loc'        => route('service.details', $item->slug),
                'lastmod'    => $item->updated_at?->toAtomString() ?? now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority'   => '0.7',
            ]);
        });
        return response()
        ->view('frontend.pages.sitemap.index', compact('urls'))
        ->header('Content-Type', 'text/xml');
    }
}
