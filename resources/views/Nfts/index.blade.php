@extends('layouts.main')

@section('main')
    <x-axies.nav class="flex px-[255px] pt-4 w-auto" id="2">
    </x-axies.nav>
    <div>
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>
    <x-axies.header></x-axies.header>
    {{-- Author --}}
    {{-- <x-axies.autorProfile></x-axies.autorProfile> --}}
    {{-- item Deteil --}}
    {{-- <x-axies.itemDetail></x-axies.itemDetail> --}}
    {{-- itemCreate--}}
    {{-- <x-axies.createItem></x-axies.createItem> --}}
    {{-- exploreItem --}}
    <x-axies.exploreItem></x-axies.exploreItem>
    {{-- <x-axies.collection></x-axies.collection> --}}
    {{-- <x-axies.itemToday></x-axies.itemToday> --}}
    {{-- <x-axies.itemLive></x-axies.itemLive> --}}
    {{-- <x-axies.itemAuthor></x-axies.itemAuthor> --}}
    {{-- <x-axies.seller></x-axies.seller> --}}

    <x-axies.footer></x-axies.footer>
@endsection