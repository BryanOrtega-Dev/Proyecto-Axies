<div  {{$attributes->class(["flex flex-col bg-secundary-grey rounded-Twenty px-5 pt-5 pb-[11px] h-[511px] w-[330px]"])}}>
    <div class="w-[290px] h-[290px] bg-white-3 rounded-Twenty relative">
        {{$media ?? ''}}
        
        <div class="absolute top-[14px] right-3">
            <x-axies.viewLike></x-axies.viewLike>
        </div>
    </div>
    <h4 class="mt-[21px] mb-[17px] text-white font-bold text-18px leading-[26px]">"{{$titulo ?? 'Nothing'}}"</h4>
    <div class="flex items-center justify-between mb-[19px]">
        <x-axies.creatorName>
            <x-slot name="nameUser">
                {{$nameUsers}}
            </x-slot>
        </x-axies.creatorName>
    </div>
    <div>
        <div class="flex items-center justify-between pt-[15px] border-t border-like-color">
            <div>
                <h5 class="text-white-2 text-[13px] leading-5 font-normal">Price</h5>
                <h4 class="text-white text-18px leading-[26px] font-bold">{{$precio ?? 'Nothing'}} ETH</h4> 
            </div>
        </div>
    </div>
</div>