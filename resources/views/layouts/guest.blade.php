@extends('layouts.main')

@section('main')
    <x-axies.nav class="flex px-[183px] pt-4 w-auto" id="2">
    </x-axies.nav>

    <div class="flex flex-col items-center pt-20 pb-[209px]">
        {{ $slot }}
    </div>
    
    <x-axies.footer></x-axies.footer>
    
@endsection
    