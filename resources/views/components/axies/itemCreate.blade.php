<div class=" flex flex-col bg-secundary-grey rounded-Twenty p-5 w-[330px]">
    <div class="w-[290px] h-[290px] bg-white-3 rounded-Twenty relative">
        <div class="absolute top-[14px] right-3">
            <x-axies.viewLike></x-axies.viewLike>
        </div>
    </div>
    <div class="flex items-center justify-between mt-[21px] mb-[17px]">
        <h4 id="titleShow" class="text-white font-bold text-18px leading-[26px]"></h4>
        <x-axies.bsc></x-axies.bsc>
    </div>
    <div class="flex items-center justify-between mb-[17px]">
        <x-axies.creatorName></x-axies.creatorName>
        <div class="flex items-end flex-col h-12">
            <h5 class="text-white-2 text-[13px] leading-5 font-normal">Current Bid</h5>
            <div class="flex gap-1">
                <h4 id="priceShow" class="text-white text-18px leading-[26px] font-bold"></h4> 
                <span  class="text-white text-18px leading-[26px] font-bold"> ETH</span> 

            </div>
        </div>
    </div>
    <div class="flex items-center justify-between ">
        <div class="flex items-center justify-center border h-[45px] border-blue-primary rounded-thirty px-7 py-[13px]">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8761 5.39199H14.0558C16.4172 5.39199 18.3337 7.26699 18.3337 9.56699V14.167C18.3337 16.467 16.4172 18.3337 14.0558 18.3337H5.94488C3.58349 18.3337 1.66699 16.467 1.66699 14.167V9.56699C1.66699 7.26699 3.58349 5.39199 5.94488 5.39199H6.12456C6.14167 4.39199 6.54379 3.45866 7.27103 2.75866C8.00683 2.05033 8.94797 1.69199 10.0089 1.66699C12.1307 1.66699 13.8504 3.33366 13.8761 5.39199ZM8.1694 3.65033C7.69028 4.11699 7.42505 4.73366 7.40794 5.39199H12.5927C12.5671 4.02533 11.4206 2.91699 10.0089 2.91699C9.3501 2.91699 8.66564 3.17533 8.1694 3.65033ZM13.2515 8.60032C13.6108 8.60032 13.8932 8.31699 13.8932 7.97532V7.00866C13.8932 6.66699 13.6108 6.38366 13.2515 6.38366C12.9007 6.38366 12.6098 6.66699 12.6098 7.00866V7.97532C12.6098 8.31699 12.9007 8.60032 13.2515 8.60032ZM7.31379 7.97532C7.31379 8.31699 7.03145 8.60032 6.6721 8.60032C6.32132 8.60032 6.03042 8.31699 6.03042 7.97532V7.00866C6.03042 6.66699 6.32132 6.38366 6.6721 6.38366C7.03145 6.38366 7.31379 6.66699 7.31379 7.00866V7.97532Z" fill="white"/>
            </svg>                    
            <span class="ms-[6px] text-white text-14px font-bold leading-[22px]">Place Bid</span>
        </div>
        <x-axies.viewHistory></x-axies.viewHistory>
    </div>
</div>

{{-- a partir de aca comenzo justo --}}