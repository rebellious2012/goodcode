<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        $visits = Visit::latest('visited_at')->paginate(15);

        return view('admin.dashboard', compact('visits'));
    }
}
