@extends('front.layouts')

@section('content')

    <div class="swiffy-slider py-4 lg:px-6 md:px-6 sm:px-4 px-2 slider-nav-chevron slider-indicators-highlight slider-indicators-round slider-nav-animation-fadein">
        <ul class="slider-container">
            @foreach ($sliderImages as $image)
                <li><img class="rounded-md w-full lg:h-[50vh] md:h-[50vh] h-[30vh]" src="{{ asset('storage/'.$image->image) }}"></li>
            @endforeach
        </ul>

        <button type="button" class="slider-nav ml-4"></button>
        <button type="button" class="slider-nav slider-nav-next mr-4"></button>

        <div class="slider-indicators">
            @foreach ($sliderImages as $key => $image)
                <button class="{{ $key === 0 ? 'active' : '' }}"></button>
            @endforeach
        </div>
    </div>

    {{--    <div class="swiffy-slider py-4 lg:px-6 md:px-6 sm:px-4 px-2 slider-nav-chevron slider-indicators-highlight slider-indicators-round slider-nav-animation-fadein  ">--}}
{{--        <ul class="slider-container">--}}

{{--            <li><img class=" rounded-md w-full lg:h-[50vh] md:h-[50vh] h-[30vh] "--}}
{{--                     src="{{asset('assets/images/homeSlider/11.png')}}">--}}
{{--            </li>--}}
{{--            <li><img class=" rounded-md w-full lg:h-[50vh] md:h-[50vh] h-[30vh] "--}}
{{--                     src="{{asset('assets/images/homeSlider/22.png ')}}">--}}
{{--            </li>--}}

{{--        </ul>--}}

{{--        <button type="button" class="slider-nav ml-4"></button>--}}
{{--        <button type="button" class="slider-nav slider-nav-next mr-4"></button>--}}

{{--        <div class="slider-indicators">--}}
{{--            <button class="active"></button>--}}
{{--            <button></button>--}}
{{--            <button></button>--}}
{{--        </div>--}}
{{--    </div>--}}

    @if($product->isNotEmpty())
    <div name="grid" class="flex flex-col mb-16 md:flex-row px-6 relative">
        {{--    left side--}}
        <aside id="categorySideBar"
               class="lg:bg-transparent bg-white shrink-0 pr-8 pl-8 xl:pr-10 xl:pl-10  lg:w-[300px] 2xl:w-96 xl:sticky  lg:sticky absolute  xl:top-20 lg:top-20 -left-20 h-max z-40 w-0 overflow-hidden">
            <div
                class="xl:hidden lg:hidden w-full border-b border-border-base flex justify-end items-center relative pl-5 pr-5 pl-7 md:pr-7 shrink-0 py-0.5">
                <button
                    class="flex items-center justify-center px-4 py-5 text-2xl transition-opacity md:px-5 lg:py-8 focus:outline-none hover:opacity-60"
                    aria-label="close"
                    onclick="
                               const categorySideBar = document.getElementById('categorySideBar');
                                //set width to full screen
                                categorySideBar.classList.add('-left-20');
                                categorySideBar.classList.remove('left-0');
                                categorySideBar.style.width = '0%';
                                categorySideBar.style.transition = 'width 0.5s ease-in';

                                "
                >
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                         class="text-brand-dark mt-0.5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M289.94 256l95-95A24 24 0 00351 127l-95 95-95-95a24 24 0 00-34 34l95 95-95 95a24 24 0 1034 34l95-95 95 95a24 24 0 0034-34z"></path>
                    </svg>
                </button>
            </div>
            <div class="max-h-full h-max overflow-hidden border rounded border-border-base">
                <div data-overlayscrollbars-initialize="" data-overlayscrollbars="host">
                    <div class="os-size-observer os-size-observer-appear">
                        <div class="os-size-observer-listener ltr"></div>
                    </div>
                    <div class="os-viewport os-viewport-scrollbar-hidden">
                        <div class="h-[calc(84vh-_150px)] lg:h-full">
                            <ul class="list">
                                @foreach ($categories as $category)
                                    <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70">
                                        <button class="flex items-center w-full ltr:text-left:text-right outline-none focus:outline-none group focus:ring-0 focus:text-brand-dark" onclick="toggleSubcategories('{{ strtolower($category->name) }}List')">
                                            <div class="inline-flex shrink-0 2xl:w-12 2xl:h-12 3xl:w-auto 3xl:h-auto">
                                                <img alt="{{ $category->name }}" loading="lazy" width="40" height="40" decoding="async" src="{{ asset('storage/'. $category->image) }}" >
                                            </div>
                                            <span class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">{{ $category->name }}</span>


                                            <span class="ml-auto">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-base text-brand-dark text-opacity-40" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path>
                            </svg>
                        </span>
                                        </button>
                                        <ul id="{{ strtolower($category->name) }}List" class="h-0 overflow-hidden subcategory-list">
                                            @foreach ($category->subcategories as $subcategory)
                                                <li class="subcategory-item flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70"
                                                    data-subcategory-id="{{ $subcategory->id }}">
                                                    <span class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">{{ $subcategory->name }}</span>
                                                </li>
                                            @endforeach
                                        </ul>

                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <script>
                        function toggleSubcategories(subcategoryId) {
                            const subcategoryList = document.getElementById(subcategoryId);
                            subcategoryList.classList.toggle('h-0'); // Toggle the 'h-0' class to show/hide the list
                        }
                    </script>

{{--                    <script>--}}
{{--                        document.addEventListener("DOMContentLoaded", function () {--}}
{{--                            // Get all subcategory items--}}
{{--                            const subcategoryItems = document.querySelectorAll(".subcategory-item");--}}

{{--                            // Add a click event listener to each subcategory item--}}
{{--                            subcategoryItems.forEach(function (subcategoryItem) {--}}
{{--                                subcategoryItem.addEventListener("click", function () {--}}
{{--                                    // Retrieve the subcategory ID from the data attribute--}}
{{--                                    const subcategoryId = subcategoryItem.getAttribute("data-subcategory-id");--}}
{{--                                    // Define the behavior you want when a subcategory is clicked--}}
{{--                                    alert("Subcategory ID: " + subcategoryId);--}}
{{--                                });--}}
{{--                            });--}}
{{--                        });--}}
{{--                    </script>--}}


                    <div
                        class="os-scrollbar os-scrollbar-horizontal os-scrollbar-auto-hidden os-scrollbar-handle-interactive os-scrollbar-cornerless os-scrollbar-unusable os-theme-dark">
                        <div class="os-scrollbar-track">
                            <div class="os-scrollbar-handle" style="width: 100%;"></div>
                        </div>
                    </div>
                    <div
                        class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden os-scrollbar-handle-interactive os-scrollbar-cornerless os-scrollbar-unusable os-theme-dark">
                        <div class="os-scrollbar-track">
                            <div class="os-scrollbar-handle" style="height: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        {{--    middle side--}}
        <div class="w-full xl:-ml-3 xl:mr-3 3xl:-ml-1 3xl:mr-1 3xl:pr-2 3xl:pl-2">
            <div class="xl:hidden lg:hidden flex items-center justify-between pb-0.5 mb-4 lg:mb-5 xl:mb-6">
                <div class="-mt-1.5 mb-0"><h2
                        class="text-brand-dark text-lg lg:text-xl xl:text-[22px] xl:leading-8 font-bold font-manrope">All
                        Products</h2></div>
                <div
                    class="transition-all text-[#02b290] -mt-1.5 font-semibold text-sm md:text-[15px] hover:text-gray-900 cursor-pointer"
                    role="button" onclick="
                                const categorySideBar = document.getElementById('categorySideBar');
                                //set width to full screen
                                categorySideBar.classList.remove('-left-20');
                                categorySideBar.classList.add('left-0');
                                categorySideBar.style.width = '100%';
                                categorySideBar.style.transition = 'width 0.3s ease-in';

                                ">Categories
                </div>
            </div>
            <div
                class="grid grid-cols-2 gap-3 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 md:gap-4 2xl:gap-5">


                @foreach($product as $products)
                {{--            product card--}}
                <a href="{{ route('product.show', ['productId' =>$products]) }}">

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
                                     src="{{asset('storage/'.$products->image)}}"
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
                                    class="inline-block mx-1 text-lg font-semibold sm:text-15px lg:font-bold text-gray-900">₹ {{$products->price}}</span>
                                <del class="mx-1 text-md text-gray-700 text-opacity-70">₹{{$products->discount_price}}</del>
                            </div>
                            <h2 class="text-gray-800 text-13px sm:text-sm lg:text-[17px]  leading-5 sm:leading-6 mb-1.5">
                                {{$products->title}}</h2>
                            <div class="mt-auto text-13px sm:text-sm text-gray-600">1 each</div>
                        </div>

                    </article>
                </a>
                @endforeach
                {{--            product card end--}}


            </div>
        </div>
        {{--    right side--}}
        <div
            class="h-full w-full xl:w-[350px] 2xl:w-96 shrink-0 md:pl-5 md:pr-5 lg:pl-6 lg:pr-6 xl:pl-7 xl:pr-7 space-y-6 lg:space-y-8 w-full md:w-[300px] lg:w-[350px] mt-10 md:mt-0 md:sticky md:top-20 lg:top-24">
            <div class="h-auto overflow-hidden border-2 border-yellow-300 rounded-md 3xl:h-full shadow-card">
                <h2 class="bg-yellow-300 text-center font-bold text-brand-dark font-manrope p-2.5 text-15px lg:text-base">
                    Deals of the week</h2>
                <article
                    class="flex flex-col justify-between group cursor-pointer relative px-5 lg:px-7 pt-4 lg:pt-5 pb-6 lg:pb-8"
                    title="Special Oil">
                    <div class="">
                        <div class="relative shrink-0">
                            <div class="relative flex justify-center mx-auto overflow-hidden">
                                <img alt="Special Oil" loading="lazy" width="350" height="350"
                                     decoding="async" data-nimg="1" class="object-cover bg-fill-thumbnail"
                                     src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-38-m.png&w=384&q=100"
                                     style="color: transparent; width: auto;">
                            </div>
                            <div class="w-full h-full absolute top-0 z-10 left-0">
                            <span
                                class="text-[11px] md:text-xs font-bold text-gray-50 uppercase inline-block bg-green-700 rounded-full px-2.5 py-[5px] pb-1">
                                Most Popular</span>
                            </div>
                        </div>
                        <div class="flex flex-col pb-5 lg:pb-6 mb-0.5 lg:pt-3 h-full text-center">
                            <div class="-mx-1 mb-1 lg:mb-2.5">
                                <span class="inline-block mx-1 text-xl font-semibold xl:text-2xl text-gray-900">₹6.20</span>
                                <del class="mx-1 text-base text-opacity-50 xl:text-lg text-gray-900">₹6.98</del>
                            </div>
                            <h2 class="text-sm leading-5 text-brand-dark lg:text-15px xl:text-base sm:leading-6">
                                Special Oil For Your Heart</h2></div>
                    </div>
                    <span
                        class="flex items-center justify-center text-base xl:text-lg text-brand-dark text-opacity-50 font-semibold -mx-2.5">
                    <span
                        class="flex items-center justify-center min-w-[40px] md:min-w-[50px] min-h-[36px] md:min-h-[40px] bg-gray-100 text-brand-dark rounded p-1 mx-1 md:mx-1.5 lg:mx-2.5">02</span>:<span
                            class="flex items-center justify-center min-w-[40px] md:min-w-[50px] min-h-[36px] md:min-h-[40px] bg-gray-100 text-brand-dark rounded p-1 mx-1 md:mx-1.5 lg:mx-2.5">18</span>:<span
                            class="flex items-center justify-center min-w-[40px] md:min-w-[50px] min-h-[36px] md:min-h-[40px] bg-gray-100 text-brand-dark rounded p-1 mx-1 md:mx-1.5 lg:mx-2.5">39</span>:<span
                            class="flex items-center justify-center min-w-[40px] md:min-w-[50px] min-h-[36px] md:min-h-[40px] bg-gray-100 text-brand-dark rounded p-1 mx-1 md:mx-1.5 lg:mx-2.5">47</span></span>
                    <div class="w-full pt-8 lg:pt-10">
                        <div class="relative w-full h-2.5 lg:h-3 bg-gray-100 rounded-full overflow-hidden">
                            <div class="absolute h-full bg-yellow-300 bg-opacity-90 rounded-full"
                                 style="width: 71%;"></div>
                        </div>
                        <div class="flex justify-between items-center mt-2.5 md:mt-3 xl:mt-2.5 2xl:mt-3.5">
                            <div
                                class="text-brand-dark text-opacity-60 text-13px sm:text-sm lg:text-15px leading-6 md:leading-7">
                                Sold :&nbsp;<span class="text-brand-dark font-medium">50 items</span></div>
                            <div
                                class="text-brand-dark text-opacity-60 text-13px sm:text-sm lg:text-15px leading-6 md:leading-7">
                                Available :&nbsp;<span class="text-brand-dark font-medium">20 items</span></div>
                        </div>
                    </div>
                </article>
            </div>
            {{--        <div class="mx-auto hidden md:flex">--}}
            {{--            <a class="h-full group flex justify-center relative overflow-hidden" href="/search">--}}
            {{--                <img alt="Today's best deal" fetchpriority="high" width="385" height="960" decoding="async"--}}
            {{--                     data-nimg="1"--}}
            {{--                     class="bg-fill-thumbnail object-cover w-full"--}}
            {{--                     src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fbanner%2Fbanner-12.jpg&w=640&q=100"--}}
            {{--                     style="color: transparent;">--}}
            {{--                <div--}}
            {{--                    class="absolute top-0 block w-1/2 h-full transform -skew-x-12  z-5 bg-gradient-to-r from-transparent to-white opacity-30 group-hover:animate-shine"></div>--}}
            {{--            </a></div>--}}
        </div>
    </div>
    @else
        <div class="w-full h-96 flex justify-center text-center">
            <img class="h-full w-full object-cover" src="https://img.freepik.com/free-vector/realistic-coming-soon-background_52683-59077.jpg?w=740&t=st=1698301669~exp=1698302269~hmac=8a9beae0620b0d573d806ac929f2204940ad549aee46c83c1e6c04f529d065e6" alt="">
        </div>
    @endif
@endsection
