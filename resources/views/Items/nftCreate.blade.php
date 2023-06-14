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
    <x-axies.createItem></x-axies.createItem>

    <x-axies.footer></x-axies.footer>
@endsection