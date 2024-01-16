
    <article
        class="flex flex-col group overflow-hidden rounded-md cursor-pointer transition-all duration-300 shadow-lg shadow-gray-200 hover:shadow-gray-500 relative h-full"
        title="{{$productName}}">

        {{--                card top section--}}
        <div class="relative shrink-0 p-4">

            <div class="overflow-hidden mx-auto w-full h-[180px] md:w-full md:h-[200px] transition duration-200 ease-in-out transform group-hover:scale-105 relative">
                <img alt="Organic Spring Mix" fetchpriority="high" decoding="async" data-nimg="fill"
                     class="object-cover bg-fill-thumbnail rounded-md"
                     sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw"
                     src="{{asset('storage/'.$productImage)}}"
                     style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
            </div>

            @if($deal)
            <div
                class=" w-max h-max absolute top-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1">
                <span
                    class="text-[11px] md:text-xs font-bold text-gray-50 uppercase inline-block bg-[#02b290] rounded-full px-2.5 pt-1 pb-[3px] mx-0.5 sm:mx-1">on sale</span>
            </div>
            @endif
            <div
                class="w-full h-full absolute top-0 flex flex-col right-0 pt-2.5 md:pt-3.5 px-3 md:px-4 lg:px-[18px] z-10 -mx-0.5 sm:-mx-1"
                style="justify-content: end">
                <div class="relative w-full">
                    <div class="block product-count-button-position flex justify-end gap-3 ">
                        <a href="{{Auth::guard('admin')->user()? route('cart.add', ['product' => $productId]) : route('login')}}"
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
                        </a>

                        <a href="{{Auth::guard('admin')->user()?route('wishlist.add', ['product' => $productId]) : route('login')}}"
                            class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                            aria-label="Count Button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="19" height="19" opacity="1">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21.35l-1.45-1.32C5.4 14.36 2 11.25 2 7.5 2 4.42 4.42 2 7.5 2c1.74 0 3.41.81 4.5 2.09C15.09 2.81 16.76 2 18.5 2 21.58 2 24 4.42 24 7.5c0 3.75-3.4 6.86-8.55 12.54L12 21.35z"></path>
                            </svg>

                        </a>

                        <a href="{{route('product.show',['productId' =>$productId])}}"
                           class="inline-flex items-center justify-center w-8 h-8 text-4xl rounded-full bg-[#02b290] lg:w-10 lg:h-10 text-gray-50 focus:outline-none focus-visible:outline-none"
                           aria-label="Count Button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" width="19" height="19" opacity="1">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </a>
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
{{--                        <div--}}
{{--                            class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 h-9 md:h-10 bg-white shadow-lg shadow-gray-200 rounded-3xl w-full h-10">--}}
{{--                            <button--}}
{{--                                class="flex items-center justify-center shrink-0 h-full transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none w-10 h-8 rounded-2xl text-heading hover:bg-gray-300">--}}
{{--                                <span class="sr-only">button-minus</span>--}}
{{--                                <svg class="transition-all" width="14" height="14" viewBox="0 0 22 22"--}}
{{--                                     fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <g opacity="1">--}}
{{--                                        <path--}}
{{--                                            d="M3.15109 11.8438L10.174 11.8439L11.8264 11.8438L18.8493 11.8439C19.0772 11.8439 19.284 11.7515 19.4335 11.602C19.5831 11.4524 19.6755 11.2455 19.6754 11.0177C19.6755 10.5608 19.3062 10.1915 18.8493 10.1916L11.8264 10.1915L10.1741 10.1915L3.15109 10.1915C2.69427 10.1915 2.32496 10.5608 2.32496 11.0177C2.32486 11.4746 2.69416 11.8439 3.15109 11.8438Z"--}}
{{--                                            fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>--}}
{{--                                    </g>--}}
{{--                                </svg>--}}
{{--                            </button>--}}
{{--                            <span--}}
{{--                                class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-sm md:text-base w-6">1</span>--}}
{{--                            <button--}}
{{--                                class="group flex items-center justify-center h-full shrink-0 transition-all ease-in-out duration-300 focus:outline-none focus:ring-0 focus-visible:outline-none pr-2 w-10 h-8 rounded-2xl text-heading hover:bg-gray-300 !pr-0"--}}
{{--                                title=""><span class="sr-only">button-plus</span>--}}
{{--                                <svg width="14" height="14" viewBox="0 0 22 22" fill="none"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                                    <g opacity="1">--}}
{{--                                        <path--}}
{{--                                            d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"--}}
{{--                                            fill="currentColor" stroke="currentColor" stroke-width="0.5"></path>--}}
{{--                                    </g>--}}
{{--                                </svg>--}}
{{--                            </button>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        {{--                card bottom section--}}
        <a href="{{route('product.show',['productId' =>$productId])}}">
        <div class="flex flex-col px-3 md:px-4 lg:px-[18px] pb-5 lg:pb-6 lg:pt-1.5 h-full">
            <div class="mb-1 lg:mb-1.5 -mx-1"><span
                    class="inline-block mx-1 text-lg font-semibold sm:text-15px lg:font-bold text-gray-900">₹ {{$productDiscountPrice}}</span>
                <del class="mx-1 text-md text-gray-700 text-opacity-70">₹ {{$productPrice}}</del>
            </div>
            <h2 class="text-gray-800 text-13px sm:text-sm lg:text-[17px]  leading-5 sm:leading-6 mb-1.5">
                {{$productName}}
            </h2>

            @if($productQuantity > 0)
            <div class="mt-auto text-13px sm:text-sm text-green-600">Available</div>
            @else
            <div class="mt-auto text-13px sm:text-sm text-red-600">Out of stock</div>
            @endif


                <div class="{{$expire ? '' : 'hidden'}} mt-auto text-13px sm:text-sm text-red-600">Sale Close in {{$expire}}</div>
        </div>
        </a>
    </article>

