@extends('front.layouts')

@section('content')
{{--banner here--}}
<div
    class="flex justify-center md:min-h-[250px] lg:min-h-[288px] py-20 w-full bg-cover bg-no-repeat bg-center page-header-banner"
    style="background-image: url('https://borobazar.vercel.app/assets/images/page-hero-bg.png');">
    <div class="relative flex flex-col items-center justify-center w-full"><h2
            class="text-xl md:text-2xl lg:text-3xl 2xl:text-[40px] font-bold text-center text-brand-dark"><span
                class="block mb-3 font-bold font-manrope md:mb-4 lg:mb-5 2xl:mb-7 ">Our Store</span></h2>
        <div class="flex items-center borobazarBreadcrumb">
            <ol class="flex items-center w-full overflow-hidden">
                <li class="text-sm text-brand-muted px-2.5 transition duration-200 ease-in ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 hover:text-brand-dark">
                    <a class="inline-flex items-center" href="{{route('home')}}">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                             class="mr-1.5 text-brand-dark text-15px" height="1em" width="1em"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                  d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212"></path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                  d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256m368-77V64h-48v69"></path>
                        </svg>
                        Home</a></li>
                <li class="text-base text-brand-dark mt-[1px]">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                         class="text-brand-dark text-opacity-40 text-15px" height="1em" width="1em"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
                              d="M184 112l144 144-144 144"></path>
                    </svg>
                </li>
                <li class="text-sm text-brand-muted px-2.5 transition duration-200 ease-in ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 hover:text-brand-dark">
                    <a class="capitalize font-semibold text-heading" href="/store">Store</a></li>
            </ol>
        </div>
    </div>
</div>
{{--banner ends--}

{{--shop here--}}
<div name="grid" class="flex flex-col mb-16 md:flex-row px-6 relative">
    {{--    middle side--}}
    <div class="w-full mt-8 xl:-ml-3 xl:mr-3 3xl:-ml-1 3xl:mr-1 3xl:pr-2 3xl:pl-2">

        <aside id="categorySideBar" class="flex justify-end bg-black/50 shrink-0   absolute top-0 -right-20 w-0 z-40 h-full overflow-hidden">
            <div class="bg-white  lg:w-[500px] md:w-[500px] w-full h-max overflow-hidden border rounded border-border-base">
                <div class="bg-white  border-b border-border-base flex justify-end items-center relative pr-2 shrink-0 py-0.5">
                    <button class="flex items-center justify-center px-4 py-2 text-2xl transition-opacity md:px-5  focus:outline-none hover:opacity-60"
                            aria-label="close"
                            onclick="
                               const categorySideBar = document.getElementById('categorySideBar');
                                //set width to full screen
                                categorySideBar.classList.remove('right-0');
                                categorySideBar.classList.add('-right-20');
                                categorySideBar.style.width = '0%';
                                categorySideBar.style.transition = 'width 0.5s ease-in';

                                ">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                             class="text-brand-dark mt-0.5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M289.94 256l95-95A24 24 0 00351 127l-95 95-95-95a24 24 0 00-34 34l95 95-95 95a24 24 0 1034 34l95-95 95 95a24 24 0 0034-34z"></path>
                        </svg>
                    </button>
                </div>
                <div data-overlayscrollbars-initialize="" data-overlayscrollbars="host">
                    <div class="os-size-observer os-size-observer-appear">
                        <div class="os-size-observer-listener ltr"></div>
                    </div>
                    <div class="os-viewport os-viewport-scrollbar-hidden"
                         style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; top: 0px; right: auto; left: 0px; width: calc(100% + 0px); padding: 0px;">
                        <div class="h-[calc(84vh_-_150px)] lg:h-full">
                            <ul class="list">
                                <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70"
                                    onclick="
                                const sideBar = document.getElementById('vegitableList');
                                //set width to full screen
                                sideBar.classList.toggle('h-0');
                                // sideBar.style.transition = 'width 0.5s ease-in';

                                ">
                                    <button
                                        class="flex items-center w-full ltr:text-left:text-right outline-none focus:outline-none group focus:ring-0 focus:text-brand-dark">
                                        <div class="inline-flex shrink-0 2xl:w-12 2xl:h-12 3xl:w-auto 3xl:h-auto">
                                            <img
                                                alt="Fresh Vegetables" loading="lazy" width="40" height="40"
                                                decoding="async" data-nimg="1"
                                                src="https://borobazar.vercel.app/assets/images/category/icon/fresh-vegetables.svg"
                                                style="color: transparent; width: auto; height: auto;"></div>
                                        <span
                                            class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">Fresh Vegetables</span>
                                        <span class="ml-auto ">
                                        <svg stroke="currentColor" fill="currentColor"
                                             stroke-width="0" viewBox="0 0 512 512"
                                             class="text-base text-brand-dark text-opacity-40"
                                             height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg"><path
                                                d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg></span>
                                    </button>

                                    <ul id="vegitableList" class="h-0 overflow-hidden">
                                        <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70">

                                        <span
                                            class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">Tomato</span>
                                        </li>
                                        <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70">

                                        <span
                                            class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">Potato</span>
                                        </li>
                                        <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70">

                                        <span
                                            class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">Onion</span>
                                        </li>

                                    </ul>
                                </li>
                                <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70"
                                    onclick="
                                const sideBar = document.getElementById('oilList');
                                //set width to full screen
                                sideBar.classList.toggle('h-0');
                                // sideBar.style.transition = 'width 0.5s ease-in';

                                ">
                                    <button
                                        class="flex items-center w-full text-left text-right outline-none focus:outline-none group focus:ring-0 focus:text-brand-dark">
                                        <div class="inline-flex shrink-0 2xl:w-12 2xl:h-12 3xl:w-auto 3xl:h-auto">
                                            <img
                                                alt="Fresh Vegetables" loading="lazy" width="40" height="40"
                                                decoding="async" data-nimg="1"
                                                src="https://borobazar.vercel.app/assets/images/category/icon/cold-drinks.svg"
                                                style="color: transparent; width: auto; height: auto;">
                                        </div>
                                        <span
                                            class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">Oils</span>
                                        <span class="ml-auto ">
                                        <svg stroke="currentColor" fill="currentColor"
                                             stroke-width="0" viewBox="0 0 512 512"
                                             class="text-base text-brand-dark text-opacity-40"
                                             height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg"><path
                                                d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg></span>
                                    </button>

                                    <ul id="oilList" class="h-0 overflow-hidden">
                                        <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70">

                                        <span
                                            class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4"> Coconut Oil </span>
                                        </li>
                                        <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70">

                                        <span
                                            class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">Almond Oil</span>
                                        </li>
                                        <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70">

                                        <span
                                            class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">Apricot Oil</span>
                                        </li>

                                    </ul>
                                </li>
                                <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70"
                                    onclick="
                                const sideBar = document.getElementById('dietList');
                                //set width to full screen
                                sideBar.classList.toggle('h-0');
                                // sideBar.style.transition = 'width 0.5s ease-in';

                                ">
                                    <button
                                        class="flex items-center w-full text-left text-right outline-none focus:outline-none group focus:ring-0 focus:text-brand-dark">
                                        <div class="inline-flex shrink-0 2xl:w-12 2xl:h-12 3xl:w-auto 3xl:h-auto">
                                            <img
                                                alt="Fresh Vegetables" loading="lazy" width="40" height="40"
                                                decoding="async" data-nimg="1"
                                                src="https://borobazar.vercel.app/assets/images/category/icon/diet-foods.svg"
                                                style="color: transparent; width: auto; height: auto;">
                                        </div>
                                        <span
                                            class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">Diet Foods</span>
                                        {{--                                    <span class="ml-auto ">--}}
                                        {{--                                        <svg stroke="currentColor" fill="currentColor"--}}
                                        {{--                                                                             stroke-width="0" viewBox="0 0 512 512"--}}
                                        {{--                                                                             class="text-base text-brand-dark text-opacity-40"--}}
                                        {{--                                                                             height="1em" width="1em"--}}
                                        {{--                                                                             xmlns="http://www.w3.org/2000/svg"><path--}}
                                        {{--                                                d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg></span>--}}
                                    </button>

                                    {{--                                <ul id="dietList" class="h-0 overflow-hidden">--}}
                                    {{--                                    <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70">--}}

                                    {{--                                    <span class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4"> Coconut Oil </span>--}}
                                    {{--                                            </li>--}}
                                    {{--                                    <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70">--}}

                                    {{--                                    <span class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">Almond Oil</span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70">--}}

                                    {{--                                    <span class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">Apricot Oil</span>--}}
                                    {{--                                    </li>--}}

                                    {{--                                </ul>--}}
                                </li>
                                <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70"
                                    onclick="
                                const sideBar = document.getElementById('frozzenList');
                                //set width to full screen
                                sideBar.classList.toggle('h-0');
                                // sideBar.style.transition = 'width 0.5s ease-in';

                                ">
                                    <button
                                        class="flex items-center w-full text-left text-right outline-none focus:outline-none group focus:ring-0 focus:text-brand-dark">
                                        <div class="inline-flex shrink-0 2xl:w-12 2xl:h-12 3xl:w-auto 3xl:h-auto">
                                            <img
                                                alt="Fresh Vegetables" loading="lazy" width="40" height="40"
                                                decoding="async" data-nimg="1"
                                                src="https://borobazar.vercel.app/assets/images/category/icon/frozen-desserts.svg"
                                                style="color: transparent; width: auto; height: auto;">
                                        </div>
                                        <span
                                            class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">Frozen Items</span>
                                        <span class="ml-auto ">
                                        <svg stroke="currentColor" fill="currentColor"
                                             stroke-width="0" viewBox="0 0 512 512"
                                             class="text-base text-brand-dark text-opacity-40"
                                             height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg"><path
                                                d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg></span>
                                    </button>

                                    <ul id="frozzenList" class="h-0 overflow-hidden">
                                        <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70">

                                        <span
                                            class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4"> Chocolate Ice Cream </span>
                                        </li>
                                        <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70">

                                        <span
                                            class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">Mango Ice Cream</span>
                                        </li>
                                        <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70">

                                        <span
                                            class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">Banana Shake </span>
                                        </li>
                                        <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70">

                                        <span
                                            class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">Almond Shake </span>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </aside>

        <div class=" flex items-center justify-between pb-0.5 mb-4 lg:mb-5 xl:mb-6">
            <div class="-mt-1.5 mb-0"><h2
                    class="text-brand-dark text-lg lg:text-xl xl:text-[22px] xl:leading-8 font-bold font-manrope">All
                    Products</h2></div>
            <div
                class="transition-all text-[#02b290] -mt-1.5 font-semibold text-sm md:text-[15px] hover:text-gray-900 cursor-pointer"
                role="button" onclick="
                                const categorySideBar = document.getElementById('categorySideBar');
                                //set width to full screen
                                categorySideBar.classList.remove('-right-20');
                                categorySideBar.classList.add('right-0');
                                categorySideBar.style.width = '100%';
                                categorySideBar.style.transition = 'width 0.3s ease-in';

                                ">Categories
            </div>
        </div>
        {{--        product card--}}
        <div class="grid grid-cols-1 gap-3 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 md:gap-4 2xl:gap-5">

            {{--            product card--}}
            <a href="{{route('productDetail')}}">
                <article
                    class="flex flex-col group overflow-hidden rounded-md cursor-pointer transition-all duration-300 shadow-lg shadow-gray-200 hover:shadow-gray-500 relative h-full"
                    title="Organic Spring Mix">

                    {{--                card top section--}}
                    <div class="relative shrink-0">
                        <div
                            class="overflow-hidden mx-auto w-full sm:w-[180px] h-[180px] md:w-[200px] md:h-[200px] transition duration-200 ease-in-out transform group-hover:scale-105 relative">
                            <img alt="Organic Spring Mix" fetchpriority="high" decoding="async" data-nimg="fill"
                                 class="object-cover bg-fill-thumbnail"
                                 sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw"
                                 src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-4.png&w=640&q=100"
                                 style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                        </div>
                        <div
                            class="w-max h-max absolute top-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1">
                        <span
                            class="text-[11px] md:text-xs font-bold text-gray-50 uppercase inline-block bg-[#02b290] rounded-full px-2.5 pt-1 pb-[3px] mx-0.5 sm:mx-1">on sale</span>
                        </div>
                        <div
                            class="w-full h-full absolute top-0 flex flex-col right-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1"
                            style="justify-content: end">
                            <div class="relative w-full">
                                <div class="block product-count-button-position flex justify-end gap-3 ">
                                    <button
                                        class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                        aria-label="Count Button">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" width="19" height="19" opacity="1">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                    <button
                                        class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                        onmouseover="
                                        const productId = document.getElementById('productId');
                                      //set width to full screen
                                        productId.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId = document.getElementById('productId');
                                      //set width to full screen
                                        productId.classList.add('hidden');
                                    " aria-label="Count Button">
                                        <svg width="19" height="19" viewBox="0 0 22 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                <div id="productId"
                                     class="hidden product-count-button-position absolute -right-1 bottom-0 w-full"
                                     onmouseover="
                                        const productId = document.getElementById('productId');
                                      //set width to full screen
                                        productId.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId = document.getElementById('productId');
                                      //set width to full screen
                                        productId.classList.add('hidden');
                                    ">
                                    <div
                                        class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 h-9 md:h-10 bg-white shadow-lg shadow-gray-200 rounded-3xl w-full h-10">
                                        <button
                                            class="flex items-center justify-center shrink-0 h-full transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none w-10 h-8 rounded-2xl text-heading hover:bg-gray-300">
                                            <span class="sr-only">button-minus</span>
                                            <svg class="transition-all" width="14" height="14" viewBox="0 0 22 22"
                                                 fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="1">
                                                    <path
                                                        d="M3.15109 11.8438L10.174 11.8439L11.8264 11.8438L18.8493 11.8439C19.0772 11.8439 19.284 11.7515 19.4335 11.602C19.5831 11.4524 19.6755 11.2455 19.6754 11.0177C19.6755 10.5608 19.3062 10.1915 18.8493 10.1916L11.8264 10.1915L10.1741 10.1915L3.15109 10.1915C2.69427 10.1915 2.32496 10.5608 2.32496 11.0177C2.32486 11.4746 2.69416 11.8439 3.15109 11.8438Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                                </g>
                                            </svg>
                                        </button>
                                        <span
                                            class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-sm md:text-base w-6">1</span>
                                        <button
                                            class="group flex items-center justify-center h-full shrink-0 transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none pr-2 w-10 h-8 rounded-2xl text-heading hover:bg-gray-300 !pr-0"
                                            title=""><span class="sr-only">button-plus</span>
                                            <svg width="14" height="14" viewBox="0 0 22 22" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="1">
                                                    <path
                                                        d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                card bottom section--}}
                    <div class="flex flex-col px-3 md:px-4 lg:px-[18px] pb-5 lg:pb-6 lg:pt-1.5 h-full">
                        <div class="mb-1 lg:mb-1.5 -mx-1"><span
                                class="inline-block mx-1 text-lg font-semibold sm:text-15px lg:font-bold text-gray-900">₹ 300.60</span>
                            <del class="mx-1 text-md text-gray-700 text-opacity-70">₹350.00</del>
                        </div>
                        <h2 class="text-gray-800 text-13px sm:text-sm lg:text-[17px]  leading-5 sm:leading-6 mb-1.5">Organic
                            Green Cabbage</h2>
                        <div class="mt-auto text-13px sm:text-sm text-gray-600">1 each</div>
                    </div>
                </article>
            </a>
            {{--            product card end--}}
            <article
                class="flex flex-col group overflow-hidden rounded-md cursor-pointer transition-all duration-300 shadow-lg shadow-gray-200 hover:shadow-gray-500 relative h-full"
                title="Organic Spring Mix">

                {{--                card top section--}}
                <div class="relative shrink-0">
                    <div
                        class="overflow-hidden mx-auto w-full sm:w-[180px] h-[180px] md:w-[200px] md:h-[200px] transition duration-200 ease-in-out transform group-hover:scale-105 relative">
                        <img alt="Organic Spring Mix" fetchpriority="high" decoding="async" data-nimg="fill"
                             class="object-cover bg-fill-thumbnail"
                             sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw"
                             src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-16.png&w=640&q=100"
                             style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div
                        class="w-max h-max absolute top-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1">
                        <span
                            class="text-[11px] md:text-xs font-bold text-gray-50 uppercase inline-block bg-[#02b290] rounded-full px-2.5 pt-1 pb-[3px] mx-0.5 sm:mx-1">on sale</span>
                    </div>
                    <div
                        class="w-full h-full absolute top-0 flex flex-col right-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1"
                        style="justify-content: end">
                        <div class="relative w-full">
                            <div class="block product-count-button-position flex justify-end gap-3 ">
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    aria-label="Count Button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" width="19" height="19" opacity="1">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    onmouseover="
                                        const productId2 = document.getElementById('productId2');
                                      //set width to full screen
                                        productId2.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId2 = document.getElementById('productId2');
                                      //set width to full screen
                                        productId2.classList.add('hidden');
                                    " aria-label="Count Button">
                                    <svg width="19" height="19" viewBox="0 0 22 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="1">
                                            <path
                                                d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div id="productId2"
                                 class="hidden product-count-button-position absolute -right-1 bottom-0 w-full"
                                 onmouseover="
                                        const productId2 = document.getElementById('productId2');
                                      //set width to full screen
                                        productId2.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId2 = document.getElementById('productId2');
                                      //set width to full screen
                                        productId2.classList.add('hidden');
                                    ">
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 h-9 md:h-10 bg-white shadow-lg shadow-gray-200 rounded-3xl w-full h-10">
                                    <button
                                        class="flex items-center justify-center shrink-0 h-full transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none w-10 h-8 rounded-2xl text-heading hover:bg-gray-300">
                                        <span class="sr-only">button-minus</span>
                                        <svg class="transition-all" width="14" height="14" viewBox="0 0 22 22"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M3.15109 11.8438L10.174 11.8439L11.8264 11.8438L18.8493 11.8439C19.0772 11.8439 19.284 11.7515 19.4335 11.602C19.5831 11.4524 19.6755 11.2455 19.6754 11.0177C19.6755 10.5608 19.3062 10.1915 18.8493 10.1916L11.8264 10.1915L10.1741 10.1915L3.15109 10.1915C2.69427 10.1915 2.32496 10.5608 2.32496 11.0177C2.32486 11.4746 2.69416 11.8439 3.15109 11.8438Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-sm md:text-base w-6">1</span>
                                    <button
                                        class="group flex items-center justify-center h-full shrink-0 transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none pr-2 w-10 h-8 rounded-2xl text-heading hover:bg-gray-300 !pr-0"
                                        title=""><span class="sr-only">button-plus</span>
                                        <svg width="14" height="14" viewBox="0 0 22 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                card bottom section--}}
                <div class="flex flex-col px-3 md:px-4 lg:px-[18px] pb-5 lg:pb-6 lg:pt-1.5 h-full">
                    <div class="mb-1 lg:mb-1.5 -mx-1"><span
                            class="inline-block mx-1 text-lg font-semibold sm:text-15px lg:font-bold text-gray-900">₹ 350.60</span>
                        <del class="mx-1 text-md text-gray-700 text-opacity-70">₹450.00</del>
                    </div>
                    <h2 class="text-gray-800 text-13px sm:text-sm lg:text-[17px]  leading-5 sm:leading-6 mb-1.5">
                        Chester's Fries Flamen Hot Corn Potato Snacks</h2>
                    <div class="mt-auto text-13px sm:text-sm text-gray-600">2 each</div>
                </div>
            </article>
            <article
                class="flex flex-col group overflow-hidden rounded-md cursor-pointer transition-all duration-300 shadow-lg shadow-gray-200 hover:shadow-gray-500 relative h-full"
                title="Organic Spring Mix">

                {{--                card top section--}}
                <div class="relative shrink-0">
                    <div
                        class="overflow-hidden mx-auto w-full sm:w-[180px] h-[180px] md:w-[200px] md:h-[200px] transition duration-200 ease-in-out transform group-hover:scale-105 relative">
                        <img alt="Organic Spring Mix" fetchpriority="high" decoding="async" data-nimg="fill"
                             class="object-cover bg-fill-thumbnail"
                             sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw"
                             src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-7.png&w=640&q=100"
                             style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div
                        class="w-max h-max absolute top-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1">
                        <span
                            class="text-[11px] md:text-xs font-bold text-gray-50 uppercase inline-block bg-[#02b290] rounded-full px-2.5 pt-1 pb-[3px] mx-0.5 sm:mx-1">on sale</span>
                    </div>
                    <div
                        class="w-full h-full absolute top-0 flex flex-col right-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1"
                        style="justify-content: end">
                        <div class="relative w-full">
                            <div class="block product-count-button-position flex justify-end gap-3 ">
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    aria-label="Count Button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" width="19" height="19" opacity="1">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    onmouseover="
                                        const productId3 = document.getElementById('productId3');
                                      //set width to full screen
                                        productId3.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId3 = document.getElementById('productId3');
                                      //set width to full screen
                                        productId3.classList.add('hidden');
                                    " aria-label="Count Button">
                                    <svg width="19" height="19" viewBox="0 0 22 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="1">
                                            <path
                                                d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div id="productId3"
                                 class="hidden product-count-button-position absolute -right-1 bottom-0 w-full"
                                 onmouseover="
                                        const productId3 = document.getElementById('productId3');
                                      //set width to full screen
                                        productId3.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId3 = document.getElementById('productId3');
                                      //set width to full screen
                                        productId3.classList.add('hidden');
                                    ">
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 h-9 md:h-10 bg-white shadow-lg shadow-gray-200 rounded-3xl w-full h-10">
                                    <button
                                        class="flex items-center justify-center shrink-0 h-full transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none w-10 h-8 rounded-2xl text-heading hover:bg-gray-300">
                                        <span class="sr-only">button-minus</span>
                                        <svg class="transition-all" width="14" height="14" viewBox="0 0 22 22"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M3.15109 11.8438L10.174 11.8439L11.8264 11.8438L18.8493 11.8439C19.0772 11.8439 19.284 11.7515 19.4335 11.602C19.5831 11.4524 19.6755 11.2455 19.6754 11.0177C19.6755 10.5608 19.3062 10.1915 18.8493 10.1916L11.8264 10.1915L10.1741 10.1915L3.15109 10.1915C2.69427 10.1915 2.32496 10.5608 2.32496 11.0177C2.32486 11.4746 2.69416 11.8439 3.15109 11.8438Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-sm md:text-base w-6">1</span>
                                    <button
                                        class="group flex items-center justify-center h-full shrink-0 transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none pr-2 w-10 h-8 rounded-2xl text-heading hover:bg-gray-300 !pr-0"
                                        title=""><span class="sr-only">button-plus</span>
                                        <svg width="14" height="14" viewBox="0 0 22 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                card bottom section--}}
                <div class="flex flex-col px-3 md:px-4 lg:px-[18px] pb-5 lg:pb-6 lg:pt-1.5 h-full">
                    <div class="mb-1 lg:mb-1.5 -mx-1"><span
                            class="inline-block mx-1 text-lg font-semibold sm:text-15px lg:font-bold text-gray-900">₹ 100.60</span>
                        <del class="mx-1 text-md text-gray-700 text-opacity-70">₹150.00</del>
                    </div>
                    <h2 class="text-gray-800 text-13px sm:text-sm lg:text-[17px]  leading-5 sm:leading-6 mb-1.5">Oreo
                        Chocolate Sandwich Cookies, Original Flavor</h2>
                    <div class="mt-auto text-13px sm:text-sm text-gray-600">5 each</div>
                </div>
            </article>
            <article
                class="flex flex-col group overflow-hidden rounded-md cursor-pointer transition-all duration-300 shadow-lg shadow-gray-200 hover:shadow-gray-500 relative h-full"
                title="Organic Spring Mix">

                {{--                card top section--}}
                <div class="relative shrink-0">
                    <div
                        class="overflow-hidden mx-auto w-full sm:w-[180px] h-[180px] md:w-[200px] md:h-[200px] transition duration-200 ease-in-out transform group-hover:scale-105 relative">
                        <img alt="Organic Spring Mix" fetchpriority="high" decoding="async" data-nimg="fill"
                             class="object-cover bg-fill-thumbnail"
                             sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw"
                             src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-16.png&w=640&q=100"
                             style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div
                        class="w-max h-max absolute top-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1">
                        <span
                            class="text-[11px] md:text-xs font-bold text-gray-50 uppercase inline-block bg-[#02b290] rounded-full px-2.5 pt-1 pb-[3px] mx-0.5 sm:mx-1">on sale</span>
                    </div>
                    <div
                        class="w-full h-full absolute top-0 flex flex-col right-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1"
                        style="justify-content: end">
                        <div class="relative w-full">
                            <div class="block product-count-button-position flex justify-end gap-3 ">
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    aria-label="Count Button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" width="19" height="19" opacity="1">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    onmouseover="
                                        const productId2 = document.getElementById('productId2');
                                      //set width to full screen
                                        productId2.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId2 = document.getElementById('productId2');
                                      //set width to full screen
                                        productId2.classList.add('hidden');
                                    " aria-label="Count Button">
                                    <svg width="19" height="19" viewBox="0 0 22 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="1">
                                            <path
                                                d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div id="productId2"
                                 class="hidden product-count-button-position absolute -right-1 bottom-0 w-full"
                                 onmouseover="
                                        const productId2 = document.getElementById('productId2');
                                      //set width to full screen
                                        productId2.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId2 = document.getElementById('productId2');
                                      //set width to full screen
                                        productId2.classList.add('hidden');
                                    ">
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 h-9 md:h-10 bg-white shadow-lg shadow-gray-200 rounded-3xl w-full h-10">
                                    <button
                                        class="flex items-center justify-center shrink-0 h-full transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none w-10 h-8 rounded-2xl text-heading hover:bg-gray-300">
                                        <span class="sr-only">button-minus</span>
                                        <svg class="transition-all" width="14" height="14" viewBox="0 0 22 22"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M3.15109 11.8438L10.174 11.8439L11.8264 11.8438L18.8493 11.8439C19.0772 11.8439 19.284 11.7515 19.4335 11.602C19.5831 11.4524 19.6755 11.2455 19.6754 11.0177C19.6755 10.5608 19.3062 10.1915 18.8493 10.1916L11.8264 10.1915L10.1741 10.1915L3.15109 10.1915C2.69427 10.1915 2.32496 10.5608 2.32496 11.0177C2.32486 11.4746 2.69416 11.8439 3.15109 11.8438Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-sm md:text-base w-6">1</span>
                                    <button
                                        class="group flex items-center justify-center h-full shrink-0 transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none pr-2 w-10 h-8 rounded-2xl text-heading hover:bg-gray-300 !pr-0"
                                        title=""><span class="sr-only">button-plus</span>
                                        <svg width="14" height="14" viewBox="0 0 22 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                card bottom section--}}
                <div class="flex flex-col px-3 md:px-4 lg:px-[18px] pb-5 lg:pb-6 lg:pt-1.5 h-full">
                    <div class="mb-1 lg:mb-1.5 -mx-1"><span
                            class="inline-block mx-1 text-lg font-semibold sm:text-15px lg:font-bold text-gray-900">₹ 350.60</span>
                        <del class="mx-1 text-md text-gray-700 text-opacity-70">₹450.00</del>
                    </div>
                    <h2 class="text-gray-800 text-13px sm:text-sm lg:text-[17px]  leading-5 sm:leading-6 mb-1.5">
                        Chester's Fries Flamen Hot Corn Potato Snacks</h2>
                    <div class="mt-auto text-13px sm:text-sm text-gray-600">2 each</div>
                </div>
            </article>
            <article
                class="flex flex-col group overflow-hidden rounded-md cursor-pointer transition-all duration-300 shadow-lg shadow-gray-200 hover:shadow-gray-500 relative h-full"
                title="Organic Spring Mix">

                {{--                card top section--}}
                <div class="relative shrink-0">
                    <div
                        class="overflow-hidden mx-auto w-full sm:w-[180px] h-[180px] md:w-[200px] md:h-[200px] transition duration-200 ease-in-out transform group-hover:scale-105 relative">
                        <img alt="Organic Spring Mix" fetchpriority="high" decoding="async" data-nimg="fill"
                             class="object-cover bg-fill-thumbnail"
                             sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw"
                             src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-4.png&w=640&q=100"
                             style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div
                        class="w-max h-max absolute top-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1">
                        <span
                            class="text-[11px] md:text-xs font-bold text-gray-50 uppercase inline-block bg-[#02b290] rounded-full px-2.5 pt-1 pb-[3px] mx-0.5 sm:mx-1">on sale</span>
                    </div>
                    <div
                        class="w-full h-full absolute top-0 flex flex-col right-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1"
                        style="justify-content: end">
                        <div class="relative w-full">
                            <div class="block product-count-button-position flex justify-end gap-3 ">
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    aria-label="Count Button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" width="19" height="19" opacity="1">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    onmouseover="
                                        const productId = document.getElementById('productId');
                                      //set width to full screen
                                        productId.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId = document.getElementById('productId');
                                      //set width to full screen
                                        productId.classList.add('hidden');
                                    " aria-label="Count Button">
                                    <svg width="19" height="19" viewBox="0 0 22 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="1">
                                            <path
                                                d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div id="productId"
                                 class="hidden product-count-button-position absolute -right-1 bottom-0 w-full"
                                 onmouseover="
                                        const productId = document.getElementById('productId');
                                      //set width to full screen
                                        productId.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId = document.getElementById('productId');
                                      //set width to full screen
                                        productId.classList.add('hidden');
                                    ">
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 h-9 md:h-10 bg-white shadow-lg shadow-gray-200 rounded-3xl w-full h-10">
                                    <button
                                        class="flex items-center justify-center shrink-0 h-full transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none w-10 h-8 rounded-2xl text-heading hover:bg-gray-300">
                                        <span class="sr-only">button-minus</span>
                                        <svg class="transition-all" width="14" height="14" viewBox="0 0 22 22"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M3.15109 11.8438L10.174 11.8439L11.8264 11.8438L18.8493 11.8439C19.0772 11.8439 19.284 11.7515 19.4335 11.602C19.5831 11.4524 19.6755 11.2455 19.6754 11.0177C19.6755 10.5608 19.3062 10.1915 18.8493 10.1916L11.8264 10.1915L10.1741 10.1915L3.15109 10.1915C2.69427 10.1915 2.32496 10.5608 2.32496 11.0177C2.32486 11.4746 2.69416 11.8439 3.15109 11.8438Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-sm md:text-base w-6">1</span>
                                    <button
                                        class="group flex items-center justify-center h-full shrink-0 transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none pr-2 w-10 h-8 rounded-2xl text-heading hover:bg-gray-300 !pr-0"
                                        title=""><span class="sr-only">button-plus</span>
                                        <svg width="14" height="14" viewBox="0 0 22 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                card bottom section--}}
                <div class="flex flex-col px-3 md:px-4 lg:px-[18px] pb-5 lg:pb-6 lg:pt-1.5 h-full">
                    <div class="mb-1 lg:mb-1.5 -mx-1"><span
                            class="inline-block mx-1 text-lg font-semibold sm:text-15px lg:font-bold text-gray-900">₹ 300.60</span>
                        <del class="mx-1 text-md text-gray-700 text-opacity-70">₹350.00</del>
                    </div>
                    <h2 class="text-gray-800 text-13px sm:text-sm lg:text-[17px]  leading-5 sm:leading-6 mb-1.5">Organic
                        Green Cabbage</h2>
                    <div class="mt-auto text-13px sm:text-sm text-gray-600">1 each</div>
                </div>
            </article>
            <article
                class="flex flex-col group overflow-hidden rounded-md cursor-pointer transition-all duration-300 shadow-lg shadow-gray-200 hover:shadow-gray-500 relative h-full"
                title="Organic Spring Mix">

                {{--                card top section--}}
                <div class="relative shrink-0">
                    <div
                        class="overflow-hidden mx-auto w-full sm:w-[180px] h-[180px] md:w-[200px] md:h-[200px] transition duration-200 ease-in-out transform group-hover:scale-105 relative">
                        <img alt="Organic Spring Mix" fetchpriority="high" decoding="async" data-nimg="fill"
                             class="object-cover bg-fill-thumbnail"
                             sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw"
                             src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-7.png&w=640&q=100"
                             style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div
                        class="w-max h-max absolute top-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1">
                        <span
                            class="text-[11px] md:text-xs font-bold text-gray-50 uppercase inline-block bg-[#02b290] rounded-full px-2.5 pt-1 pb-[3px] mx-0.5 sm:mx-1">on sale</span>
                    </div>
                    <div
                        class="w-full h-full absolute top-0 flex flex-col right-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1"
                        style="justify-content: end">
                        <div class="relative w-full">
                            <div class="block product-count-button-position flex justify-end gap-3 ">
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    aria-label="Count Button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" width="19" height="19" opacity="1">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    onmouseover="
                                        const productId3 = document.getElementById('productId3');
                                      //set width to full screen
                                        productId3.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId3 = document.getElementById('productId3');
                                      //set width to full screen
                                        productId3.classList.add('hidden');
                                    " aria-label="Count Button">
                                    <svg width="19" height="19" viewBox="0 0 22 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="1">
                                            <path
                                                d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div id="productId3"
                                 class="hidden product-count-button-position absolute -right-1 bottom-0 w-full"
                                 onmouseover="
                                        const productId3 = document.getElementById('productId3');
                                      //set width to full screen
                                        productId3.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId3 = document.getElementById('productId3');
                                      //set width to full screen
                                        productId3.classList.add('hidden');
                                    ">
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 h-9 md:h-10 bg-white shadow-lg shadow-gray-200 rounded-3xl w-full h-10">
                                    <button
                                        class="flex items-center justify-center shrink-0 h-full transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none w-10 h-8 rounded-2xl text-heading hover:bg-gray-300">
                                        <span class="sr-only">button-minus</span>
                                        <svg class="transition-all" width="14" height="14" viewBox="0 0 22 22"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M3.15109 11.8438L10.174 11.8439L11.8264 11.8438L18.8493 11.8439C19.0772 11.8439 19.284 11.7515 19.4335 11.602C19.5831 11.4524 19.6755 11.2455 19.6754 11.0177C19.6755 10.5608 19.3062 10.1915 18.8493 10.1916L11.8264 10.1915L10.1741 10.1915L3.15109 10.1915C2.69427 10.1915 2.32496 10.5608 2.32496 11.0177C2.32486 11.4746 2.69416 11.8439 3.15109 11.8438Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-sm md:text-base w-6">1</span>
                                    <button
                                        class="group flex items-center justify-center h-full shrink-0 transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none pr-2 w-10 h-8 rounded-2xl text-heading hover:bg-gray-300 !pr-0"
                                        title=""><span class="sr-only">button-plus</span>
                                        <svg width="14" height="14" viewBox="0 0 22 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                card bottom section--}}
                <div class="flex flex-col px-3 md:px-4 lg:px-[18px] pb-5 lg:pb-6 lg:pt-1.5 h-full">
                    <div class="mb-1 lg:mb-1.5 -mx-1"><span
                            class="inline-block mx-1 text-lg font-semibold sm:text-15px lg:font-bold text-gray-900">₹ 100.60</span>
                        <del class="mx-1 text-md text-gray-700 text-opacity-70">₹150.00</del>
                    </div>
                    <h2 class="text-gray-800 text-13px sm:text-sm lg:text-[17px]  leading-5 sm:leading-6 mb-1.5">Oreo
                        Chocolate Sandwich Cookies, Original Flavor</h2>
                    <div class="mt-auto text-13px sm:text-sm text-gray-600">5 each</div>
                </div>
            </article>
            <article
                class="flex flex-col group overflow-hidden rounded-md cursor-pointer transition-all duration-300 shadow-lg shadow-gray-200 hover:shadow-gray-500 relative h-full"
                title="Organic Spring Mix">

                {{--                card top section--}}
                <div class="relative shrink-0">
                    <div
                        class="overflow-hidden mx-auto w-full sm:w-[180px] h-[180px] md:w-[200px] md:h-[200px] transition duration-200 ease-in-out transform group-hover:scale-105 relative">
                        <img alt="Organic Spring Mix" fetchpriority="high" decoding="async" data-nimg="fill"
                             class="object-cover bg-fill-thumbnail"
                             sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw"
                             src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-4.png&w=640&q=100"
                             style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div
                        class="w-max h-max absolute top-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1">
                        <span
                            class="text-[11px] md:text-xs font-bold text-gray-50 uppercase inline-block bg-[#02b290] rounded-full px-2.5 pt-1 pb-[3px] mx-0.5 sm:mx-1">on sale</span>
                    </div>
                    <div
                        class="w-full h-full absolute top-0 flex flex-col right-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1"
                        style="justify-content: end">
                        <div class="relative w-full">
                            <div class="block product-count-button-position flex justify-end gap-3 ">
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    aria-label="Count Button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" width="19" height="19" opacity="1">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    onmouseover="
                                        const productId = document.getElementById('productId');
                                      //set width to full screen
                                        productId.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId = document.getElementById('productId');
                                      //set width to full screen
                                        productId.classList.add('hidden');
                                    " aria-label="Count Button">
                                    <svg width="19" height="19" viewBox="0 0 22 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="1">
                                            <path
                                                d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div id="productId"
                                 class="hidden product-count-button-position absolute -right-1 bottom-0 w-full"
                                 onmouseover="
                                        const productId = document.getElementById('productId');
                                      //set width to full screen
                                        productId.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId = document.getElementById('productId');
                                      //set width to full screen
                                        productId.classList.add('hidden');
                                    ">
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 h-9 md:h-10 bg-white shadow-lg shadow-gray-200 rounded-3xl w-full h-10">
                                    <button
                                        class="flex items-center justify-center shrink-0 h-full transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none w-10 h-8 rounded-2xl text-heading hover:bg-gray-300">
                                        <span class="sr-only">button-minus</span>
                                        <svg class="transition-all" width="14" height="14" viewBox="0 0 22 22"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M3.15109 11.8438L10.174 11.8439L11.8264 11.8438L18.8493 11.8439C19.0772 11.8439 19.284 11.7515 19.4335 11.602C19.5831 11.4524 19.6755 11.2455 19.6754 11.0177C19.6755 10.5608 19.3062 10.1915 18.8493 10.1916L11.8264 10.1915L10.1741 10.1915L3.15109 10.1915C2.69427 10.1915 2.32496 10.5608 2.32496 11.0177C2.32486 11.4746 2.69416 11.8439 3.15109 11.8438Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-sm md:text-base w-6">1</span>
                                    <button
                                        class="group flex items-center justify-center h-full shrink-0 transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none pr-2 w-10 h-8 rounded-2xl text-heading hover:bg-gray-300 !pr-0"
                                        title=""><span class="sr-only">button-plus</span>
                                        <svg width="14" height="14" viewBox="0 0 22 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                card bottom section--}}
                <div class="flex flex-col px-3 md:px-4 lg:px-[18px] pb-5 lg:pb-6 lg:pt-1.5 h-full">
                    <div class="mb-1 lg:mb-1.5 -mx-1"><span
                            class="inline-block mx-1 text-lg font-semibold sm:text-15px lg:font-bold text-gray-900">₹ 300.60</span>
                        <del class="mx-1 text-md text-gray-700 text-opacity-70">₹350.00</del>
                    </div>
                    <h2 class="text-gray-800 text-13px sm:text-sm lg:text-[17px]  leading-5 sm:leading-6 mb-1.5">Organic
                        Green Cabbage</h2>
                    <div class="mt-auto text-13px sm:text-sm text-gray-600">1 each</div>
                </div>
            </article>
            <article
                class="flex flex-col group overflow-hidden rounded-md cursor-pointer transition-all duration-300 shadow-lg shadow-gray-200 hover:shadow-gray-500 relative h-full"
                title="Organic Spring Mix">

                {{--                card top section--}}
                <div class="relative shrink-0">
                    <div
                        class="overflow-hidden mx-auto w-full sm:w-[180px] h-[180px] md:w-[200px] md:h-[200px] transition duration-200 ease-in-out transform group-hover:scale-105 relative">
                        <img alt="Organic Spring Mix" fetchpriority="high" decoding="async" data-nimg="fill"
                             class="object-cover bg-fill-thumbnail"
                             sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw"
                             src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-16.png&w=640&q=100"
                             style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div
                        class="w-max h-max absolute top-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1">
                        <span
                            class="text-[11px] md:text-xs font-bold text-gray-50 uppercase inline-block bg-[#02b290] rounded-full px-2.5 pt-1 pb-[3px] mx-0.5 sm:mx-1">on sale</span>
                    </div>
                    <div
                        class="w-full h-full absolute top-0 flex flex-col right-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1"
                        style="justify-content: end">
                        <div class="relative w-full">
                            <div class="block product-count-button-position flex justify-end gap-3 ">
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    aria-label="Count Button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" width="19" height="19" opacity="1">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    onmouseover="
                                        const productId2 = document.getElementById('productId2');
                                      //set width to full screen
                                        productId2.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId2 = document.getElementById('productId2');
                                      //set width to full screen
                                        productId2.classList.add('hidden');
                                    " aria-label="Count Button">
                                    <svg width="19" height="19" viewBox="0 0 22 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="1">
                                            <path
                                                d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div id="productId2"
                                 class="hidden product-count-button-position absolute -right-1 bottom-0 w-full"
                                 onmouseover="
                                        const productId2 = document.getElementById('productId2');
                                      //set width to full screen
                                        productId2.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId2 = document.getElementById('productId2');
                                      //set width to full screen
                                        productId2.classList.add('hidden');
                                    ">
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 h-9 md:h-10 bg-white shadow-lg shadow-gray-200 rounded-3xl w-full h-10">
                                    <button
                                        class="flex items-center justify-center shrink-0 h-full transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none w-10 h-8 rounded-2xl text-heading hover:bg-gray-300">
                                        <span class="sr-only">button-minus</span>
                                        <svg class="transition-all" width="14" height="14" viewBox="0 0 22 22"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M3.15109 11.8438L10.174 11.8439L11.8264 11.8438L18.8493 11.8439C19.0772 11.8439 19.284 11.7515 19.4335 11.602C19.5831 11.4524 19.6755 11.2455 19.6754 11.0177C19.6755 10.5608 19.3062 10.1915 18.8493 10.1916L11.8264 10.1915L10.1741 10.1915L3.15109 10.1915C2.69427 10.1915 2.32496 10.5608 2.32496 11.0177C2.32486 11.4746 2.69416 11.8439 3.15109 11.8438Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-sm md:text-base w-6">1</span>
                                    <button
                                        class="group flex items-center justify-center h-full shrink-0 transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none pr-2 w-10 h-8 rounded-2xl text-heading hover:bg-gray-300 !pr-0"
                                        title=""><span class="sr-only">button-plus</span>
                                        <svg width="14" height="14" viewBox="0 0 22 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                card bottom section--}}
                <div class="flex flex-col px-3 md:px-4 lg:px-[18px] pb-5 lg:pb-6 lg:pt-1.5 h-full">
                    <div class="mb-1 lg:mb-1.5 -mx-1"><span
                            class="inline-block mx-1 text-lg font-semibold sm:text-15px lg:font-bold text-gray-900">₹ 350.60</span>
                        <del class="mx-1 text-md text-gray-700 text-opacity-70">₹450.00</del>
                    </div>
                    <h2 class="text-gray-800 text-13px sm:text-sm lg:text-[17px]  leading-5 sm:leading-6 mb-1.5">
                        Chester's Fries Flamen Hot Corn Potato Snacks</h2>
                    <div class="mt-auto text-13px sm:text-sm text-gray-600">2 each</div>
                </div>
            </article>
            <article
                class="flex flex-col group overflow-hidden rounded-md cursor-pointer transition-all duration-300 shadow-lg shadow-gray-200 hover:shadow-gray-500 relative h-full"
                title="Organic Spring Mix">

                {{--                card top section--}}
                <div class="relative shrink-0">
                    <div
                        class="overflow-hidden mx-auto w-full sm:w-[180px] h-[180px] md:w-[200px] md:h-[200px] transition duration-200 ease-in-out transform group-hover:scale-105 relative">
                        <img alt="Organic Spring Mix" fetchpriority="high" decoding="async" data-nimg="fill"
                             class="object-cover bg-fill-thumbnail"
                             sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw"
                             src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-7.png&w=640&q=100"
                             style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div
                        class="w-max h-max absolute top-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1">
                        <span
                            class="text-[11px] md:text-xs font-bold text-gray-50 uppercase inline-block bg-[#02b290] rounded-full px-2.5 pt-1 pb-[3px] mx-0.5 sm:mx-1">on sale</span>
                    </div>
                    <div
                        class="w-full h-full absolute top-0 flex flex-col right-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1"
                        style="justify-content: end">
                        <div class="relative w-full">
                            <div class="block product-count-button-position flex justify-end gap-3 ">
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    aria-label="Count Button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" width="19" height="19" opacity="1">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    onmouseover="
                                        const productId3 = document.getElementById('productId3');
                                      //set width to full screen
                                        productId3.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId3 = document.getElementById('productId3');
                                      //set width to full screen
                                        productId3.classList.add('hidden');
                                    " aria-label="Count Button">
                                    <svg width="19" height="19" viewBox="0 0 22 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="1">
                                            <path
                                                d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div id="productId3"
                                 class="hidden product-count-button-position absolute -right-1 bottom-0 w-full"
                                 onmouseover="
                                        const productId3 = document.getElementById('productId3');
                                      //set width to full screen
                                        productId3.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId3 = document.getElementById('productId3');
                                      //set width to full screen
                                        productId3.classList.add('hidden');
                                    ">
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 h-9 md:h-10 bg-white shadow-lg shadow-gray-200 rounded-3xl w-full h-10">
                                    <button
                                        class="flex items-center justify-center shrink-0 h-full transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none w-10 h-8 rounded-2xl text-heading hover:bg-gray-300">
                                        <span class="sr-only">button-minus</span>
                                        <svg class="transition-all" width="14" height="14" viewBox="0 0 22 22"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M3.15109 11.8438L10.174 11.8439L11.8264 11.8438L18.8493 11.8439C19.0772 11.8439 19.284 11.7515 19.4335 11.602C19.5831 11.4524 19.6755 11.2455 19.6754 11.0177C19.6755 10.5608 19.3062 10.1915 18.8493 10.1916L11.8264 10.1915L10.1741 10.1915L3.15109 10.1915C2.69427 10.1915 2.32496 10.5608 2.32496 11.0177C2.32486 11.4746 2.69416 11.8439 3.15109 11.8438Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-sm md:text-base w-6">1</span>
                                    <button
                                        class="group flex items-center justify-center h-full shrink-0 transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none pr-2 w-10 h-8 rounded-2xl text-heading hover:bg-gray-300 !pr-0"
                                        title=""><span class="sr-only">button-plus</span>
                                        <svg width="14" height="14" viewBox="0 0 22 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                card bottom section--}}
                <div class="flex flex-col px-3 md:px-4 lg:px-[18px] pb-5 lg:pb-6 lg:pt-1.5 h-full">
                    <div class="mb-1 lg:mb-1.5 -mx-1"><span
                            class="inline-block mx-1 text-lg font-semibold sm:text-15px lg:font-bold text-gray-900">₹ 100.60</span>
                        <del class="mx-1 text-md text-gray-700 text-opacity-70">₹150.00</del>
                    </div>
                    <h2 class="text-gray-800 text-13px sm:text-sm lg:text-[17px]  leading-5 sm:leading-6 mb-1.5">Oreo
                        Chocolate Sandwich Cookies, Original Flavor</h2>
                    <div class="mt-auto text-13px sm:text-sm text-gray-600">5 each</div>
                </div>
            </article>
            <article
                class="flex flex-col group overflow-hidden rounded-md cursor-pointer transition-all duration-300 shadow-lg shadow-gray-200 hover:shadow-gray-500 relative h-full"
                title="Organic Spring Mix">

                {{--                card top section--}}
                <div class="relative shrink-0">
                    <div
                        class="overflow-hidden mx-auto w-full sm:w-[180px] h-[180px] md:w-[200px] md:h-[200px] transition duration-200 ease-in-out transform group-hover:scale-105 relative">
                        <img alt="Organic Spring Mix" fetchpriority="high" decoding="async" data-nimg="fill"
                             class="object-cover bg-fill-thumbnail"
                             sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw"
                             src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-16.png&w=640&q=100"
                             style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div
                        class="w-max h-max absolute top-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1">
                        <span
                            class="text-[11px] md:text-xs font-bold text-gray-50 uppercase inline-block bg-[#02b290] rounded-full px-2.5 pt-1 pb-[3px] mx-0.5 sm:mx-1">on sale</span>
                    </div>
                    <div
                        class="w-full h-full absolute top-0 flex flex-col right-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1"
                        style="justify-content: end">
                        <div class="relative w-full">
                            <div class="block product-count-button-position flex justify-end gap-3 ">
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    aria-label="Count Button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" width="19" height="19" opacity="1">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    onmouseover="
                                        const productId2 = document.getElementById('productId2');
                                      //set width to full screen
                                        productId2.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId2 = document.getElementById('productId2');
                                      //set width to full screen
                                        productId2.classList.add('hidden');
                                    " aria-label="Count Button">
                                    <svg width="19" height="19" viewBox="0 0 22 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="1">
                                            <path
                                                d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div id="productId2"
                                 class="hidden product-count-button-position absolute -right-1 bottom-0 w-full"
                                 onmouseover="
                                        const productId2 = document.getElementById('productId2');
                                      //set width to full screen
                                        productId2.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId2 = document.getElementById('productId2');
                                      //set width to full screen
                                        productId2.classList.add('hidden');
                                    ">
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 h-9 md:h-10 bg-white shadow-lg shadow-gray-200 rounded-3xl w-full h-10">
                                    <button
                                        class="flex items-center justify-center shrink-0 h-full transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none w-10 h-8 rounded-2xl text-heading hover:bg-gray-300">
                                        <span class="sr-only">button-minus</span>
                                        <svg class="transition-all" width="14" height="14" viewBox="0 0 22 22"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M3.15109 11.8438L10.174 11.8439L11.8264 11.8438L18.8493 11.8439C19.0772 11.8439 19.284 11.7515 19.4335 11.602C19.5831 11.4524 19.6755 11.2455 19.6754 11.0177C19.6755 10.5608 19.3062 10.1915 18.8493 10.1916L11.8264 10.1915L10.1741 10.1915L3.15109 10.1915C2.69427 10.1915 2.32496 10.5608 2.32496 11.0177C2.32486 11.4746 2.69416 11.8439 3.15109 11.8438Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-sm md:text-base w-6">1</span>
                                    <button
                                        class="group flex items-center justify-center h-full shrink-0 transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none pr-2 w-10 h-8 rounded-2xl text-heading hover:bg-gray-300 !pr-0"
                                        title=""><span class="sr-only">button-plus</span>
                                        <svg width="14" height="14" viewBox="0 0 22 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                card bottom section--}}
                <div class="flex flex-col px-3 md:px-4 lg:px-[18px] pb-5 lg:pb-6 lg:pt-1.5 h-full">
                    <div class="mb-1 lg:mb-1.5 -mx-1"><span
                            class="inline-block mx-1 text-lg font-semibold sm:text-15px lg:font-bold text-gray-900">₹ 350.60</span>
                        <del class="mx-1 text-md text-gray-700 text-opacity-70">₹450.00</del>
                    </div>
                    <h2 class="text-gray-800 text-13px sm:text-sm lg:text-[17px]  leading-5 sm:leading-6 mb-1.5">
                        Chester's Fries Flamen Hot Corn Potato Snacks</h2>
                    <div class="mt-auto text-13px sm:text-sm text-gray-600">2 each</div>
                </div>
            </article>
            <article
                class="flex flex-col group overflow-hidden rounded-md cursor-pointer transition-all duration-300 shadow-lg shadow-gray-200 hover:shadow-gray-500 relative h-full"
                title="Organic Spring Mix">

                {{--                card top section--}}
                <div class="relative shrink-0">
                    <div
                        class="overflow-hidden mx-auto w-full sm:w-[180px] h-[180px] md:w-[200px] md:h-[200px] transition duration-200 ease-in-out transform group-hover:scale-105 relative">
                        <img alt="Organic Spring Mix" fetchpriority="high" decoding="async" data-nimg="fill"
                             class="object-cover bg-fill-thumbnail"
                             sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw"
                             src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-4.png&w=640&q=100"
                             style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div
                        class="w-max h-max absolute top-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1">
                        <span
                            class="text-[11px] md:text-xs font-bold text-gray-50 uppercase inline-block bg-[#02b290] rounded-full px-2.5 pt-1 pb-[3px] mx-0.5 sm:mx-1">on sale</span>
                    </div>
                    <div
                        class="w-full h-full absolute top-0 flex flex-col right-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1"
                        style="justify-content: end">
                        <div class="relative w-full">
                            <div class="block product-count-button-position flex justify-end gap-3 ">
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    aria-label="Count Button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" width="19" height="19" opacity="1">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    onmouseover="
                                        const productId = document.getElementById('productId');
                                      //set width to full screen
                                        productId.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId = document.getElementById('productId');
                                      //set width to full screen
                                        productId.classList.add('hidden');
                                    " aria-label="Count Button">
                                    <svg width="19" height="19" viewBox="0 0 22 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="1">
                                            <path
                                                d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div id="productId"
                                 class="hidden product-count-button-position absolute -right-1 bottom-0 w-full"
                                 onmouseover="
                                        const productId = document.getElementById('productId');
                                      //set width to full screen
                                        productId.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId = document.getElementById('productId');
                                      //set width to full screen
                                        productId.classList.add('hidden');
                                    ">
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 h-9 md:h-10 bg-white shadow-lg shadow-gray-200 rounded-3xl w-full h-10">
                                    <button
                                        class="flex items-center justify-center shrink-0 h-full transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none w-10 h-8 rounded-2xl text-heading hover:bg-gray-300">
                                        <span class="sr-only">button-minus</span>
                                        <svg class="transition-all" width="14" height="14" viewBox="0 0 22 22"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M3.15109 11.8438L10.174 11.8439L11.8264 11.8438L18.8493 11.8439C19.0772 11.8439 19.284 11.7515 19.4335 11.602C19.5831 11.4524 19.6755 11.2455 19.6754 11.0177C19.6755 10.5608 19.3062 10.1915 18.8493 10.1916L11.8264 10.1915L10.1741 10.1915L3.15109 10.1915C2.69427 10.1915 2.32496 10.5608 2.32496 11.0177C2.32486 11.4746 2.69416 11.8439 3.15109 11.8438Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-sm md:text-base w-6">1</span>
                                    <button
                                        class="group flex items-center justify-center h-full shrink-0 transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none pr-2 w-10 h-8 rounded-2xl text-heading hover:bg-gray-300 !pr-0"
                                        title=""><span class="sr-only">button-plus</span>
                                        <svg width="14" height="14" viewBox="0 0 22 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                card bottom section--}}
                <div class="flex flex-col px-3 md:px-4 lg:px-[18px] pb-5 lg:pb-6 lg:pt-1.5 h-full">
                    <div class="mb-1 lg:mb-1.5 -mx-1"><span
                            class="inline-block mx-1 text-lg font-semibold sm:text-15px lg:font-bold text-gray-900">₹ 300.60</span>
                        <del class="mx-1 text-md text-gray-700 text-opacity-70">₹350.00</del>
                    </div>
                    <h2 class="text-gray-800 text-13px sm:text-sm lg:text-[17px]  leading-5 sm:leading-6 mb-1.5">Organic
                        Green Cabbage</h2>
                    <div class="mt-auto text-13px sm:text-sm text-gray-600">1 each</div>
                </div>
            </article>
            <article
                class="flex flex-col group overflow-hidden rounded-md cursor-pointer transition-all duration-300 shadow-lg shadow-gray-200 hover:shadow-gray-500 relative h-full"
                title="Organic Spring Mix">

                {{--                card top section--}}
                <div class="relative shrink-0">
                    <div
                        class="overflow-hidden mx-auto w-full sm:w-[180px] h-[180px] md:w-[200px] md:h-[200px] transition duration-200 ease-in-out transform group-hover:scale-105 relative">
                        <img alt="Organic Spring Mix" fetchpriority="high" decoding="async" data-nimg="fill"
                             class="object-cover bg-fill-thumbnail"
                             sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw"
                             src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-7.png&w=640&q=100"
                             style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div
                        class="w-max h-max absolute top-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1">
                        <span
                            class="text-[11px] md:text-xs font-bold text-gray-50 uppercase inline-block bg-[#02b290] rounded-full px-2.5 pt-1 pb-[3px] mx-0.5 sm:mx-1">on sale</span>
                    </div>
                    <div
                        class="w-full h-full absolute top-0 flex flex-col right-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1"
                        style="justify-content: end">
                        <div class="relative w-full">
                            <div class="block product-count-button-position flex justify-end gap-3 ">
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    aria-label="Count Button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" width="19" height="19" opacity="1">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                                <button
                                    class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                                    onmouseover="
                                        const productId3 = document.getElementById('productId3');
                                      //set width to full screen
                                        productId3.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId3 = document.getElementById('productId3');
                                      //set width to full screen
                                        productId3.classList.add('hidden');
                                    " aria-label="Count Button">
                                    <svg width="19" height="19" viewBox="0 0 22 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="1">
                                            <path
                                                d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div id="productId3"
                                 class="hidden product-count-button-position absolute -right-1 bottom-0 w-full"
                                 onmouseover="
                                        const productId3 = document.getElementById('productId3');
                                      //set width to full screen
                                        productId3.classList.remove('hidden');
                                    " onmouseleave="
                                        const productId3 = document.getElementById('productId3');
                                      //set width to full screen
                                        productId3.classList.add('hidden');
                                    ">
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 h-9 md:h-10 bg-white shadow-lg shadow-gray-200 rounded-3xl w-full h-10">
                                    <button
                                        class="flex items-center justify-center shrink-0 h-full transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none w-10 h-8 rounded-2xl text-heading hover:bg-gray-300">
                                        <span class="sr-only">button-minus</span>
                                        <svg class="transition-all" width="14" height="14" viewBox="0 0 22 22"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M3.15109 11.8438L10.174 11.8439L11.8264 11.8438L18.8493 11.8439C19.0772 11.8439 19.284 11.7515 19.4335 11.602C19.5831 11.4524 19.6755 11.2455 19.6754 11.0177C19.6755 10.5608 19.3062 10.1915 18.8493 10.1916L11.8264 10.1915L10.1741 10.1915L3.15109 10.1915C2.69427 10.1915 2.32496 10.5608 2.32496 11.0177C2.32486 11.4746 2.69416 11.8439 3.15109 11.8438Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-sm md:text-base w-6">1</span>
                                    <button
                                        class="group flex items-center justify-center h-full shrink-0 transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none pr-2 w-10 h-8 rounded-2xl text-heading hover:bg-gray-300 !pr-0"
                                        title=""><span class="sr-only">button-plus</span>
                                        <svg width="14" height="14" viewBox="0 0 22 22" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                                <path
                                                    d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                card bottom section--}}
                <div class="flex flex-col px-3 md:px-4 lg:px-[18px] pb-5 lg:pb-6 lg:pt-1.5 h-full">
                    <div class="mb-1 lg:mb-1.5 -mx-1"><span
                            class="inline-block mx-1 text-lg font-semibold sm:text-15px lg:font-bold text-gray-900">₹ 100.60</span>
                        <del class="mx-1 text-md text-gray-700 text-opacity-70">₹150.00</del>
                    </div>
                    <h2 class="text-gray-800 text-13px sm:text-sm lg:text-[17px]  leading-5 sm:leading-6 mb-1.5">Oreo
                        Chocolate Sandwich Cookies, Original Flavor</h2>
                    <div class="mt-auto text-13px sm:text-sm text-gray-600">5 each</div>
                </div>
            </article>

        </div>
    </div>

</div>
{{-- shop ends--}}
@endsection
