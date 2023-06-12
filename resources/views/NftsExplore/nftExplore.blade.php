@extends('layouts.main')

@section('main')
    <x-axies.nav class="bg-secundary-grey bg-opacity-70" id="2">
    </x-axies.nav>
    <x-axies.header>
        <x-slot name='title'>
            Explore 4
        </x-slot>
        <x-slot name='subTitle'>
            Explore 4
        </x-slot>
    </x-axies.header>
    <x-axies.exploreItem></x-axies.exploreItem>

    <x-axies.footer></x-axies.footer>
@endsection