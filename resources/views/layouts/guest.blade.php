@extends('layouts.main')

@section('main')
    <x-axies.nav class="" id="2">
    </x-axies.nav>

    <div class="flex flex-col items-center pt-20 pb-[209px]">
        {{ $slot }}
    </div>
    
    <x-axies.footer></x-axies.footer>
    
@endsection
    