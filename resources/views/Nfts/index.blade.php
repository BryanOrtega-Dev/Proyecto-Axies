@extends('layouts.main')

@section('main')
    <x-nav class="flex px-[255px] pt-4 w-auto" id="2">
    </x-nav>
    <x-header></x-header>
    {{-- Author --}}
    {{-- <x-autorProfile></x-autorProfile> --}}
    {{-- item Deteil --}}
    <x-itemDetail></x-itemDetail>
    <x-collection></x-collection>
    <x-itemToday></x-itemToday>
    <x-itemLive></x-itemLive>
    <x-itemAuthor></x-itemAuthor>
    <x-seller></x-seller>

    <x-footer></x-footer>
@endsection