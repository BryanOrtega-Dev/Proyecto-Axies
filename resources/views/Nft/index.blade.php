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
        <div class="flex gap-[30px] mt-10 overflow-auto">
            @foreach ($items as $item)
                <x-axies.itemLive>
                    <x-slot name='media'>
                        <img src="{{ $item->getFirstMediaUrl() }}" class="object-cover rounded-Twenty absolute w-[290px] h-[290px]"  alt="">
                    </x-slot>
                    <x-slot name='titulo'>
                        {{$item->title}}
                    </x-slot>
                    <x-slot name='nameUsers'>
                        {{$item->user->name}}
                    </x-slot>
                    <x-slot name='precio'>
                        {{$item->price}}
                    </x-slot>
                </x-axies.itemLive>
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
            @foreach ($users as $user)
                @if ($loop->iteration > 7)
                    <x-axies.seller>
                        <x-slot name="user">
                            {{$user->name}}
                        </x-slot>
                    </x-axies.seller>
                    
                @endif
                
            @endforeach
            
        </div>
    </div>
    <div class="px-[255px] flex flex-col">
        <div class="flex justify-between items-center">
            <h4 class="font-bold text-36px leading-[44px] text-white">Today's Picks</h4>
            
            <a class="font-bold text-white text-14px leading-5" href="#">Explore more</a>
        </div>
        <div class="flex gap-x-[30px] gap-y-10 flex-wrap mt-10">
            @foreach ($items as $item) 
                @if ($loop->iteration < 9)
                    <x-axies.itemToday>
                        <x-slot name='media'>
                            <img src="{{ $item->getFirstMediaUrl() }}" class="object-cover rounded-Twenty absolute w-[290px] h-[290px]"  alt="">
                        </x-slot>
                        <x-slot name='titulo'>
                            {{$item->title}}
                        </x-slot>
                        <x-slot name='nameUsers'>
                            {{$item->user->name}}
                        </x-slot>
                        <x-slot name='precio'>
                            {{$item->price}}
                        </x-slot>
                        <x-slot name='view'>
                            <a href="{{ action([\App\Http\Controllers\ItemController::class, 'show'], ['Item' => $item]) }}" class="flex items-center justify-center">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.7803 11.9931C16.5493 11.8894 16.2866 11.8817 16.05 11.9717C15.8134 12.0617 15.6222 12.242 15.5185 12.4729C15.0503 13.5169 14.2956 14.4067 13.3419 15.0389C12.3882 15.6711 11.2747 16.0198 10.1308 16.0445C8.98687 16.0691 7.85941 15.7688 6.87935 15.1783C5.89929 14.5878 5.10685 13.7314 4.59405 12.7086L5.13468 12.9493C5.36596 13.0523 5.62867 13.0591 5.86503 12.9684C6.10138 12.8777 6.29202 12.6968 6.39499 12.4655C6.49796 12.2342 6.50484 11.9715 6.41411 11.7352C6.32339 11.4988 6.14248 11.3082 5.9112 11.2052L3.39889 10.0867C3.28438 10.0357 3.16093 10.0078 3.03562 10.0045C2.91031 10.0012 2.78557 10.0226 2.66854 10.0676C2.55151 10.1125 2.44447 10.18 2.35354 10.2663C2.26261 10.3526 2.18957 10.4559 2.13858 10.5705L1.02003 13.0827C0.917054 13.314 0.910175 13.5767 1.0009 13.813C1.09163 14.0494 1.27253 14.24 1.50382 14.343C1.7351 14.446 1.99781 14.4529 2.23417 14.3621C2.47052 14.2714 2.66116 14.0905 2.76413 13.8592L2.89171 13.5727C3.55406 14.8901 4.56946 15.9975 5.8246 16.7713C7.07975 17.5451 8.52524 17.955 9.99975 17.955C10.0459 17.955 10.0923 17.9546 10.1385 17.9538C11.6492 17.9277 13.1213 17.4719 14.3825 16.6398C15.6437 15.8077 16.6418 14.6336 17.2601 13.2549C17.3638 13.024 17.3715 12.7613 17.2815 12.5246C17.1915 12.288 17.0112 12.0968 16.7803 11.9931Z" fill="white"/>
                                    <path d="M18.496 5.65724C18.2647 5.55428 18.002 5.5474 17.7656 5.63813C17.5293 5.72886 17.3387 5.90976 17.2357 6.14103L17.1081 6.42756C16.435 5.08867 15.3975 3.9671 14.1149 3.19197C12.8324 2.41684 11.3571 2.01966 9.85873 2.04617C8.3604 2.07267 6.90001 2.52178 5.64571 3.3418C4.39141 4.16181 3.39419 5.31937 2.76885 6.68123C2.71633 6.79515 2.68678 6.9183 2.68188 7.04365C2.67698 7.169 2.69684 7.29408 2.74032 7.41175C2.7838 7.52941 2.85004 7.63736 2.93526 7.72941C3.02049 7.82146 3.12302 7.89581 3.23699 7.94821C3.35097 8.0006 3.47415 8.03002 3.59951 8.03478C3.72486 8.03954 3.84992 8.01955 3.96754 7.97594C4.08516 7.93234 4.19303 7.86598 4.28499 7.78065C4.37695 7.69533 4.45119 7.59272 4.50346 7.47869C4.97898 6.44299 5.73746 5.56272 6.6915 4.93934C7.64554 4.31596 8.75631 3.97484 9.89579 3.9553C11.0353 3.93575 12.1571 4.23857 13.1319 4.82886C14.1068 5.41914 14.895 6.27287 15.4058 7.29166L14.8652 7.05095C14.6341 6.94955 14.3724 6.94373 14.1371 7.03477C13.9017 7.12581 13.712 7.30631 13.6094 7.5368C13.5068 7.7673 13.4996 8.02905 13.5894 8.26483C13.6792 8.50062 13.8587 8.69126 14.0887 8.7951L16.5937 9.91025L16.5982 9.91228C16.7128 9.96372 16.8364 9.99203 16.9619 9.99561C17.0875 9.99919 17.2125 9.97796 17.3298 9.93314C17.4471 9.88831 17.5544 9.82078 17.6456 9.7344C17.7368 9.64803 17.81 9.54451 17.8611 9.42978L18.9796 6.91756C19.0826 6.68629 19.0895 6.42359 18.9988 6.18724C18.9081 5.95089 18.7273 5.76024 18.496 5.65724Z" fill="white"/>
                                </svg>
                                <span class="ms-2 text-white-2 text-base font-bold leading-[26px]">View History</span>
                            </a>
                        </x-slot>
                    </x-axies.itemToday>
                @endif
            @endforeach
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