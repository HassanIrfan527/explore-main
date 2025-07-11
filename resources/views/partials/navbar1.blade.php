<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e8f2ec] px-10 py-3">
    <div class="flex items-center gap-8">
        <div class="flex items-center gap-4 text-[#0e1a13]">
            <div class="size-4">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M44 11.2727C44 14.0109 39.8386 16.3957 33.69 17.6364C39.8386 18.877 44 21.2618 44 24C44 26.7382 39.8386 29.123 33.69 30.3636C39.8386 31.6043 44 33.9891 44 36.7273C44 40.7439 35.0457 44 24 44C12.9543 44 4 40.7439 4 36.7273C4 33.9891 8.16144 31.6043 14.31 30.3636C8.16144 29.123 4 26.7382 4 24C4 21.2618 8.16144 18.877 14.31 17.6364C8.16144 16.3957 4 14.0109 4 11.2727C4 7.25611 12.9543 4 24 4C35.0457 4 44 7.25611 44 11.2727Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <h2 class="text-[#0e1a13] text-lg font-bold leading-tight tracking-[-0.015em]">Explore</h2>
        </div>
        <div class="flex items-center gap-9">
            <a class="text-[#0e1a13] text-sm font-medium leading-normal" href="#">Our story</a>
            <a class="text-[#0e1a13] text-sm font-medium leading-normal" href="{{ route('blogs') }}">Blogs</a>
            <a class="text-[#0e1a13] text-sm font-medium leading-normal" href="#">Write</a>
        </div>
    </div>
    <div class="flex flex-1 justify-end gap-8">
        <label class="flex flex-col min-w-40 !h-10 max-w-64">
            <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                <div class="text-[#51946b] flex border-none bg-[#e8f2ec] items-center justify-center pl-4 rounded-l-xl border-r-0"
                    data-icon="MagnifyingGlass" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                        viewBox="0 0 256 256">
                        <path
                            d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                        </path>
                    </svg>
                </div>
                <input placeholder="Search"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0e1a13] focus:outline-0 focus:ring-0 border-none bg-[#e8f2ec] focus:border-none h-full placeholder:text-[#51946b] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value="" />
            </div>
        </label>
        <button
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#39e079] text-[#0e1a13] text-sm font-bold leading-normal tracking-[0.015em]">
            <span class="truncate">Get started</span>
        </button>
    </div>
</header>
