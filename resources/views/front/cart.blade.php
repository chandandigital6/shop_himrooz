@extends('front.layouts')

@section('content')
    {{--cart here--}}
    <div class=" absolute left-0 top-0 flex justify-end  overflow-hidden w-screen min-h-scree h-full z-50 bg-black/50 "
         id="cart">
        <div class="bg-white h-full lg:w-[500px] md:w-[500px] w-full shadow-md shadow-gray-400" aria-modal="true"
             role="dialog">
            <div class="flex flex-col gap-2 w-full h-full">
                {{--            cart header--}}
                <div class="relative flex items-center justify-between w-full border-b pl-5 pr-5 md:pl-7 md:pr-7 border-border-base">
                    <h3 class="text-brand-dark font-semibold text-brand-dark text-xl">Shopping Cart</h3>
                    <div class="flex items-center">
                        <a href="{{route('cart.clear')}}"
                            class="flex flex-shrink items-center text-15px transition duration-150 ease-in focus:outline-none text-brand-dark opacity-50 hover:opacity-100 mr-1.5 ml-1.5"
                            aria-label="Clear All">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M14.3546 3.46335L13.207 16.5406H4.79372L3.64636 3.46335L2.1925 3.59079L3.36082 16.9052C3.42231 17.5189 3.95478 18 4.57336 18H13.4274C14.0458 18 14.5784 17.5191 14.6409 16.8964L15.8085 3.59079L14.3546 3.46335Z"
                                        fill="black"></path>
                                    <path
                                        d="M11.6758 0H6.32445C5.65381 0 5.10822 0.54559 5.10822 1.21623V3.52705H6.56766V1.45944H11.4325V3.52702H12.8919V1.2162C12.892 0.54559 12.3464 0 11.6758 0Z"
                                        fill="black"></path>
                                    <path
                                        d="M16.7838 2.79724H1.21625C0.813183 2.79724 0.486511 3.12391 0.486511 3.52698C0.486511 3.93005 0.813183 4.25672 1.21625 4.25672H16.7838C17.1869 4.25672 17.5136 3.93005 17.5136 3.52698C17.5136 3.12391 17.1869 2.79724 16.7838 2.79724Z"
                                        fill="black"></path>
                                </g>
                            </svg>
                            <span class="pl-1 lg:pr-1">Clear All</span>
                        </a>
                        <a href="{{route('front.home')}}"
                           class="flex items-center justify-center px-4 py-6 text-2xl transition-opacity md:px-6 lg:py-7 focus:outline-none text-gray-800 hover:opacity-60"
                           aria-label="close">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                 height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M289.94 256l95-95A24 24 0 00351 127l-95 95-95-95a24 24 0 00-34 34l95 95-95 95a24 24 0 1034 34l95-95 95 95a24 24 0 0034-34z"></path>
                            </svg>
                        </a>
                    </div>


                    @if(session()->has('success'))
                        <div id="alert-border-3" class="absolute top-100 left-0 flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50" role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <div class="ms-3 text-sm font-medium">
                                Success! {{session('success')}}
                            </div>
                            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"  data-dismiss-target="#alert-border-3" aria-label="Close">
                                <span class="sr-only">Dismiss</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>
                    @endif
                </div>
                {{--            cart header ends--}}


                {{--            cart body here--}}
                <div class=""
                     style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; top: 0px; right: auto; left: 0px; width: calc(100% + 0px); padding: 0px; overflow-y: scroll;">

                    {{--              if shopping cart has items . remove hidden class--}}
                    <div class="w-full px-5 md:px-7 ">
                        @php
                            $totalCartAmount = 0;
                        @endphp
                        @foreach($cartItems as $item)
                            <div
                                class="group w-full h-auto flex justify-start items-center text-brand-light py-4 md:py-7 border-b border-border-one border-opacity-70 relative border-b-0"
                                title="Coconut Oil">
                                <div
                                    class="relative flex rounded overflow-hidden shrink-0 cursor-pointer w-[90px] md:w-[100px] h-[90px] md:h-[100px]">
                                    <img alt="Fresh Green Leaf Lettuce" loading="eager" width="100" height="100"
                                         decoding="async" data-nimg="1" class="object-cover bg-fill-thumbnail"
                                         src="{{asset('storage/' .$item->variation->image)}}"
                                         style="color: transparent; width: auto;">
                                    <div
                                        class="absolute top-0 flex items-center justify-center w-full h-full transition duration-200 ease-in-out bg-black left-0 right-0 bg-opacity-30 md:bg-opacity-0 md:group-hover:bg-opacity-30"
                                        role="button">
                                        <a href="{{route('cart.delete', ['cart' => $item->id])}}">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                 viewBox="0 0 512 512"
                                                 class="relative text-2xl text-white transition duration-300 ease-in-out transform md:scale-0 md:opacity-0 md:group-hover:scale-100 md:group-hover:opacity-100"
                                                 height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zm52.7 283.3L256 278.6l-52.7 52.7c-6.2 6.2-16.4 6.2-22.6 0-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3l52.7-52.7-52.7-52.7c-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3 6.2-6.2 16.4-6.2 22.6 0l52.7 52.7 52.7-52.7c6.2-6.2 16.4-6.2 22.6 0 6.2 6.2 6.2 16.4 0 22.6L278.6 256l52.7 52.7c6.2 6.2 6.2 16.4 0 22.6-6.2 6.3-16.4 6.3-22.6 0z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex items-start justify-between w-full overflow-hidden">
                                    <div class="pl-3 pr-3 md:pl-4 md:pr-4"><a
                                            class="block font-semibold leading-5 transition-all text-gray-900 text-[13px] sm:text-sm lg:text-[15px] hover:text-gray-400"
                                            href="/products/fresh-green-leaf-lettuce">{{$item->variation->name}}</a>
                                        <div
                                            class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 inline-flex">
                                            <a href="{{route('cart.decrement', ['cart' => $item->id])}}"
                                                class="flex items-center justify-center shrink-0 h-full transition-all ease-in-out duration-300 focus:outline-none focus-visible:outline-none !w-6 !h-6 pr-0 border border-border-three hover:bg-brand text-brand-muted hover:border-brand rounded-full hover:text-brand-light">
                                                <span class="sr-only">button-minus</span>
                                                <svg class="transition-all" width="14" height="14" viewBox="0 0 22 22"
                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="1">
                                                        <path
                                                            d="M3.15109 11.8438L10.174 11.8439L11.8264 11.8438L18.8493 11.8439C19.0772 11.8439 19.284 11.7515 19.4335 11.602C19.5831 11.4524 19.6755 11.2455 19.6754 11.0177C19.6755 10.5608 19.3062 10.1915 18.8493 10.1916L11.8264 10.1915L10.1741 10.1915L3.15109 10.1915C2.69427 10.1915 2.32496 10.5608 2.32496 11.0177C2.32486 11.4746 2.69416 11.8439 3.15109 11.8438Z"
                                                            fill="currentColor" stroke="currentColor"
                                                            stroke-width="0.5"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <span
                                                class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-[15px] w-9">{{$item->quantity}}</span>
                                            <a href="{{route('cart.increment', ['cart' => $item->id])}}"
                                                class="group flex items-center justify-center h-full shrink-0 transition-all ease-in-out duration-300 focus:outline-none focus-visible:outline-none pr-2 !w-6 !h-6 border text-brand-muted border-border-three hover:bg-brand hover:border-brand rounded-full hover:text-brand-light !pr-0"
                                                title=""><span class="sr-only">button-plus</span>
                                                <svg width="14" height="14" viewBox="0 0 22 22" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="1">
                                                        <path
                                                            d="M10.174 11.8439L3.15109 11.8438C2.69416 11.8439 2.32486 11.4746 2.32496 11.0177C2.32496 10.5608 2.69427 10.1915 3.15109 10.1915L10.1741 10.1915L10.174 3.16858C10.1741 2.71165 10.5433 2.34245 11.0002 2.34245C11.4571 2.34234 11.8264 2.71165 11.8263 3.16858L11.8264 10.1915L18.8493 10.1916C19.3062 10.1915 19.6755 10.5608 19.6754 11.0177C19.6755 11.2455 19.5831 11.4524 19.4335 11.602C19.284 11.7515 19.0772 11.8439 18.8493 11.8439L11.8264 11.8438L11.8264 18.8668C11.8264 19.0947 11.734 19.3015 11.5845 19.451C11.4349 19.6006 11.2281 19.6929 11.0002 19.6929C10.5433 19.693 10.174 19.3237 10.1741 18.8668L10.174 11.8439Z"
                                                            fill="currentColor" stroke="currentColor"
                                                            stroke-width="0.5"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    @php

                                        if($item->variation->deal){
                                        if($item->variation->deal->start_time <= now() && $item->variation->deal->end_time >= now()){
                                        $discount = $item->variation->deal->discount;
                                        $deal = 'yes';
                                        }else{
                                            $discount = $item->variation->discountPercentage;
                                            $deal = '';
                                        }
                                        }else{
                                            $discount = $item->variation->discountPercentage;
                                            $deal = '';
                                        }

                                            $discountedPrice =$item->variation->price - (($item->variation->price* $discount)/100);
                                            $totalCartAmount = $totalCartAmount + ($discountedPrice * $item->quantity);

                                    @endphp
                                    <div
                                        class="flex font-semibold text-sm md:text-base text-brand-dark leading-5 shrink-0 min-w-[65px] md:min-w-[80px] justify-end">
                                        ₹ {{$discountedPrice * $item->quantity}}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    {{--                if shopping cart is empty--}}
                    <div class="px-5 {{($cartItems->count() > 0) ? 'hidden' : ''}} md:px-7 pt-8 pb-5 flex justify-center flex-col items-center h-[calc(100vh_-_300px)]">
                        <div class="flex mx-auto w-[220px] md:w-auto"><img alt="Your cart is empty." loading="lazy"
                                                                           width="190" height="190" decoding="async"
                                                                           data-nimg="1" class="aspect-square"
                                                                           src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fempty-cart.png&w=256&q=75"
                                                                           style="color: transparent;"></div>
                        <h3 class="text-brand-dark font-semibold text-brand-dark text-xl mb-1.5 pt-8">Your cart is
                            empty.</h3>
                        <p class="text-gray-500text-sm leading-7 lg:leading-[27px] lg:text-[15px]">Please add product to
                            your cart list</p></div>
                </div>
                {{--                cart body ends here--}}



                {{--            cart footer here--}}
                <div class="px-5 pt-5 pb-5 border-t border-border-base md:px-7 md:pt-6 md:pb-6">
                    <div class="flex pb-5 md:pb-7">
                        <div class="pr-3 pl-3"><h3
                                class="text-gray-900 text-[18px] font-semibold mb-2.5">Subtotal:</h3>
                            <p class="text-gray-400 text-sm leading-7 lg:leading-[27px] lg:text-[15px] leading-6">Final
                                price and discounts will be determined at the time of payment processing.</p></div>
                        <div
                            class="shrink-0 font-semibold text-base md:text-lg text-gray-900 -mt-0.5 min-w-[80px] text-left">
                            ₹ {{$totalCartAmount}}
                        </div>
                    </div>
                    <div class="flex flex-col">

                        <a href="{{route('checkOut')}}"
                            class=" w-full px-5 py-3 md:py-4 flex items-center justify-center bg-heading rounded font-semibold text-sm sm:text-[15px] text-gray-50 bg-[#02B288] focus:outline-none transition duration-300 hover:bg-opacity-90"
                            ><span class="py-0.5">Proceed To Checkout</span>
                        </a>

                    </div>
                </div>
                {{--            cart footer ends here--}}
            </div>
        </div>
    </div>
    {{--cart ends here--}}

@endsection
