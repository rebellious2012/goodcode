<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Handle the incoming request.
     */
use App\Models\PortfolioItem;

    public function __invoke(Request $request): View
    {
        $portfolioItems = PortfolioItem::latest()->get();
        return view('pages.portfolio', compact('portfolioItems'));
    }
}
