<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\NftExplore;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NftExploreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $items = Item::query()->get();
        return view('NftExplore.nftExplore', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NftExplore $nftExplore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NftExplore $nftExplore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NftExplore $nftExplore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NftExplore $nftExplore)
    {
        //
    }
}
