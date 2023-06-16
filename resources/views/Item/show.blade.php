@extends('layouts.main')

@section('main')
    {{-- @dd($Item) --}}
    <x-axies.nav class="bg-secundary-grey bg-opacity-70">
    </x-axies.nav>
    <x-axies.header>
        <x-slot name='title'>
            Item Detail {{$Item->id}}
        </x-slot>
        <x-slot name='subTitle'>
            Item Detail
        </x-slot>
    </x-axies.header>
    <x-axies.itemDetail>
        <x-slot name='desc'>
            {{$Item->description}}
        </x-slot>
        <x-slot name='title'>
            {{$Item->description}}
        </x-slot>
    </x-axies.itemDetail>
    <x-axies.footer></x-axies.footer>
@endsection