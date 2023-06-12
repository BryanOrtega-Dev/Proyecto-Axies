@extends('layouts.main')

@section('main')
    <x-axies.nav class="flex px-[255px] pt-4 w-auto" id="2">
    </x-axies.nav>
    <div class="flex flex-col items-center pt-20 pb-[209px]">
        <h4 class="font-bold text-4xl leading-[44px] text-white">Login to NFTs</h4>
        <span class="mt-16 font-normal text-lg leading-7 text-secundary-white">Or login with email</span>

        <div class="mt-[30px]">
            {{ $slot }}
        </div>
    </div>
    <x-axies.footer></x-axies.footer>
    
@endsection
    