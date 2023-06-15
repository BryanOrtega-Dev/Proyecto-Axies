<div class=" flex flex-col bg-secundary-grey rounded-Twenty p-5 w-[330px]">
    <div class="w-[290px] h-[290px] bg-white-3 rounded-Twenty relative">
        {{$media}}
        <div class="absolute top-[136px] left-[73px]">
            <x-axies.buttonPlace></x-axies.buttonPlace>
        </div>
    </div>
    <h4 class="mt-[21px] mb-[17px] text-white font-bold text-18px leading-[26px]">"{{$titulo ?? 'Crypto Egg Stamp #5'}}”</h4>
    <div class="flex items-center justify-between mb-[19px]">
        <x-axies.creatorName>
            <x-slot name="nameUser">
                {{$nameUsers}}
            </x-slot>
        </x-axies.creatorName>
        <div class="flex items-center justify-center bg-blue-primary rounded-lg py-[2px] ps-[11px] pe-3">
            <span class="text-white text-[12px] font-bold leading-5">B S C</span>
        </div>
    </div>
    <div>
        <div class="flex items-center justify-between pt-[15px] border-t border-like-color">
            <div>
                <h5 class="text-white-2 text-[13px] leading-5 font-normal">Current Bid</h5>
                <h4 class="text-white text-18px leading-[26px] font-bold">{{$precio ?? '4.89'}} ETH <span class="text-white-2 text-[13px] leading-5 font-normal">= $12.246</span></h4> 
            </div>
            <x-axies.viewLike></x-axies.viewLike>
        </div>
    </div>
</div>