<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Item;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Item.author');
    }

    public function screen():View
    {
        return view('Item.author');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        // $collections = Collection::all();
        // $categories = Category::all();

        return view('Item.nftCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $userId = Auth::id();

        $data = $request->validate([
            'title' => [],
            'price' => [],
            'description' => [],
            'royalty' => [],
            'category_id' => [],
            'collection_id' => [],
        ]);

        $data['user_id'] = $userId;

        $item = Item::query()->create($data);
        $item->addMediaFromRequest('image')
            ->toMediaCollection();


        return back();
    }

    public function show(Item $Item)
    {
            $userId = $Item->user_id;
            $itemId = $Item->id;
            $userItems = Item::where('user_id', $userId)->get();
            $idCount = Item::count('id');

        return view('Item.show', compact('Item', 'userItems', 'itemId', 'idCount'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
