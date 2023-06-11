<div class="px-[255px] py-20 flex gap-20">
    <div class="flex flex-col gap-5">
        <h6 class="text-white text-xl leading-[26px] font-bold gap">Preview item</h6>
        <x-axies.itemCreate></x-axies.itemCreate>
    </div>
    <div>
        <form class="flex flex-col gap-5" action="" method="post" enctype="multipart/form-data">
            @csrf
            <label class="text-white text-xl leading-[22px] font-bold" for="image">Upload file</label>
            <div class="flex border w-[1000px] h-[102px] border-secundary-grey rounded-lg py-[29px] px-[59px] items-center ">
                <span class="text-14px leading-[22px] text-white-2 font-normal me-[473px]" for="">PNG, JPG, GIF, WEBP or MP4. Max 200mb.</span>
                <div class="flex items-center px-[39px] py-3 border border-white w-[152px] rounded-thirty">
                    <label class="text-14px leading-[22px] text-white font-bold" for="upload_file">Upload file</label>
                    <input class="hidden w-0 h-0" type="file" id="upload_file" name="image">
                </div>
            </div>
            <label class="text-white text-xl leading-[22px] font-bold mt-1" for="">Select Method</label>
            <label class="flex gap-2 checked:bg-slate-400 items-center py-3 px-[111px] w-[320px] bg-white rounded-lg" for="price">
                <input class="hidden" type="radio" id="price" name="sell">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7474 18.3068C10.3057 18.3084 9.88069 18.1318 9.56903 17.8184L3.0382 11.2893C2.86792 11.1195 2.73652 10.9149 2.65307 10.6894C2.56962 10.464 2.53612 10.2231 2.55486 9.98342L2.97153 4.51176C3.00031 4.11341 3.17197 3.73885 3.45491 3.45697C3.73786 3.1751 4.11307 3.00487 4.51153 2.97759L9.98319 2.56092C10.0265 2.55176 10.069 2.55176 10.1124 2.55176C10.554 2.55176 10.9765 2.72676 11.2874 3.04009L17.819 9.56842C17.9739 9.7232 18.0967 9.90696 18.1805 10.1092C18.2643 10.3115 18.3074 10.5282 18.3074 10.7472C18.3074 10.9661 18.2643 11.1829 18.1805 11.3851C18.0967 11.5874 17.9739 11.7712 17.819 11.9259L11.9257 17.8184C11.7713 17.9737 11.5877 18.0968 11.3854 18.1806C11.1832 18.2644 10.9663 18.3073 10.7474 18.3068ZM7.21153 5.54509C6.93745 5.54517 6.66763 5.61284 6.42595 5.7421C6.18427 5.87136 5.9782 6.05823 5.82599 6.28616C5.67378 6.51408 5.58013 6.77602 5.55333 7.04879C5.52653 7.32155 5.56741 7.59671 5.67235 7.8499C5.77729 8.10309 5.94305 8.32649 6.15494 8.50032C6.36684 8.67415 6.61834 8.79304 6.88716 8.84646C7.15598 8.89988 7.43382 8.88618 7.69608 8.80658C7.95834 8.72697 8.19692 8.58392 8.3907 8.39009L8.39653 8.38509L8.40236 8.37926L8.39569 8.38509C8.62735 8.1514 8.78464 7.85436 8.84775 7.53141C8.91086 7.20846 8.87697 6.87406 8.75033 6.57035C8.62369 6.26664 8.40999 6.00721 8.13615 5.82475C7.86231 5.6423 7.54058 5.54499 7.21153 5.54509Z" fill="#5142FC"/>
                </svg>
                <span class="text-blue-primary text-14px leading-[22px] font-bold">Fixed price</span>                        
            </label>
            <label class="text-white text-xl leading-[22px] font-bold mt-1" for="price">Price</label>
            <input class="outline-none rounded-lg bg-transparent border border-secundary-grey py-[11px] ps-5 text-14px leading-[22px] font-normal text-white-2" type="text" name="price" id="price" placeholder="Enter price for one item (ETH)">
           
            <label class="text-white text-xl leading-[22px] font-bold mt-1" for="price">Title</label>
            <input class="outline-none rounded-lg bg-transparent border border-secundary-grey py-[11px] ps-5 text-14px leading-[22px] font-normal text-white-2" type="text" name="price" id="price" placeholder="Item Name">
            
            <label class="text-white text-xl leading-[22px] font-bold mt-1" for="price">Description</label>
            <input class="outline-none rounded-lg bg-transparent border border-secundary-grey pt-[11px] pb-[45px] px-5  text-14px leading-[22px] font-normal text-white-2" type="text" name="price" id="price" placeholder="e.g. “This is very limited item”">

            <div class="flex gap-5">
                <div class="w-[318px] flex flex-col gap-5">
                    <label class="text-white text-xl leading-[22px] font-bold" for="royalties">Royalties</label>
                    <input class="outline-none rounded-lg bg-transparent border border-secundary-grey py-[11px] ps-5 text-14px leading-[22px] font-normal text-white-2" type="text" name="royalties" id="royalties" placeholder="5%">
                </div>
                <div class="w-[318px] flex flex-col gap-5">
                    <label class="text-white text-xl leading-[22px] font-bold" for="size">Size</label>
                    <input class="outline-none rounded-lg bg-transparent border border-secundary-grey py-[11px] ps-5 text-14px leading-[22px] font-normal text-white-2" type="text" name="size" id="size" placeholder="e.g. “size”">
                </div>
                <div class="w-[318px] flex flex-col gap-5">
                    <label class="text-white text-xl leading-[22px] font-bold" for="collection">Size</label>
                    <select class="outline-none rounded-lg bg-transparent border border-secundary-grey py-[11px] ps-5 text-14px leading-[22px] font-normal text-white-2" name="collection" id="collection">
                        <option value="abstraction">Abstraction</option>
                        <option value="art">Art</option>
                        <option value="music">Music</option>
                        <option value="domain">Domain Names</option>
                        <option value="virtual">Virtual Worlds</option>
                        <option value="trading">Trading  Cards</option>
                        <option value="collectibles">Collectibles</option>
                        <option value="sport">Sports</option>
                        <option value="utility">Utility</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>