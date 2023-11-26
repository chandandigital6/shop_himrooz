    @extends('front.layouts')

@section('content')

{{--product details section--}}
<div class="pt-6 lg:pt-7 px-10">
    <div class="flex items-center ">
        <ol class="flex items-center w-full overflow-hidden">
            <li class="text-sm text-gray-400 px-2.5 transition duration-200 ease-in pl-0 pr-0 pr-0 pl-0 hover:text-gray-900">
                <a class="inline-flex items-center" href="/">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                         class="ltr:mr-1.5 rtl:ml-1.5 text-brand-dark text-15px" height="1em" width="1em"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                              d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212"></path>
                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                              d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256m368-77V64h-48v69"></path>Review Rating
                    </svg>
                    <span class="ml-2">Home</span>
                </a></li>
            <li class="font-semibold text-gray-400 mt-[1px]">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                     class="text-brand-dark text-opacity-40 text-15px" height="1em" width="1em"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
                          d="M184 112l144 144-144 144"></path>
                </svg>
            </li>
            <li class="text-sm text-gray-400 px-2.5 transition duration-200 ease-in pl-0 pr-0 pr-0 pl-0 hover:text-gray-900">
                <a class="inline-flex items-center" href="/">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                         class="ltr:mr-1.5 rtl:ml-1.5 text-brand-dark text-15px" height="1em" width="1em"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                              d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212"></path>
                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                              d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256m368-77V64h-48v69"></path>
                    </svg>
                    <span class="ml-2">Products</span>
                </a></li>
            <li class="font-semibold text-gray-400 mt-[1px]">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                     class="text-brand-dark text-opacity-40 text-15px" height="1em" width="1em"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
                          d="M184 112l144 144-144 144"></path>
                </svg>
            </li>
            <li class="text-sm font-semibold text-gray-800 px-2.5 transition duration-200 ease-in pl-0 pr-0 pr-0 pl-0 hover:text-gray-400">
                <a class="capitalize" href="/products/lay's-bar-b-que-potato-chips">{{$showProduct->title}}</a>
            </li>
        </ol>
    </div>
    <div class="pt-6 pb-2 md:pt-7 ">
        <div class="w-full grid lg:grid-cols-3  grid-cols-1 gap-2 ">
            <div class="w-full col-span-2 flex">
                <div class="shrink-0 lg:w-[150px] xl:w-[150px] 2xl:w-[170px] lg:flex hidden ">
                    <div class="flex flex-col gap-2 lg:h-[500px] overflow-auto">
                          @foreach($showProduct->variations as $variation)
                            <div
                                class=" swiper-slide flex items-center justify-center overflow-hidden transition border rounded cursor-pointer border-border-base hover:opacity-75 swiper-slide-visible swiper-slide-active swiper-slide-thumb-active w-full"
                                onclick="
                                        var productBigImage = document.getElementById('productBigImage');
                                            productBigImage.src = '{{asset('storage/'.$variation->image)}}';

                                "


                            >
                                <img alt="Product thumb gallery 1" loading="lazy"
                                     width="170" height="170" decoding="async"
                                     data-nimg="1"
                                     src="{{asset('storage/'.$variation->image)}}"
                                     style="color: transparent; width: auto;"></div>
                          @endforeach

                    </div>
                </div>
                <div class="xl:ml-5 xl:mr-5 mb-2.5 md:mb-3 border border-border-base overflow-hidden rounded-md relative lg:h-[500px] md:h-[450px] sm:h-[400px] h-[300px] w-full">
                    <div class=" w-full h-full">
                        <img fetchpriority="high"
                             data-nimg="1" class="rounded-lg h-full w-full object-cover"
                             src="{{asset('storage/'.$showProduct->variations->first()->image)}}" id="productBigImage">
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col  shrink-0  xl:pl-2 xl:pr-2">
                <div class="pb-3 lg:pb-5">
                    <div class="md:mb-2.5 block -mt-1.5">
                        <h2 class="text-lg font-medium transition-colors duration-300 text-brand-dark md:text-xl xl:text-2xl">
                           {{$showProduct->title}}</h2></div>
                    <div class="flex items-center mt-5">
                        <div>
                            @php
                                $firstVariantPrice = $showProduct->variations->first()->price;
                                if($showProduct->variations->first()->deal){
                                    if($showProduct->variations->first()->deal->start_time <= now() && $showProduct->variations->first()->deal->end_time >= now()){
                                        $firstVariantDiscountPercentage = $showProduct->variations->first()->deal->discount;
                                    }else{
                                        $firstVariantDiscountPercentage = $showProduct->variations->first()->discountPercentage;
                                    }
                                }else{
                                    $firstVariantDiscountPercentage = $showProduct->variations->first()->discountPercentage;
                                }
                            @endphp
                            <span class="text-brand-dark  font-bold text-base md:text-xl xl:text-[22px]" id="discountedPrice">₹{{  $firstVariantPrice- (($firstVariantPrice*$firstVariantDiscountPercentage)/100)}}</span>
                            <span class="text-gray-500 line-through font-semibold xl:text-[18px] md:text-md" id="originalPrice">₹{{$firstVariantPrice}}</span>
                        </div>
                    </div>
                </div>
                <div class="mb-2 pt-0.5">
                    <h4 class="mb-3 font-normal capitalize text-[15px] text-gray-900 text-opacity-70">Available
                        in:</h4>
                    <ul class="flex flex-wrap mr-2 ml-2">
                        @foreach($showProduct->variations as $variant)
                            @php
                                if($variant->deal){
                                if($variant->deal->start_time <= now() && $variant->deal->end_time >= now()){
                                $discount = $variant->deal->discount;
                                $deal = 'yes';
                                }else{
                                    $discount = $variant->discountPercentage;
                                    $deal = '';
                                }
                                }else{
                                    $discount = $variant->discountPercentage;
                                    $deal = '';
                                }
                            @endphp
                            @if($variant)
                                <li class="variantName cursor-pointer {{$loop->iteration==1? 'bg-[#8ddccd]': ""}} rounded border h-9 md:h-10 p-1 mb-2 md:mb-3 mr-2 ml-2 flex justify-center items-center font-medium text-sm md:text-[15px] text-black transition duration-200 ease-in-out hover:text-gray-500 hover:border-brand px-3"
                                    onclick="
                                            var discountedPrice = document.getElementById('discountedPrice');
                                            var originalPrice = document.getElementById('originalPrice');
                                            var productBigImage = document.getElementById('productBigImage');
                                            var selectedVariant = this;


                                            // Reset background color for all variants
                                            var allVariants = document.querySelectorAll('.variantName');
                                            allVariants.forEach(function(variant) {
                                                variant.style.backgroundColor = 'transparent';

                                            });

                                            // Set background color for the selected variant
                                            selectedVariant.style.backgroundColor = '#8ddccd';


                                            discountedPrice.innerHTML = '₹{{$variant->price - (($variant->price * $discount) / 100)}}';
                                            originalPrice.innerHTML = '₹{{$variant->price}}';

                                            productBigImage.src = '{{asset('storage/'.$variant->image)}}';
                                            var variation_id = document.getElementById('variation_id');
                                            variation_id.value = '{{$variant->id}}';
                                          "
                                >
                                    {{$variant->name}} <span class="{{$deal ? 'bg-green-600 text-white' : 'hidden'}}">{{$deal ? 'On Sale' : ''}}</span>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="pb-2"></div>

                <div class="pt-1.5 lg:pt-3 xl:pt-4 space-y-2.5 md:space-y-3.5">
                    <form action="{{route('cart.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$showProduct->id}}">
                        <input type="hidden" name="variation_id" value="{{$showProduct->variations->first()->id}}" id="variation_id">
                        <input type="hidden" min="1" value="1" name="quantity" id="quantity">
                    <div
                        class="flex items-center lg:justify-center md:justify-center justify-between rounded overflow-hidden shrink-0 p-1 h-11 md:h-14 bg-[#f3f5f9]">
                        <button type="button" onclick="
                        let valueContainer = document.getElementById('quantityValue');
                        let quantityValue = parseInt(valueContainer.innerText);
                        if(quantityValue > 1){
                        quantityValue = quantityValue - 1;
                        }
                        valueContainer.innerText = quantityValue;
                        document.getElementById('quantity').value = quantityValue;
                        "
                            class="flex items-center justify-center shrink-0 h-full transition-all ease-in-out duration-300 focus:outline-none focus-visible:outline-none !w-10 !h-10 rounded-full transform scale-80 lg:scale-100 text-brand-dark hover:bg-fill-four ltr:ml-auto rtl:mr-auto">
                            <span class="sr-only">button-minus</span>
                            <svg class="transition-all" width="22" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="1">
                                    <path
                                        d="M3.15109 11.8438L10.174 11.8439L11.8264 11.8438L18.8493 11.8439C19.0772 11.8439 19.284 11.7515 19.4335 11.602C19.5831 11.4524 19.6755 11.2455 19.6754 11.0177C19.6755 10.5608 19.3062 10.1915 18.8493 10.1916L11.8264 10.1915L10.1741 10.1915L3.15109 10.1915C2.69427 10.1915 2.32496 10.5608 2.32496 11.0177C2.32486 11.4746 2.69416 11.8439 3.15109 11.8438Z"
                                        fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                </g>
                            </svg>
                        </button>
                        <span id="quantityValue"
                            class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-base md:text-[17px] w-12 md:w-20 xl:w-28 ">1</span>
                        <button type="button" onclick="
                        let valueContainer = document.getElementById('quantityValue');
                        let quantityValue = parseInt(valueContainer.innerText);
                        quantityValue = quantityValue + 1;
                        valueContainer.innerText = quantityValue;
                        document.getElementById('quantity').value = quantityValue;
                        "
                            class="group flex items-center justify-center h-full shrink-0 transition-all ease-in-out duration-300 focus:outline-none focus-visible:outline-none pr-2 !w-10 !h-10 rounded-full scale-80 lg:scale-100 text-heading hover:bg-fill-four ltr:mr-auto rtl:ml-auto !pr-0 justify-center"
                            title=""><span class="sr-only">button-plus</span>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g opacity="1">
                                    <path
                                        d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                        fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>
                                </g>
                            </svg>
                        </button>
                    </div>



                    <button type="submit" data-variant="primary"
                            class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center  transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-12 md:h-14 bg-[#1bba9b] text-gray-50 tracking-widest px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 bg-opacity-50 hover:bg-opacity-50 w-full px-1.5"
                            >
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                             xmlns="http://www.w3.org/2000/svg" class="ltr:mr-3 rtl:ml-3">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M19.7999 19.0172L18.5402 4.8319C18.5132 4.51697 18.2478 4.27853 17.9374 4.27853H15.3459C15.31 1.91207 13.3754 0 10.9999 0C8.62447 0 6.68991 1.91207 6.65392 4.27853H4.06251C3.74758 4.27853 3.48664 4.51697 3.45965 4.8319L2.19993 19.0172C2.19993 19.0352 2.19543 19.0532 2.19543 19.0712C2.19543 20.6863 3.6756 22 5.49768 22H16.5022C18.3243 22 19.8044 20.6863 19.8044 19.0712C19.8044 19.0532 19.8044 19.0352 19.7999 19.0172ZM10.9999 1.21472C12.705 1.21472 14.0952 2.58241 14.1312 4.27853H7.86864C7.90464 2.58241 9.29482 1.21472 10.9999 1.21472ZM16.5022 20.7853H5.49768C4.35494 20.7853 3.42815 20.0294 3.41016 19.0982L4.61588 5.49775H6.64942V7.34233C6.64942 7.67975 6.91936 7.94969 7.25678 7.94969C7.59421 7.94969 7.86415 7.67975 7.86415 7.34233V5.49775H14.1312V7.34233C14.1312 7.67975 14.4012 7.94969 14.7386 7.94969C15.076 7.94969 15.3459 7.67975 15.3459 7.34233V5.49775H17.3795L18.5897 19.0982C18.5717 20.0294 17.6404 20.7853 16.5022 20.7853Z"
                                    fill="#ffffff" stroke="#ffffff" stroke-width="0.1"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="22" height="22" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        Add to Cart
                    </button>
                    </form>
                    <div class="grid grid-cols-2 gap-2.5">
                        <button data-variant="border"
                                class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-12 md:h-14 bg-brand-light text-brand-dark border border-border-four tracking-widest px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 group hover:text-[#1bba9b] false">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                 class="text-2xl md:text-[26px] ltr:mr-2 rtl:ml-2 transition-all group-hover:text-brand"
                                 height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M352 56h-1c-39.7 0-74.8 21-95 52-20.2-31-55.3-52-95-52h-1c-61.9.6-112 50.9-112 113 0 37 16.2 89.5 47.8 132.7C156 384 256 456 256 456s100-72 160.2-154.3C447.8 258.5 464 206 464 169c0-62.1-50.1-112.4-112-113zm41.6 229.2C351 343.5 286.1 397.3 256 420.8c-30.1-23.5-95-77.4-137.6-135.7C89.1 245.1 76 198 76 169c0-22.6 8.8-43.8 24.6-59.8 15.9-16 37-24.9 59.6-25.1H161.1c14.3 0 28.5 3.7 41.1 10.8 12.2 6.9 22.8 16.7 30.4 28.5 5.2 7.9 14 12.7 23.5 12.7s18.3-4.8 23.5-12.7c7.7-11.8 18.2-21.6 30.4-28.5 12.6-7.1 26.8-10.8 41.1-10.8h.9c22.5.2 43.7 9.1 59.6 25.1 15.9 16 24.6 37.3 24.6 59.8-.2 29-13.3 76.1-42.6 116.2z"></path>
                            </svg>
                            Wishlist
                        </button>
                        <div class="relative group">
                            <button data-variant="border"
                                    class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-12 md:h-14 bg-brand-light text-brand-dark border border-border-four tracking-widest px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 w-full hover:text-[#1bba9b] false">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 512 512"
                                     class="text-2xl md:text-[26px] ltr:mr-2 rtl:ml-2 transition-all group-hover:text-brand"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke-linejoin="round" stroke-width="32"
                                          d="M448 256L272 88v96C103.57 184 64 304.77 64 424c48.61-62.24 91.6-96 208-96v96z"></path>
                                </svg>
                                Share
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="pt-5 xl:pt-6">
                    <li class="relative inline-flex items-center justify-center text-sm md:text-15px text-brand-dark text-opacity-80 mr-2 ml-2 top-1">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                             xmlns="http://www.w3.org/2000/svg" class="ltr:mr-2 rtl:ml-2">
                            <path
                                d="M17.125 1H12.3677C11.4662 1 10.6188 1.351 9.98123 1.98849L1.63974 10.33C1.22725 10.7425 1 11.2908 1 11.8765C1 12.4593 1.22725 13.0075 1.63974 13.42L6.58 18.3603C6.99249 18.7728 7.54075 19 8.12649 19C8.70924 19 9.2575 18.7728 9.66999 18.3603L18.0115 10.0188C18.649 9.38125 19 8.53374 19 7.63226V2.87499C19 1.8415 18.1585 1 17.125 1ZM18.25 7.63226C18.25 8.33352 17.977 8.99277 17.482 9.48777L9.13976 17.83C8.6005 18.3693 7.65476 18.373 7.111 17.83L2.17 12.889C1.89926 12.619 1.74999 12.259 1.74999 11.8735C1.74999 11.491 1.89923 11.131 2.17 10.8603L10.5115 2.51875C11.008 2.02301 11.6665 1.74999 12.3677 1.74999H17.125C17.7452 1.74999 18.25 2.25473 18.25 2.87499V7.63226H18.25Z"
                                fill="#999999" stroke="#999999" stroke-width="0.5"></path>
                            <path
                                d="M14.8749 3.25C13.8414 3.25 12.9999 4.0915 12.9999 5.12499C12.9999 6.15848 13.8414 6.99998 14.8749 6.99998C15.9084 6.99998 16.7499 6.15851 16.7499 5.12499C16.7499 4.0915 15.9084 3.25 14.8749 3.25ZM14.8749 6.24999C14.2546 6.24999 13.7499 5.74525 13.7499 5.12499C13.7499 4.50473 14.2546 3.99999 14.8749 3.99999C15.4952 3.99999 15.9999 4.50473 15.9999 5.12499C15.9999 5.74525 15.4951 6.24999 14.8749 6.24999Z"
                                fill="#999999" stroke="#999999" stroke-width="0.5"></path>
                        </svg>
                        Tags:
                    </li>
                    <li class="inline-block p-[3px]">
                        <div
                            class="font-medium text-13px md:text-sm rounded hover:bg-gray-300 block border border-sink-base px-2 py-1 transition"
                            role="button">Fresh food
                        </div>
                    </li>
                    <li class="inline-block p-[3px]">
                        <div
                            class="font-medium text-13px md:text-sm rounded hover:bg-gray-300 block border border-sink-base px-2 py-1 transition"
                            role="button">Organic
                        </div>
                    </li>
                    <li class="inline-block p-[3px]">
                        <div
                            class="font-medium text-13px md:text-sm rounded hover:bg-gray-300 block border border-sink-base px-2 py-1 transition"
                            role="button">Cilantro
                        </div>
                    </li>
                    <li class="inline-block p-[3px]">
                        <div
                            class="font-medium text-13px md:text-sm rounded hover:bg-gray-300 block border border-sink-base px-2 py-1 transition"
                            role="button">Dry Food
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full xl:px-2 py-11 lg:py-14 xl:py-16 sm:px-0">
            <div class="block border-b border-border-base" role="tablist" aria-orientation="horizontal">
                <button
                    class="relative inline-block transition-all text-15px lg:text-17px leading-5 text-gray-900 focus:outline-none pb-3 lg:pb-5 hover:text-gray-500 mr-8 ml-8 font-semibold after:absolute after:w-full after:h-0.5 after:bottom-0 after:translate-y-[1px] after:left-0 after:right-0 after:bg-[#2ca022]"
                    role="tab" type="button">
                    Product Details
                </button>
                {{--<button
                    class="relative inline-block transition-all text-15px lg:text-17px leading-5 text-gray-500 focus:outline-none pb-3 lg:pb-5 hover:text-gray-800 mr-8 ml-8">
                    Review Rating
                </button>--}}
            </div>
            <div class="mt-6 lg:mt-9">
                {{--                first tab--}}
                <div class="flex " id="tab1">
                    <div
                        class="text-sm sm:text-[15px] text-gray-500 leading-[2em] px-4 space-y-4 lg:space-y-5 xl:space-y-7">
                        {!! $showProduct->description !!}



                    </div>
                    {{--<div
                        class="shrink-0 lg:w-[400px] xl:w-[480px] 2xl:w-[550px] 3xl:w-[680px] lg:pl-10 lg:pr-10 xl:pl-14 xl:pr-14 2xl:pl-20 2xl:pr-20 pt-5 lg:pt-0">
                        <h3 class="text-brand-dark text-base lg:text-[17px] lg:leading-7 font-medium xl:text-lg mb-4 pt-0.5">
                            Nutrition Facts</h3>
                        <div class="border rounded border-border-four">
                            <table class="w-full text-brand-dark text-15px">
                                <thead>
                                <tr class="border-b border-border-four">
                                    <th class="px-4 pt-3 pb-4 text-sm font-medium lg:px-5 xl:px-6 lg:pb-6 ltr:text-left rtl:text-right lg:text-15px xl:text-base">
                                        Amount per serving<span
                                            class="block font-semibold text-lg lg:text-xl xl:text-2xl pt-0.5">Calories</span>
                                    </th>
                                    <th class="border-s border-border-four px-4 lg:px-5 xl:px-6 pt-3 pb-5 ltr:text-right rtl:text-left w-24 lg:w-28 xl:w-36 font-semibold text-2xl lg:text-3xl xl:text-[36px]">
                                        70
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="font-normal border-b border-border-four last:border-b-0">
                                    <td class="px-4 py-3 lg:px-5 xl:px-6">Total Fat 5g</td>
                                    <td class="w-24 px-4 py-3 border-s border-border-four lg:px-5 xl:px-6 ltr:text-right rtl:text-left lg:w-28 xl:w-36">
                                        6%
                                    </td>
                                </tr>
                                <tr class="font-normal border-b border-border-four last:border-b-0">
                                    <td class="px-4 py-3 lg:px-5 xl:px-6">Cholesterol 185mg</td>
                                    <td class="w-24 px-4 py-3 border-s border-border-four lg:px-5 xl:px-6 ltr:text-right rtl:text-left lg:w-28 xl:w-36">
                                        62%
                                    </td>
                                </tr>
                                <tr class="font-normal border-b border-border-four last:border-b-0">
                                    <td class="px-4 py-3 lg:px-5 xl:px-6">Sodium 70mg</td>
                                    <td class="w-24 px-4 py-3 border-s border-border-four lg:px-5 xl:px-6 ltr:text-right rtl:text-left lg:w-28 xl:w-36">
                                        49%
                                    </td>
                                </tr>
                                <tr class="font-normal border-b border-border-four last:border-b-0">
                                    <td class="px-4 py-3 lg:px-5 xl:px-6">Total Carbohydrate 0g</td>
                                    <td class="w-24 px-4 py-3 border-s border-border-four lg:px-5 xl:px-6 ltr:text-right rtl:text-left lg:w-28 xl:w-36">
                                        18%
                                    </td>
                                </tr>
                                <tr class="font-normal border-b border-border-four last:border-b-0">
                                    <td class="px-4 py-3 lg:px-5 xl:px-6">Protein 6g</td>
                                    <td class="w-24 px-4 py-3 border-s border-border-four lg:px-5 xl:px-6 ltr:text-right rtl:text-left lg:w-28 xl:w-36">
                                        35%
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>--}}
                </div>
                {{--second tab--}}
                <div class="lg:flex hidden" id="tab2">
                    <div class="pt-2 px-4">
                        <div class="border-b border-border-base last:border-0 pb-6 mb-6 last:mb-0 ">
                            <div class="flex -mx-0.5 mb-3.5">
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#F3B81F"></path>
                                    </g>
                                </svg>
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#F3B81F"></path>
                                    </g>
                                </svg>
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#F3B81F"></path>
                                    </g>
                                </svg>
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#F3B81F"></path>
                                    </g>
                                </svg>
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#DFE6ED"></path>
                                    </g>
                                </svg>
                            </div>
                            <h3 class="text-brand-dark text-[15px] sm:text-base font-semibold mb-1.5">Amazing Service
                                &amp; Packaging</h3>
                            <p class="text-gray-500 text-sm leading-7 lg:leading-[27px] lg:text-[15px] xl:leading-[2em]">
                                Go sporty this summer with this vintage navy and white striped v-neck t-shirt from
                                the Abercrombie &amp; Fitch. Perfect for pairing with denim and white kicks for a
                                stylish sporty vibe. Will fit a UK 8-10, model shown Go sporty this summer with this
                                vintage navy and white striped v-neck t-shirt.</p>
                            <div class="pt-2 text-md text-gray-800 text-opacity-80">By<span
                                    class="inline-block ml-[3px] mr-[3px] font-semibold">Kavin Dustin</span>
                            </div>
                        </div>
                        <div class="border-b border-border-base last:border-0 pb-6 mb-6 last:mb-0 ">
                            <div class="flex -mx-0.5 mb-3.5">
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#F3B81F"></path>
                                    </g>
                                </svg>
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#F3B81F"></path>
                                    </g>
                                </svg>
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#F3B81F"></path>
                                    </g>
                                </svg>
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#F3B81F"></path>
                                    </g>
                                </svg>
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#DFE6ED"></path>
                                    </g>
                                </svg>
                            </div>
                            <h3 class="text-brand-dark text-[15px] sm:text-base font-semibold mb-1.5">Amazing Service
                                &amp; Packaging</h3>
                            <p class="text-gray-500 text-sm leading-7 lg:leading-[27px] lg:text-[15px] xl:leading-[2em]">
                                Go sporty this summer with this vintage navy and white striped v-neck t-shirt from
                                the Abercrombie &amp; Fitch. Perfect for pairing with denim and white kicks for a
                                stylish sporty vibe. Will fit a UK 8-10, model shown Go sporty this summer with this
                                vintage navy and white striped v-neck t-shirt.</p>
                            <div class="pt-2 text-md text-gray-800 text-opacity-80">By<span
                                    class="inline-block ml-[3px] mr-[3px] font-semibold">Kavin Dustin</span>
                            </div>
                        </div>
                        <div class="border-b border-border-base last:border-0 pb-6 mb-6 last:mb-0 ">
                            <div class="flex -mx-0.5 mb-3.5">
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#F3B81F"></path>
                                    </g>
                                </svg>
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#F3B81F"></path>
                                    </g>
                                </svg>
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#F3B81F"></path>
                                    </g>
                                </svg>
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#F3B81F"></path>
                                    </g>
                                </svg>
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#DFE6ED"></path>
                                    </g>
                                </svg>
                            </div>
                            <h3 class="text-brand-dark text-[15px] sm:text-base font-semibold mb-1.5">Amazing Service
                                &amp; Packaging</h3>
                            <p class="text-gray-500 text-sm leading-7 lg:leading-[27px] lg:text-[15px] xl:leading-[2em]">
                                Go sporty this summer with this vintage navy and white striped v-neck t-shirt from
                                the Abercrombie &amp; Fitch. Perfect for pairing with denim and white kicks for a
                                stylish sporty vibe. Will fit a UK 8-10, model shown Go sporty this summer with this
                                vintage navy and white striped v-neck t-shirt.</p>
                            <div class="pt-2 text-md text-gray-800 text-opacity-80">By<span
                                    class="inline-block ml-[3px] mr-[3px] font-semibold">Kavin Dustin</span>
                            </div>
                        </div>
                        <div class="border-b border-border-base last:border-0 pb-6 mb-6 last:mb-0 ">
                            <div class="flex -mx-0.5 mb-3.5">
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#F3B81F"></path>
                                    </g>
                                </svg>
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#F3B81F"></path>
                                    </g>
                                </svg>
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#F3B81F"></path>
                                    </g>
                                </svg>
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#F3B81F"></path>
                                    </g>
                                </svg>
                                <svg viewBox="0 0 16 16" fill="none" class="w-3.5 lg:w-4 h-3.5 lg:h-4 mx-0.5"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                            fill="#DFE6ED"></path>
                                    </g>
                                </svg>
                            </div>
                            <h3 class="text-brand-dark text-[15px] sm:text-base font-semibold mb-1.5">Amazing Service
                                &amp; Packaging</h3>
                            <p class="text-gray-500 text-sm leading-7 lg:leading-[27px] lg:text-[15px] xl:leading-[2em]">
                                Go sporty this summer with this vintage navy and white striped v-neck t-shirt from
                                the Abercrombie &amp; Fitch. Perfect for pairing with denim and white kicks for a
                                stylish sporty vibe. Will fit a UK 8-10, model shown Go sporty this summer with this
                                vintage navy and white striped v-neck t-shirt.</p>
                            <div class="pt-2 text-md text-gray-800 text-opacity-80">By<span
                                    class="inline-block ml-[3px] mr-[3px] font-semibold">Kavin Dustin</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="lg:w-[500px] xl:w-[540px] 2xl:w-[600px] 3xl:w-[730px] lg:pl-10 lg:pr-10 xl:pl-14 xl:pr-14 3xl:pl-20 3xl:pr-20 shrink-0 pt-10">
                        <h3 class="text-gray-800 text-[15px] sm:text-base font-semibold mb-2">Write your review</h3>
                        <p class="text-gray-500 text-sm leading-7 lg:leading-[27px] lg:text-[15px]">Your email
                            address will not be published. Required fields are marked*</p>
                        <form class="flex flex-col justify-center w-full mx-auto mt-5 lg:mt-7 xl:mt-9"
                              novalidate="">
                            <div class="flex flex-col space-y-5 md:space-y-6 lg:space-y-7">
                                <div class="pb-1.5 flex items-center"><label
                                        class="block text-sm leading-none cursor-pointer shrink-0 text-gray-900 md:text-[15px] ltr:pr-3 rtl:pl-3">Your
                                        Rating *</label>
                                    <div class="aegon-rate -mb-2">
                                        <ul class="rc-rate flex items-center [&amp;>li]:cursor-pointer [&amp;.rc-rate-disabled>li]:cursor-default [&amp;>li]:relative [&amp;>li]:mr-0.5 rtl:[&amp;>li]:ml-0.5 [&amp;>li]:inline-block text-gray-200 [&amp;>li>div>.rc-rate-star-first]:absolute [&amp;>li>div>.rc-rate-star-first]:left-0 rtl:[&amp;>li>div>.rc-rate-star-first]:right-0 [&amp;>li>div>.rc-rate-star-first]:top-0 [&amp;>li>div>.rc-rate-star-first]:w-1/2 [&amp;>li>div>.rc-rate-star-first]:h-full [&amp;>li>div>.rc-rate-star-first]:overflow-hidden [&amp;>.rc-rate-star-half>div>.rc-rate-star-first]:text-yellow-400 [&amp;>.rc-rate-star-full>div]:text-yellow-400 [&amp;>li>div]:transition-all [&amp;>li>div]:duration-300 [&amp;>.rc-rate-star:hover]:scale-110"
                                            tabindex="0" role="radiogroup">
                                            <li class="rc-rate-star rc-rate-star-full">
                                                <div role="radio" aria-checked="true" aria-posinset="1"
                                                     aria-setsize="5" tabindex="0">
                                                    <div class="rc-rate-star-first">
                                                        <div class="[&amp;>svg]:fill-current h-7 w-5">
                                                            <svg viewBox="0 0 16 16" fill="none" class="w-4"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="rc-rate-star-second">
                                                        <div class="[&amp;>svg]:fill-current h-7 w-5">
                                                            <svg viewBox="0 0 16 16" fill="none" class="w-4"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="rc-rate-star rc-rate-star-zero">
                                                <div role="radio" aria-checked="false" aria-posinset="2"
                                                     aria-setsize="5" tabindex="0">
                                                    <div class="rc-rate-star-first">
                                                        <div class="[&amp;>svg]:fill-current h-7 w-5">
                                                            <svg viewBox="0 0 16 16" fill="none" class="w-4"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="rc-rate-star-second">
                                                        <div class="[&amp;>svg]:fill-current h-7 w-5">
                                                            <svg viewBox="0 0 16 16" fill="none" class="w-4"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="rc-rate-star rc-rate-star-zero">
                                                <div role="radio" aria-checked="false" aria-posinset="3"
                                                     aria-setsize="5" tabindex="0">
                                                    <div class="rc-rate-star-first">
                                                        <div class="[&amp;>svg]:fill-current h-7 w-5">
                                                            <svg viewBox="0 0 16 16" fill="none" class="w-4"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="rc-rate-star-second">
                                                        <div class="[&amp;>svg]:fill-current h-7 w-5">
                                                            <svg viewBox="0 0 16 16" fill="none" class="w-4"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="rc-rate-star rc-rate-star-zero">
                                                <div role="radio" aria-checked="false" aria-posinset="4"
                                                     aria-setsize="5" tabindex="0">
                                                    <div class="rc-rate-star-first">
                                                        <div class="[&amp;>svg]:fill-current h-7 w-5">
                                                            <svg viewBox="0 0 16 16" fill="none" class="w-4"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="rc-rate-star-second">
                                                        <div class="[&amp;>svg]:fill-current h-7 w-5">
                                                            <svg viewBox="0 0 16 16" fill="none" class="w-4"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="rc-rate-star rc-rate-star-zero">
                                                <div role="radio" aria-checked="false" aria-posinset="5"
                                                     aria-setsize="5" tabindex="0">
                                                    <div class="rc-rate-star-first">
                                                        <div class="[&amp;>svg]:fill-current h-7 w-5">
                                                            <svg viewBox="0 0 16 16" fill="none" class="w-4"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="rc-rate-star-second">
                                                        <div class="[&amp;>svg]:fill-current h-7 w-5">
                                                            <svg viewBox="0 0 16 16" fill="none" class="w-4"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <g>
                                                                    <path
                                                                        d="M7.55881 0.641809C7.64165 0.473983 7.81256 0.367737 7.99973 0.367737C8.18691 0.367704 8.35785 0.473951 8.44069 0.641777L10.3586 4.52732C10.539 4.89267 10.8875 5.14597 11.2908 5.20453L15.5789 5.82789C15.7642 5.85483 15.918 5.98455 15.9759 6.16256C16.0337 6.34055 15.9855 6.53597 15.8515 6.66663L12.7488 9.69142C12.457 9.97588 12.3239 10.3856 12.3927 10.7872L13.1248 15.0574C13.1564 15.2419 13.0806 15.4283 12.9292 15.5382C12.7778 15.6483 12.577 15.6627 12.4114 15.5756L8.57586 13.5596C8.21521 13.37 7.78435 13.37 7.42364 13.5597L3.58848 15.5756C3.4228 15.6627 3.22205 15.6481 3.07065 15.5382C2.91922 15.4281 2.84342 15.2417 2.87504 15.0573L3.60747 10.7874C3.67638 10.3857 3.54323 9.97588 3.2514 9.69135L0.148505 6.66666C0.0145037 6.536 -0.0337665 6.34058 0.0240798 6.1626C0.0819262 5.98461 0.235794 5.85489 0.421019 5.82792L4.70905 5.20459C5.11229 5.14597 5.46089 4.8927 5.64125 4.52729L7.55881 0.641809Z"
                                                                        fill="currentColor"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="block">
                                    <label for="name"
                                           class="block font-normal text-sm leading-none mb-3 cursor-pointer text-brand-dark text-opacity-70">Name
                                        *</label>
                                    <input id="name" name="name" type="text" placeholder=""
                                           class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                           autocomplete="off" spellcheck="false" aria-invalid="false">
                                </div>
                                <div>
                                    <label for="message"
                                           class="block text-brand-dark opacity-70 font-normal text-13px lg:text-sm leading-none mb-3 cursor-pointer">Message
                                        *</label>
                                    <textarea id="message" name="message"
                                              class="px-4 py-3 flex items-center w-full rounded appearance-none transition duration-300 ease-in-out text-brand-dark text-13px lg:text-sm focus:outline-none focus:ring-0 placeholder-[#B3B3B3] border border-border-two focus:bg-white focus:border-2 focus:border-brand"
                                              autocomplete="off" spellcheck="false" rows="4"
                                              placeholder=""></textarea></div>
                                <div class="flex flex-col space-y-5 gap-2 md:flex-row md:space-y-0">
                                    <div class="w-full md:w-1/2 ">
                                        <label for="name"
                                               class="block font-normal text-sm leading-none mb-3 cursor-pointer text-brand-dark text-opacity-70">Name
                                            *</label><input id="name" name="name" type="text" placeholder=""
                                                            class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                                            autocomplete="off" spellcheck="false"
                                                            aria-invalid="false"></div>
                                    <div
                                        class="w-full md:w-1/2 md:ltr:ml-2.5 md:rtl:mr-2.5 lg:ltr:ml-5 lg:rtl:mr-5 mt-2 md:mt-0">
                                        <label for="email"
                                               class="block font-normal text-sm leading-none mb-3 cursor-pointer text-brand-dark text-opacity-70">Email
                                            *</label><input id="email" name="email" type="email" placeholder=""
                                                            class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                                            autocomplete="off" spellcheck="false"
                                                            aria-invalid="false"></div>
                                </div>
                                <div class="pt-1">
                                    <button data-variant="primary"
                                            class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-12 md:h-14 bg-[#02b290] text-gray-50 tracking-widest px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 w-full h-12 text-sm md:mt-1 lg:text-base sm:w-auto"
                                            type="submit">Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
{{--product details section end--}}

{{--related products section--}}
<div class="max-w-[1920px] overflow-hidden 4xl:overflow-visible px-4 md:px-6 lg:px-8 2xl:pl-10 2xl:pr-10 2xl:pr-0 2xl:pl-0 4xl:pr-10 4xl:pl-10 mx-auto relative mb-8 lg:mb-10 xl:mb-12">
    <div class="flex flex-wrap items-center justify-between mb-5 md:mb-6">
        <div class="-mt-1.5 mb-0"><h2
                class="text-brand-dark text-lg lg:text-xl xl:text-[22px] xl:leading-8 font-bold font-manrope">Related
                products</h2></div>
    </div>
    <div class="w-full xl:-ml-3 xl:mr-3 3xl:-ml-1 3xl:mr-1 3xl:pr-2 3xl:pl-2">
        <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 md:gap-4 2xl:gap-5">


            @php
                $category = $showProduct->categories_id;
                 $products = \App\Models\Product::where('categories_id',$category)->get();
            @endphp
            @foreach($products as $product)

                @php
                    if($product->deal){
                    if($product->deal->start_time <= now() && $product->deal->end_time >= now()){
                    $discount = $product->deal->discount;
                    $deal = 'yes';
                    }else{
                        $discount = $product->variations->first()->discountPercentage;
                        $deal = '';
                    }
                    }else{
                        $discount = $product->variations->first()->discountPercentage;
                        $deal = '';
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
                ></x-product-card>
            @endforeach
        </div>
    </div>
</div>
{{--related product ends here--}}


@endsection
