<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        $portfolioItems = PortfolioItem::latest()->get();
        return view('pages.portfolio', compact('portfolioItems'));
    }
}
