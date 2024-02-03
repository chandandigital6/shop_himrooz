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
                    <a class="inline-flex items-center" href="{{route('front.home')}}">
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
                    <a class="capitalize font-semibold text-heading" href="{{route('store', ['id'=> 0])}}">Store</a></li>
            </ol>
        </div>
    </div>
</div>
{{--banner ends--}

{{--shop here--}}
<div name="grid" class="flex flex-col mb-16 md:flex-row px-6 relative">
    {{--    middle side--}}
    <div class="w-full mt-8 xl:-ml-3 xl:mr-3 3xl:-ml-1 3xl:mr-1 3xl:pr-2 3xl:pl-2">

        <aside id="categorySideBar" class="flex justify-end bg-black/50 shrink-0  absolute top-0 -right-20 w-0 z-40 h-max overflow-hidden">
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

                            @php
                                $categories = \App\Models\Categorie::orderBy('name')->get();

                            @endphp
                            <ul class="list">
                                <a href="{{route('store', ['id'=> 0])}}">
                                    <li class="flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70">
                                        <button class="flex items-center w-full ltr:text-left:text-right outline-none focus:outline-none group focus:ring-0 focus:text-brand-dark" >
                                            <div class="inline-flex shrink-0 2xl:w-12 2xl:h-12 3xl:w-auto 3xl:h-auto">
                                                <img alt="" loading="lazy" width="40" height="40" decoding="async" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRY048t_rCchDgPXwHaQ11x3YakucJ2yh0qZA&usqp=CAU" >
                                            </div>
                                            <span class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">All Products</span>


                                            <span class="ml-auto">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-base text-brand-dark text-opacity-40" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path>
                            </svg>
                        </span>
                                        </button>
                                    </li>
                                </a>

                            @foreach ($categories as $category)

                                @if($category->subcategories->count() > 0)

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
                                                <a href="{{route('store', ['id' => $category->id])}}">
                                                    <li class="subcategory-item flex flex-col justify-between items-center transition text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70"
                                                        data-subcategory-id="{{ $subcategory->id }}">
                                                        <span class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">{{ $subcategory->name }}</span>
                                                    </li>
                                                </a>
                                            @endforeach
                                        </ul>

                                    </li>
                                  @else
                                        <a href="{{route('store', ['id' => $category->id])}}" class="">
                                            <li class="flex flex-col justify-between items-center transition text-sm md:text-15px border-t border-border-base  hover:bg-fill-base  px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3 text-brand-dark text-opacity-70">
                                                <button class="flex items-center w-full ltr:text-left:text-right outline-none focus:outline-none group focus:ring-0 focus:text-brand-dark">
                                                    <div class="inline-flex shrink-0 2xl:w-12 2xl:h-12 3xl:w-auto 3xl:h-auto">
                                                        <img alt="{{ $category->name }}" loading="lazy" width="40" height="40" decoding="async" src="{{ asset('storage/'. $category->image) }}" >
                                                    </div>
                                                    <span class="text-brand-dark group-hover:text-opacity-80 capitalize pl-2.5 pr-2.5 md:pl-4 md:pr-4 2xl:pl-3 2xl:pr-3 3xl:pl-4 3xl:pr-4">{{ $category->name }}</span>
                                                </button>
                                            </li>
                                        </a>
                                    @endif
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

                </div>
            </div>
        </aside>

        <div class=" flex items-center justify-between pb-0.5 mb-4 lg:mb-5 xl:mb-6">
            <div class="-mt-1.5 mb-0">
            <p class="text-brand-dark font-medium text-base lg:text-lg leading-7 2xl:text-[20px] lg:leading-loose lg:mt-4 mb-3.5">
                Showing Results For : &nbsp;<span class="text-[#02b290]">{{$categoryName?? ''}} .</span></p>
            </div>

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

        @if($products->count() == 0)
            <div class="flex justify-center items-center w-full lg:h-[500px]">
                <img class="h-full w-full object-cover rounded-md" src="{{asset('assets/images/commingSoon.jpeg')}}" alt="">
            </div>

            @else
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 md:gap-4 2xl:gap-5">
                @foreach($products as $product)
                    @php
                        if($product->deal){
                            if($product->deal->start_time <= now() && $product->deal->end_time >= now()){
                            $discount = $product->deal->discount;
                            $deal = 'yes';
                            $expire = $end_time->diff(now())->format('%a :  %h :  %i :  %s');
                            }else{
                                $discount = $product->variations->first()->discountPercentage;
                                $deal = '';
                                $expire = '';
                            }
                        }else{
                            $discount = $product->variations->first()->discountPercentage;
                            $deal = '';
                            $expire = '';
                        }
                    @endphp
                    <x-product-card
                        product-name="{{$product->title}}"
                        product-price="{{$product->variations->first()->price}}"
                        product-discount-price="{{$product->variations->first()->price-(($product->variations->first()->price * $discount )/100) }}"
                        product-quantity="{{$product->qty}}"
                        product-image="{{$product->image}}"
                        product-id="{{$product->id}}"
                        deal="{{$deal}}"
                        expire="{{$expire}}"
                    ></x-product-card>
                @endforeach
            </div>
        @endif





    </div>

</div>
{{-- shop ends--}}
@endsection
