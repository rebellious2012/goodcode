<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioItemController extends Controller
{
    public function index()
    {
        $items = PortfolioItem::latest()->paginate(10);
        return view('admin.portfolio.index', compact('items'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'technologies' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except('image', 'technologies');
        $data['technologies'] = array_map('trim', explode(',', $request->technologies));

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('portfolio', 'public');
            $data['image'] = $path;
        }

        PortfolioItem::create($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item created successfully.');
    }

    public function edit(PortfolioItem $portfolioItem)
    {
        return view('admin.portfolio.edit', ['item' => $portfolioItem]);
    }

    public function update(Request $request, PortfolioItem $portfolioItem)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'technologies' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except('image', 'technologies');
        $data['technologies'] = array_map('trim', explode(',', $request->technologies));

        if ($request->hasFile('image')) {
            if ($portfolioItem->image) {
                Storage::disk('public')->delete($portfolioItem->image);
            }
            $path = $request->file('image')->store('portfolio', 'public');
            $data['image'] = $path;
        }

        $portfolioItem->update($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item updated successfully.');
    }

    public function destroy(PortfolioItem $portfolioItem)
    {
        if ($portfolioItem->image) {
            Storage::disk('public')->delete($portfolioItem->image);
        }
        $portfolioItem->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item deleted successfully.');
    }
}
