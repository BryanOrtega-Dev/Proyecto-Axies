@extends('layouts.main')

@section('main')
    <x-axies.nav class="">
    </x-axies.nav>
    <x-axies.header>
        <x-slot name='title'>
            Explore
        </x-slot>
        <x-slot name='subTitle'>
            Item Detail
        </x-slot>
    </x-axies.header>
    <x-axies.itemDetail></x-axies.itemDetail>
    <x-axies.footer></x-axies.footer>
@endsection