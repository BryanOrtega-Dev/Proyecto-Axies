@extends('layouts.main')

@section('main')
    <x-axies.nav class="bg-secundary-grey bg-opacity-70">
    </x-axies.nav>
    <x-axies.header>
        <x-slot name='title'>
            Author
        </x-slot>
        <x-slot name='subTitle'>
            Author
        </x-slot>
    </x-axies.header>
    <x-axies.autorProfile></x-axies.autorProfile>
    <x-axies.footer></x-axies.footer>
@endsection