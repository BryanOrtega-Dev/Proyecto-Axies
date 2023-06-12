<?php

namespace App\Http\Controllers;

use App\Models\Nft;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return  view('Nfts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
        return view('Nfts.nftCreate');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
