@extends('layouts.main')

@section('main')
    <x-axies.nav class="" id="2">
    </x-axies.nav>
    <x-axies.homepage></x-axies.homepage>
    <div class="pt-[60px] flex flex-col bg-[#0D0D11]">
        <div class="px-[255px] flex justify-between items-center">
            <h4 class="font-bold text-36px leading-[44px] text-white">Live Auctions</h4>
            <a class="font-bold text-white text-14px leading-5" href="#">Explore more</a>
        </div>
        <div class="flex gap-[30px] mt-10 overflow-hidden">
            <x-axies.itemLive></x-axies.itemLive>
            <x-axies.itemLive></x-axies.itemLive>
            <x-axies.itemLive></x-axies.itemLive>
            <x-axies.itemLive></x-axies.itemLive>
            <x-axies.itemLive></x-axies.itemLive>
            <x-axies.itemLive></x-axies.itemLive>
            <x-axies.itemLive></x-axies.itemLive>
        </div>
        <div class="flex justify-center items-start mt-[38px] pb-20">
            <button class="me-5" >
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.6667 7H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.83333 12.8337L1 7.00033L6.83333 1.16699" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>  
            </button>
            <div class="flex gap-2">
                <button class="p-[3px] rounded-full border-transparent border group/item hover:border-white flex items-center justify-center">
                    <div class="border border-white p-[3px] rounded-full group-hover/item:bg-white"></div>
                </button>
                <button class="p-[3px] rounded-full border-transparent border group/item hover:border-white flex items-center justify-center">
                    <div class="border border-white p-[3px] rounded-full group-hover/item:bg-white"></div>
                </button>
                <button class="p-[3px] rounded-full border-transparent border group/item hover:border-white flex items-center justify-center">
                    <div class="border border-white p-[3px] rounded-full group-hover/item:bg-white"></div>
                </button>
                <button class="p-[3px] rounded-full border-transparent border group/item hover:border-white flex items-center justify-center">
                    <div class="border border-white p-[3px] rounded-full group-hover/item:bg-white"></div>
                </button>
            </div>
            <button class="ms-5">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 7H12.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.83301 1.16699L12.6663 7.00033L6.83301 12.8337" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>   
            </button>
        </div>
    </div>    
    <div class="px-[255px] flex flex-col">
        <div class="mt-20 flex justify-between items-center">
            <h4 class="font-bold text-36px leading-[44px] text-white">Popular Collection</h4>
            <a class="font-bold text-white text-14px leading-5" href="#">Explore more</a>
        </div>
        <div class="flex gap-[30px] mt-[38px]">
            <x-axies.collection></x-axies.collection>
            <x-axies.collection></x-axies.collection>
            <x-axies.collection></x-axies.collection>
        </div>
    </div>
    <div class="px-[255px] mt-20 pb-20">
        <h4 class="font-bold text-36px leading-[44px] text-white">Top Seller</h4>
        <div class="flex flex-wrap mt-10 gap-x-[86px] gap-y-7">
            <x-axies.seller></x-axies.seller>
            <x-axies.seller></x-axies.seller>
            <x-axies.seller></x-axies.seller>
            <x-axies.seller></x-axies.seller>
            <x-axies.seller></x-axies.seller>
            <x-axies.seller></x-axies.seller>
            <x-axies.seller></x-axies.seller>
            <x-axies.seller></x-axies.seller>
            <x-axies.seller></x-axies.seller>
            <x-axies.seller></x-axies.seller>
            
        </div>
    </div>
    <div class="px-[255px] flex flex-col">
        <div class="flex justify-between items-center">
            <h4 class="font-bold text-36px leading-[44px] text-white">Today's Picks</h4>
            <a class="font-bold text-white text-14px leading-5" href="#">Explore more</a>
        </div>
        <div class="flex gap-x-[30px] gap-y-10 flex-wrap mt-10">
            <x-axies.itemToday></x-axies.itemToday>
            <x-axies.itemToday></x-axies.itemToday>
            <x-axies.itemToday></x-axies.itemToday>
            <x-axies.itemToday></x-axies.itemToday>
            <x-axies.itemToday></x-axies.itemToday>
            <x-axies.itemToday></x-axies.itemToday>
            <x-axies.itemToday></x-axies.itemToday>
            <x-axies.itemToday></x-axies.itemToday>
        </div>
        <button class="mt-[37px] w-[154px] h-[54px] mb-20 ms-[628px] bg-transparent border border-white rounded-thirty px-10 py-4">
            <span class="text-white text-15px leading-[22px]">Load More</span>
        </button>
    </div>
    {{-- Author --}}
    {{-- <x-axies.autorProfile></x-axies.autorProfile> --}}
    {{-- item Deteil --}}
    {{-- <x-axies.itemDetail></x-axies.itemDetail> --}}
    {{-- itemCreate--}}
    {{-- <x-axies.createItem></x-axies.createItem> --}}
    {{-- exploreItem --}}
    {{-- <x-axies.exploreItem></x-axies.exploreItem> --}}
    {{-- <x-axies.itemLive></x-axies.itemLive> --}}
    {{-- <x-axies.itemAuthor></x-axies.itemAuthor> --}}

    <x-axies.footer></x-axies.footer>
@endsection