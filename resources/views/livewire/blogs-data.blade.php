<div class="relative flex size-full min-h-screen flex-col bg-[#f8fbfa] overflow-x-hidden">
    <div class="layout-container flex h-full grow flex-col">
        <div class="px-40 flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                {{-- Featured section: START --}}
                <h2 class="text-[#0e1a13] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                    Featured</h2>
                <div class="flex overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none]">
                    <div class="flex items-stretch p-4 gap-3">
                        @foreach ($blogs as $blog)
                            <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                                <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex flex-col"
                                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCnCJtK4PoEThUigLvOW25kFRiUWeDp4JXauMMQm4FsklZI2S-rBuMKe58-nBE5jdde9kly3q4sjV6SlebEti8CpEdvO8DOp7_fivM7Qyl_k1YVSmKIomBKPMZP-X_EGErY1vJ6SzwvtIrSUjqKMDRsCXk1aVtBokYRHWIhG0jCHof2xJb8bS3froI4s3uKy-wofM7jMhnGuckGWDNHzvBa5L5khaQ-4qTgKJ4U-hcqhnHM6HyfH4WNGMMwGaulr3lKqs6gOSAPSd8y");'>
                                </div>
                                <div>
                                    <p class="text-[#0e1a13] text-base font-medium leading-normal">
                                        {{ $blog->title }}</p>
                                    <p class="text-[#51946b] text-sm font-normal leading-normal">By
                                        {{ $blog->author->user->name }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Featured section: END --}}

                {{-- All blogs section: START --}}
                <h2 class="text-[#0e1a13] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">All
                    Blogs</h2>
                @foreach ($blogs as $blog)
                    <div class="p-4">
                        <div class="flex items-stretch justify-between gap-4 rounded-xl">
                            <div class="flex flex-col gap-1 flex-[2_2_0px]">
                                <p class="text-[#0e1a13] text-base font-bold leading-tight">
                                    {{ $blog->title }}</p>
                                <p class="text-[#51946b] text-sm font-normal leading-normal">
                                    By {{ $blog->author->user->name }} · {{ $blog->summary }}
                                </p>
                            </div>
                            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex-1"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCyaIgqhFhoGySqKz5uX59anMrpn35fus0mI6l3zPuwCRre9Gg-5BfviL5qQrfb24ZcPNOuLTJ-7cYjJngV1w8_lGh-YOuJVrpTfoR-OIUHex_qSf6NujhbZdfrQAvi4W6OnHNk3RWB5boh5zaU3s926kOFsgPhHpoQYjAZ_2nqo186TVyaNgrEpMg-YD9-RpHTGEcP1kh3If00R4Mx4ScWPuUftT-sCPbqni3bocdc1pGcR8K5wpt6LoAOTDLv15kcPIl9SDUxJ_g1");'>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- All blogs section: END --}}
            </div>
        </div>
    </div>
</div>
