@extends('components.layouts.app')
@section('title', 'Blogs - Explore | Modern Blogging Platform')

@section('content')


<div class="relative flex size-full min-h-screen flex-col bg-[#f8fbfa] overflow-x-hidden">
    <div class="layout-container flex h-full grow flex-col">
        <div class="px-40 flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                <h2 class="text-[#0e1a13] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">
                    Featured</h2>
                <div
                    class="flex overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none]">
                    <div class="flex items-stretch p-4 gap-3">
                        <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex flex-col"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCnCJtK4PoEThUigLvOW25kFRiUWeDp4JXauMMQm4FsklZI2S-rBuMKe58-nBE5jdde9kly3q4sjV6SlebEti8CpEdvO8DOp7_fivM7Qyl_k1YVSmKIomBKPMZP-X_EGErY1vJ6SzwvtIrSUjqKMDRsCXk1aVtBokYRHWIhG0jCHof2xJb8bS3froI4s3uKy-wofM7jMhnGuckGWDNHzvBa5L5khaQ-4qTgKJ4U-hcqhnHM6HyfH4WNGMMwGaulr3lKqs6gOSAPSd8y");'>
                            </div>
                            <div>
                                <p class="text-[#0e1a13] text-base font-medium leading-normal">The Art of Storytelling:
                                    Crafting Narratives That Resonate</p>
                                <p class="text-[#51946b] text-sm font-normal leading-normal">By Amelia Harper</p>
                            </div>
                        </div>
                        <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex flex-col"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB4JqbIrCZKpADVGwDOH4s7EGVwm53sxoAGyMikJy5uLb0ZBHxCZNGs3-DoGG4P-dVrnlwcBuQVip6FZ-ek9VzKiv3GrBJHTN4q0o5dTspO2XfMvtyj5HRaeJ1JhLKPwkWE65AqEO10hujR6S_s15oPB-D5paNJliNZvPU-NuQPGwHpRPdXjszox0nZ3hIja5KJDp4biaMAcR8_TThX4hSWZnrQkEHjPRsKNGgGPLivwaGQmkX0lopFvZDIgklp2A9lo6M8-GSynrj-");'>
                            </div>
                            <div>
                                <p class="text-[#0e1a13] text-base font-medium leading-normal">Productivity Hacks for
                                    Remote Workers: Maximizing Your Output</p>
                                <p class="text-[#51946b] text-sm font-normal leading-normal">By Ethan Carter</p>
                            </div>
                        </div>
                        <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                            <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex flex-col"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD1dr1FxX4R3VYeYrS_LMx9tedpoJX_ZTCjy7jgpGwUyYCO4FmrVwmH3GTPq6Ck5gtSkyjf9H_9qNnGbPeJoeTqLCoARJDX3qFc0avWqABkvQquwAoiZ-AMYjctT-t5pj2hI9m9VwadBtOrMotzeVEPFqqJqrkkyh5KNzMxg6mPwV-0gMFVU2dhvIx7YF7pfoEo0mEKfteExSUSgm1IeGJ6TkEdf75SlcNy4TDi1h0rOyRecTcYmm6UYuRxIIntSNkGXJA6dvUn8D_L");'>
                            </div>
                            <div>
                                <p class="text-[#0e1a13] text-base font-medium leading-normal">Mindfulness and
                                    Meditation: Finding Inner Peace in a Chaotic World</p>
                                <p class="text-[#51946b] text-sm font-normal leading-normal">By Olivia Bennett</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="text-[#0e1a13] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Latest
                </h2>
                <div class="p-4">
                    <div class="flex items-stretch justify-between gap-4 rounded-xl">
                        <div class="flex flex-col gap-1 flex-[2_2_0px]">
                            <p class="text-[#0e1a13] text-base font-bold leading-tight">The Future of Work: Trends and
                                Predictions for 2024</p>
                            <p class="text-[#51946b] text-sm font-normal leading-normal">
                                By Noah Thompson · Explore the evolving landscape of work, including remote work, AI,
                                and the gig economy.
                            </p>
                        </div>
                        <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex-1"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBeu7o_IKPOiotsxAezHCMbecQZT7oyhjX8E_xHEq8bsDwxe5tJGWqyjyYA82dy6SUNJVveyPeknWfHgAcvnkZHnnWJtqE_UQp6D3iC4bOesHxjw2pj733wJjPbKILIAsFleECe5laEQvCbuZr07vlmWnykVL5ZB9097VlBZ2etN_T0rGIASd_fcKv9LvhgusHkU4uL2NimTPBfGHHxLq4gbaTleL_Gya7ElVr8uZl-AaKXEYyJlTe-SFCxPgTDm0sSPPr7k1TBPY_0");'>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-stretch justify-between gap-4 rounded-xl">
                        <div class="flex flex-col gap-1 flex-[2_2_0px]">
                            <p class="text-[#0e1a13] text-base font-bold leading-tight">Sustainable Living: Tips for an
                                Eco-Friendly Lifestyle</p>
                            <p class="text-[#51946b] text-sm font-normal leading-normal">
                                By Sophia Clark · Learn practical ways to reduce your environmental impact and live a
                                more sustainable life.
                            </p>
                        </div>
                        <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex-1"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDbwE7BVsM5FV46DGhYR1kon7sLhfZOKcIR_-wiBpdCUu9ZnJZqtnmg9e-dxTxN2x-d-0lbRKQur_7Jv1QIkrPKj-Sk4Vd595rxO4Qhinbwdd5RSpg24MquWv9Ov9Lc_1dxC0ssG39jmgG_tJyaODho-7bdyD6v-u_-N9Z66bxUjVglP9dJD7377e76uc-lXXjaWz9eTsfArsa_mnpdMmNGunjF7zDfbbcUtXsNG7msfDqcRpbbUQCeXSi0WRt2WqN7GWv-Qzu5XlVh");'>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-stretch justify-between gap-4 rounded-xl">
                        <div class="flex flex-col gap-1 flex-[2_2_0px]">
                            <p class="text-[#0e1a13] text-base font-bold leading-tight">The Power of Positive Thinking:
                                Cultivating Optimism</p>
                            <p class="text-[#51946b] text-sm font-normal leading-normal">
                                By Liam Foster · Discover the benefits of positive thinking and how to develop an
                                optimistic mindset.
                            </p>
                        </div>
                        <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex-1"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDhULp28cKSy7U1ZLmuaAZyFEgOdnHvajuYedoAZfE-Hq3E3uC44MwvQ814jqwWB4MuDARLQZ2JtoAarwW7qCmSADEOYOE01nVWTtfdfa7hMi5iMvX5RZ89nRF-djBO3klexpZ-OFDFZIJilyKTLrXc1rKQw8PU_pu2UlVpntLSvbiPehL4Oi-eARi5tpb2YmolcbAS0DzqDQrkuOOA7jSXY9T14Qh3upgvwZA_zrpebXieuTDlN20HEMMaU6y9G3ZrGQBawyqSPtUd");'>
                        </div>
                    </div>
                </div>
                <h2 class="text-[#0e1a13] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">All
                    Blogs</h2>
                <div class="p-4">
                    <div class="flex items-stretch justify-between gap-4 rounded-xl">
                        <div class="flex flex-col gap-1 flex-[2_2_0px]">
                            <p class="text-[#0e1a13] text-base font-bold leading-tight">The Art of Storytelling:
                                Crafting Narratives That Resonate</p>
                            <p class="text-[#51946b] text-sm font-normal leading-normal">
                                By Amelia Harper · Explore the power of storytelling and learn how to create compelling
                                narratives that captivate your audience.
                            </p>
                        </div>
                        <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex-1"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCyaIgqhFhoGySqKz5uX59anMrpn35fus0mI6l3zPuwCRre9Gg-5BfviL5qQrfb24ZcPNOuLTJ-7cYjJngV1w8_lGh-YOuJVrpTfoR-OIUHex_qSf6NujhbZdfrQAvi4W6OnHNk3RWB5boh5zaU3s926kOFsgPhHpoQYjAZ_2nqo186TVyaNgrEpMg-YD9-RpHTGEcP1kh3If00R4Mx4ScWPuUftT-sCPbqni3bocdc1pGcR8K5wpt6LoAOTDLv15kcPIl9SDUxJ_g1");'>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-stretch justify-between gap-4 rounded-xl">
                        <div class="flex flex-col gap-1 flex-[2_2_0px]">
                            <p class="text-[#0e1a13] text-base font-bold leading-tight">Productivity Hacks for Remote
                                Workers: Maximizing Your Output</p>
                            <p class="text-[#51946b] text-sm font-normal leading-normal">
                                By Ethan Carter · Discover effective strategies for staying productive and focused while
                                working remotely.
                            </p>
                        </div>
                        <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex-1"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA9_kN3Iudv20ahl-6UiSJCTiph_Q1mIQnx6h_g7whc8RnRF4U3X743kxVpdZeFecAynhidHtiBMELE0XwKau4rag85-b5cwNZt03GpZIFHx2TPqWceiPrwd69oEGaMGpsNGDxlp_y1VPSYH266HAnGpsA3PoosSd3gfJnAHfDXmKAuGlz3dblVTbD0X9h3xoCNU9aoAquZzSm5YkzWJaMGT1H148YXfNAQdQCrxwIxj5Ja3TnJGygL8zc4icr6AkSrl1rbNvEegDXz");'>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-stretch justify-between gap-4 rounded-xl">
                        <div class="flex flex-col gap-1 flex-[2_2_0px]">
                            <p class="text-[#0e1a13] text-base font-bold leading-tight">Mindfulness and Meditation:
                                Finding Inner Peace in a Chaotic World</p>
                            <p class="text-[#51946b] text-sm font-normal leading-normal">
                                By Olivia Bennett · Embrace mindfulness and meditation techniques to reduce stress and
                                cultivate inner peace.
                            </p>
                        </div>
                        <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex-1"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBba5-eO-b4rgEX2U0egPfe_O6NAH9HqtkXHAt37-FWd2NOuNSkmu8s-qKQUEA3-Uk9nMaLe7oFNsek-MwanciN5PyzOdVJiAdONgn1FtMozwzW1preJsnYO7mWFhPOzrVkuD9AgtYR1M2AuUgQ_eendsRjaDcPDQWhjLz6ri3j7BMourDopRx0_uf36P2IOP2l9RfZohqupVv6KvixL4BvstkGS4mjLtje3jPDha_D2MtGEv0AhpQ3jLxhsSzJC1sntbWPEWuBbAgN");'>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-stretch justify-between gap-4 rounded-xl">
                        <div class="flex flex-col gap-1 flex-[2_2_0px]">
                            <p class="text-[#0e1a13] text-base font-bold leading-tight">The Future of Work: Trends and
                                Predictions for 2024</p>
                            <p class="text-[#51946b] text-sm font-normal leading-normal">
                                By Noah Thompson · Explore the evolving landscape of work, including remote work, AI,
                                and the gig economy.
                            </p>
                        </div>
                        <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex-1"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBBmm6ocdSerXdxpPZUMNSUoE6FwmYKBrekQMRbAjES2bEVr-3YqjGhF_Q103cESBvriaKBCa9OjoRr6vXZIKRBUZ4iC-wY8r7EUQqMeV4XOUfin7mgpMprhOUdiPIJY_21w2cwfWnvqFtjwWLs8kBhDOWN9NHZuUKPpTWhOkE3urZdxV3DHWFNwXcxTlUET65Kd3cd54U4QTEJNHPumInwOqcNSML1lVGVdya42IzCM5eS7CY9KGwiyh4paMxymf9uyy6_OeV_rC9P");'>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-stretch justify-between gap-4 rounded-xl">
                        <div class="flex flex-col gap-1 flex-[2_2_0px]">
                            <p class="text-[#0e1a13] text-base font-bold leading-tight">Sustainable Living: Tips for an
                                Eco-Friendly Lifestyle</p>
                            <p class="text-[#51946b] text-sm font-normal leading-normal">
                                By Sophia Clark · Learn practical ways to reduce your environmental impact and live a
                                more sustainable life.
                            </p>
                        </div>
                        <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex-1"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCnqdnVQOnuc-bnW1YtR1CfTArCNrvOZgRTV335robzqAhqoU7qUCXnQZlP-dyvOgDqtrFtFX4Bds8-TvoR0gAS9M2-o-seHsYGVVML8iBkPX5HdOZpOdovU6MoUUMRN6gzS0sS0mR8zWnS43Ywtn7Dd77RhguuHhW-qnEA_df9Lm5y6R9tZmQo0oL6-cPYzv__DEqQ1V87tLTbXxKE7bwOhWGM2baUxUTcgCKF45rNVP6VvBdrgJJghh0eutR3Zhkd2b4GCB_dQTH3");'>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-stretch justify-between gap-4 rounded-xl">
                        <div class="flex flex-col gap-1 flex-[2_2_0px]">
                            <p class="text-[#0e1a13] text-base font-bold leading-tight">The Power of Positive Thinking:
                                Cultivating Optimism</p>
                            <p class="text-[#51946b] text-sm font-normal leading-normal">
                                By Liam Foster · Discover the benefits of positive thinking and how to develop an
                                optimistic mindset.
                            </p>
                        </div>
                        <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex-1"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDo4Zuu1XnfkfxmPVIXwUWWlcHHIeW0zIvkEXbcm5Rgg3HSLiFlOYI5BIrIe6IA4IlWcFK8PQ6c1a2MtdfjJCwm8nOYK8xPemagRdI2iJ0z7t-w9HW9zrDKXPDrThMrbGFEeEFNcFmK0Pg-Ni31mCw-RAoVn_IX-51vA-dpBFNAhFcQQ1XZhAXCp54unjNdXo2hqKdgjQuzDWd_AKVg-N2BCrwgEJ54uhCsQmXF2LjyT00OC8V6Pc1owoolaR4cKyaxOcoffUeJPsw4");'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
