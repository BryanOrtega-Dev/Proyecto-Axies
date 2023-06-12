@extends('layouts.main')

@section('main')
    <x-axies.nav class="bg-secundary-grey bg-opacity-70" id="2">
    </x-axies.nav>
    <x-axies.header>
        <x-slot name='title'>
            Create Item
        </x-slot>
        <x-slot name='subTitle'>
            Create Item
        </x-slot>
    </x-axies.header>
    {{-- Author --}}
    {{-- <x-axies.autorProfile></x-axies.autorProfile> --}}
    {{-- item Deteil --}}
    {{-- <x-axies.itemDetail></x-axies.itemDetail> --}}
    {{-- itemCreate--}}
    <x-axies.createItem></x-axies.createItem>
    {{-- exploreItem --}}
    {{-- <x-axies.exploreItem></x-axies.exploreItem> --}}
    {{-- <x-axies.collection></x-axies.collection> --}}
    {{-- <x-axies.itemToday></x-axies.itemToday> --}}
    {{-- <x-axies.itemLive></x-axies.itemLive> --}}
    {{-- <x-axies.itemAuthor></x-axies.itemAuthor> --}}
    {{-- <x-axies.seller></x-axies.seller> --}}

    <x-axies.footer></x-axies.footer>
@endsection