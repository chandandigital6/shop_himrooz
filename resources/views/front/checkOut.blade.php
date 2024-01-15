@extends('front.layouts')

@section('content')
{{--checckout section here--}}
<div class="py-10 border-t 2xl:py-12 border-border-base checkout mx-auto max-w-[1920px] px-4 md:px-6 lg:px-8 2xl:px-10">
    <div class="flex flex-col mx-auto xl:max-w-screen-xl">
        <div class="flex flex-col flex-wrap grid-cols-1 gap-x-7 xl:gap-x-8 lg:grid lg:grid-cols-12">

            @php
                if($totalCartAmount < 1000){
                    $shippingCharge = 50;
                }else{
                    $shippingCharge = 0;
                }
            @endphp


{{--            left section starts here--}}
            <div class="w-full col-start-1 col-end-9">
                <div class="border rounded-md border-border-base text-gray-500">


                    <div class=" border-b border-border-base">
                        <div id="index_0" class="flex items-center p-4 pb-6 cursor-pointer sm:p-8 ">
                            <span
                                class="flex items-center justify-center font-semibold border-2 border-[#02b290] rounded-full h-9 w-9 text-[#02b290] mr-3 ml-3"></span>
                            <h3 class="text-gray-900 text-[15px] sm:text-base font-semibold">Delivery Address</h3>
                        </div>
                        <div data-aria-label="index_0"
                             class="pb-6 pl-5 pr-5 sm:pl-9 sm:pr-9 lg:pl-20 lg:pr-20 sm:pr-9 sm:pl-9 pr-5 pl-5 ">
                            <div class="mb-6">
                                <div class="flex flex-col justify-between h-full -mt-4 text-15px md:mt-0">
                                    <form action="{{route('order.placeOrder')}}" method="post">
                                        @csrf
                                            <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2 mb-6">
                                               <div class=" w-full flex flex-col">
                                                   <label for="first_name" class="block font-normal text-sm leading-none mb-3 cursor-pointer text-gray-900 text-opacity-70">Address
                                                       First Name</label>
                                                   <input  name="first_name" type="text"
                                                          placeholder="First Name"
                                                          class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                                          autocomplete="off"
                                                          spellcheck="false"
                                                          aria-invalid="false">
                                               </div>
                                                <div class=" w-full flex flex-col">
                                                    <label for="last_name" class="block font-normal text-sm leading-none mb-3 cursor-pointer text-gray-900 text-opacity-70">Address
                                                        Last Name</label>
                                                    <input name="last_name" type="text"
                                                           placeholder="First Name"
                                                           class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                                           autocomplete="off"
                                                           spellcheck="false"
                                                           aria-invalid="false">
                                                </div>
                                            </div>

                                             <div class="w-full grid  grid-cols-1 gap-2 mb-6">
                                            <div class=" w-full flex flex-col">
                                                <label for="address" class="block font-normal text-sm leading-none mb-3 cursor-pointer text-gray-900 text-opacity-70"> Address</label>
                                                <input  name="address" type="text"
                                                        placeholder="Address"
                                                        class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                                        autocomplete="off"
                                                        spellcheck="false"
                                                        aria-invalid="false">
                                            </div>
                                        </div>

                                             <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2 mb-6">
                                            <div class=" w-full flex flex-col">
                                                <label for="house_number" class="block font-normal text-sm leading-none mb-3 cursor-pointer text-gray-900 text-opacity-70">
                                                        Flat, House No, Company</label>
                                                <input  name="house_number" type="text"
                                                        placeholder="House Number"
                                                        class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                                        autocomplete="off"
                                                        spellcheck="false"
                                                        aria-invalid="false">
                                            </div>
                                            <div class=" w-full flex flex-col">
                                                <label for="landmark" class="block font-normal text-sm leading-none mb-3 cursor-pointer text-gray-900 text-opacity-70">Address
                                                    Landmark</label>
                                                <input name="landmark" type="text"
                                                       placeholder="E.g. Near hospital"
                                                       class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                                       autocomplete="off"
                                                       spellcheck="false"
                                                       aria-invalid="false">
                                            </div>
                                        </div>

                                            <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2 mb-6">
                                            <div class=" w-full flex flex-col">
                                                <label for="email" class="block font-normal text-sm leading-none mb-3 cursor-pointer text-gray-900 text-opacity-70">
                                                    Email Address</label>
                                                <input  name="email" type="email"
                                                        placeholder="Email Address"
                                                        class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                                        autocomplete="off"
                                                        spellcheck="false"
                                                        aria-invalid="false">
                                            </div>
                                            <div class=" w-full flex flex-col">
                                                <label for="phone" class="block font-normal text-sm leading-none mb-3 cursor-pointer text-gray-900 text-opacity-70">Address
                                                    Phone</label>
                                                <input name="phone" type="phone"
                                                       placeholder="Phone Number"
                                                       class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                                       autocomplete="off"
                                                       spellcheck="false"
                                                       aria-invalid="false">
                                            </div>
                                        </div>

                                        <div class="w-full grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-2 mb-6">
                                            <div class=" w-full flex flex-col">
                                                <label for="country" class="block font-normal text-sm leading-none mb-3 cursor-pointer text-gray-900 text-opacity-70">
                                                    Country</label>
                                                <input  name="country" type="text"
                                                        placeholder="Country"
                                                        class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                                        autocomplete="off"
                                                        spellcheck="false"
                                                        aria-invalid="false">
                                            </div>
                                            <div class=" w-full flex flex-col">
                                                <label for="state" class="block font-normal text-sm leading-none mb-3 cursor-pointer text-gray-900 text-opacity-70">Address
                                                    State</label>
                                                <input name="state" type="text"
                                                       placeholder="state"
                                                       class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                                       autocomplete="off"
                                                       spellcheck="false"
                                                       aria-invalid="false">
                                            </div>
                                            <div class=" w-full flex flex-col">
                                                <label for="city" class="block font-normal text-sm leading-none mb-3 cursor-pointer text-gray-900 text-opacity-70">Address
                                                    City</label>
                                                <input name="city" type="text"
                                                       placeholder="city"
                                                       class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                                       autocomplete="off"
                                                       spellcheck="false"
                                                       aria-invalid="false">
                                            </div>
                                            <div class=" w-full flex flex-col">
                                                <label for="city" class="block font-normal text-sm leading-none mb-3 cursor-pointer text-gray-900 text-opacity-70">Address
                                                    Pin Code</label>
                                                <input name="pin" type="number"
                                                       placeholder="Pin Code"
                                                       class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                                       autocomplete="off"
                                                       spellcheck="false"
                                                       aria-invalid="false">
                                            </div>
                                        </div>

                                        <input type="hidden" name="amount" value="{{$totalCartAmount + $shippingCharge}}">
                                        <div class="flex justify-end w-full">
                                            <input type="submit" class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-12 md:h-14 bg-[#02b290] text-gray-50 tracking-widest px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 h-11 md:h-12 mt-1.5"
                                             value="Pay: ₹ {{$totalCartAmount + $shippingCharge}}"/>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            {{--            left section starts here--}}


            {{--            right section starts here--}}
            <div class="w-full col-start-9 col-end-13 mt-7 lg:mt-0">
                <div class="px-4 pt-4 border rounded-md border-border-base text-brand-light xl:py-6 xl:px-7">


                    <div class="flex justify-between pb-2 text-sm font-semibold rounded-md text-heading">
                        <span class="font-medium text-[15px] text-gray-900">Product</span>
{{--                        <span class="font-medium ltr:ml-auto rtl:mr-auto shrink-0 text-[15px] text-gray-900">Subtotal</span>--}}
                    </div>



{{--                    foreachloop for products--}}
                    @foreach($cartItems as $item)
                        <div class="flex items-center  py-4 border-b border-border-base ">
                            <div class="flex w-16 h-16 border rounded-md border-border-base shrink-0">
                                <img alt="item image"
                                     loading="lazy"
                                     width="64"
                                     height="64"
                                     decoding="async"
                                     data-nimg="1"
                                     class="rounded-md ltr:mr-5 rtl:ml-5"
                                     src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-1.png&w=64&q=75"
                                     style="color: transparent; width: auto;">
                            </div>
                            <h6 class="font-semibold text-[15px] text-gray-900 pl-3 pr-3">{{$item->variation->name}}</h6>
{{--                            <div--}}
{{--                                class="flex font-semibold ml-auto mr-auto text-[15px] text-brand-dark pl-2 pr-2 shrink-0">--}}
{{--                                ₹ 7.92--}}
{{--                            </div>--}}
                        </div>
                    @endforeach
                    {{--                    foreachloop for products--}}



                    <div
                        class="flex items-center justify-between w-full py-4 text-sm font-medium border-b lg:py-5 border-border-base text-[15px] text-gray-900 last:border-b-0 last:text-base last:pb-0">
                        Subtotal<span class="font-semibold shrink-0 text-[15px] text-gray-900">₹ {{$totalCartAmount}}</span>
                    </div>
                    <div
                        class="flex items-center justify-between w-full py-4 text-sm font-medium border-b lg:py-5 border-border-base text-[15px] text-gray-900 last:border-b-0 last:text-base last:pb-0">
                        Shipping<span
                            class="font-semibold shrink-0 text-[15px] text-gray-900">₹ {{$shippingCharge}}</span>
                    </div>

                        <span    disabled class="group text-[13px] md:text-sm lg:text-[15px] leading-4 inline-flex items-center  transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-11 md:h-[50px] bg-[#02b290] text-gray-50 font-manrope px-5 lg:px-6 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 focus:bg-opacity-70 w-full mt-8 mb-5 bg-brand text-brand-light rounded font-semibold px-4 py-3 transition-all false">
                            Total: ₹ {{$totalCartAmount + $shippingCharge}}
                        </span>
                </div>
                <p class="text-brand-muted text-sm leading-7 lg:leading-[27px] lg:text-15px mt-8">By placing your order,
                    you agree to be bound by the BoroBazar <a class="font-medium underline text-[#02b290]"
                                                              href="/terms">Terms
                        of Service </a>and <a class="font-medium underline text-[#02b290]" href="/privacy">Privacy</a>.
                    Your
                    credit/debit card data will not saved.</p>
                <p class="text-brand-muted text-sm leading-7 lg:leading-[27px] lg:text-15px mt-4">A bag fee may be added
                    to your final total if required by law or the retailer. The fee will be visible on your receipt
                    after delivery.</p>
            </div>
            {{--            right section starts here--}}

        </div>
    </div>
</div>
{{--checkoutout section ends--}}
@endsection
