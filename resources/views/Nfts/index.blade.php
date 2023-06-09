@extends('layouts.main')

@section('main')
    <x-nav class="flex ps-[255px] pt-4 w-auto" id="2">
    </x-nav>
    <x-header></x-header>
    <x-collection></x-collection>
    <x-itemToday></x-itemToday>
    <x-itemLive></x-itemLive>
    <x-seller></x-seller>

    <x-footer></x-footer>
@endsection