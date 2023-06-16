@extends('layouts.main')

@section('main')
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
        <x-slot name='media'>
            <img src="{{ $Item->getFirstMediaUrl() }}" class="object-cover rounded-Twenty absolute w-[690px] h-[690px]"  alt="">
        </x-slot>
        <x-slot name='desc'>
            {{$Item->description}}
        </x-slot>
        <x-slot name='title'>
            {{$Item->title}}
        </x-slot>
        <x-slot name='price'>
            {{$Item->price}}
        </x-slot>
        <x-slot name='user'>
            {{$Item->user->name}}
        </x-slot>
    </x-axies.itemDetail>
    <div class="px-[255px]">
        <div class="flex justify-between items-center">
            <h4 class="font-bold text-36px leading-[44px] text-white">More from this author</h4>
            <a class="font-bold text-white text-14px leading-5" href="#">Explore more</a>
        </div>
        <div class="flex gap-[30px] mt-10">
            {{-- @dd($Item) --}}
            {{-- @dd($userItems) --}}
            @foreach ($userItems as $item)
                <x-axies.itemAuthor>
                    <x-slot name='media'>
                        <img src="{{ $item->getFirstMediaUrl() }}" class="object-cover rounded-Twenty absolute w-[290px] h-[290px]"  alt="">
                    </x-slot>
                    <x-slot name="price">
                        {{$item->price}}
                    </x-slot>
                    <x-slot name="title">
                        {{$item->title}}
                    </x-slot>
                    <x-slot name="user">
                        {{$item->user->name}}
                    </x-slot>
                </x-axies.itemAuthor>
                
            @endforeach
            
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
    <x-axies.footer></x-axies.footer>
@endsection