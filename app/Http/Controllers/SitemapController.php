<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\PortfolioItem;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $languages = ['en', 'pl', 'ru', 'uk'];
        $mainLanguage = 'en';

        $pages = [
            '', 'about', 'services', 'solutions/real-estate',
            'services/website-for-company',
            'portfolio', 'blog', 'contact', 'interview-questions',
        ];

        $urls = [];

        foreach ($pages as $page) {
            foreach ($languages as $locale) {
                $url = $locale === $mainLanguage
                    ? url($page)
                    : url($locale . ($page ? '/' . $page : ''));

                $urls[] = [
                    'loc' => $url,
                    'lastmod' => now()->format('Y-m-d'),
                    'changefreq' => $page === '' ? 'weekly' : 'monthly',
                    'priority' => $page === '' ? '1.0' : '0.8',
                ];
            }
        }

        return response()
            ->view('sitemap', compact('urls'))
            ->header('Content-Type', 'application/xml');
    }
}
