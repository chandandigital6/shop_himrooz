@extends('front.layouts')

@section('content')
{{--profile modal here--}}
<div class="border-t border-b border-border-base">
    <div class="mx-auto max-w-[1920px] px-4 md:px-6 lg:px-8 2xl:px-10">
        <div class="pt-10 2xl:pt-12 pb-12 lg:pb-14 xl:pb-16 2xl:pb-20 xl:max-w-screen-xl 2xl:max-w-[1300px] mx-auto">
            <div class="flex flex-col w-full lg:flex-row gap-4">
                <div class="lg:hidden">
                    <div class="relative w-full font-body">
                        <button
                            class="relative flex items-center w-full p-4 border rounded cursor-pointer text-gray-900 md:p-5 text-left focus:outline-none border-border-base">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" class="w-5 md:w-[22px] h-5 md:h-[22px]">
                                <path
                                    d="M20.9001 10.9996C20.9001 5.52799 16.4723 1.09961 11.0001 1.09961C5.52848 1.09961 1.1001 5.52739 1.1001 10.9996C1.1001 16.4227 5.49087 20.8996 11.0001 20.8996C16.4867 20.8996 20.9001 16.4477 20.9001 10.9996ZM11.0001 2.25977C15.8193 2.25977 19.7399 6.18043 19.7399 10.9996C19.7399 12.7625 19.2156 14.457 18.2432 15.8922C14.3386 11.6921 7.66873 11.6845 3.75698 15.8922C2.78459 14.457 2.26025 12.7625 2.26025 10.9996C2.26025 6.18043 6.18092 2.25977 11.0001 2.25977ZM4.48056 16.8197C7.95227 12.9256 14.0488 12.9266 17.5195 16.8197C14.0361 20.7168 7.96541 20.718 4.48056 16.8197Z"
                                    fill="#8C969F" stroke="#8C969F" stroke-width="0.2"></path>
                                <path
                                    d="M11 11.5801C12.9191 11.5801 14.4805 10.0187 14.4805 8.09961V6.93945C14.4805 5.02036 12.9191 3.45898 11 3.45898C9.08091 3.45898 7.51953 5.02036 7.51953 6.93945V8.09961C7.51953 10.0187 9.08091 11.5801 11 11.5801ZM8.67969 6.93945C8.67969 5.65996 9.7205 4.61914 11 4.61914C12.2795 4.61914 13.3203 5.65996 13.3203 6.93945V8.09961C13.3203 9.3791 12.2795 10.4199 11 10.4199C9.7205 10.4199 8.67969 9.3791 8.67969 8.09961V6.93945Z"
                                    fill="#8C969F" stroke="#8C969F" stroke-width="0.2"></path>
                            </svg>
                            <span
                                class="flex truncate items-center text-sm md:text-[15px] font-medium pl-2.5 relative">Account Settings</span>
                            <span class="absolute inset-y-0 flex items-center pointer-events-none right-4  md:right-5"><svg
                                    stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512"
                                    class="w-3 md:w-3.5 h-3 md:h-3.5 text-brand-dark text-opacity-70" aria-hidden="true"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path
                                        d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg></span>
                        </button>
                    </div>
                </div>
                <div class=" hidden lg:block shrink-0 w-full lg:w-56 xl:w-72 2xl:w-[385px]">
                    <nav class="flex flex-col pb-2 md:pb-6 border border-border-base rounded-md overflow-hidden">
                        <a class="flex items-center cursor-pointer text-sm lg:text-[15px] text-brand-dark py-3.5 px-3.5 xl:px-4 2xl:px-5 mb-1 bg-gray-100 font-medium"
                           href="{{route('user.accountSetting')}}"><span class="w-9 xl:w-10 shrink-0 flex justify-center"><svg
                                    width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="w-5 md:w-[22px] h-5 md:h-[22px]"><path
                                        d="M20.9001 10.9996C20.9001 5.52799 16.4723 1.09961 11.0001 1.09961C5.52848 1.09961 1.1001 5.52739 1.1001 10.9996C1.1001 16.4227 5.49087 20.8996 11.0001 20.8996C16.4867 20.8996 20.9001 16.4477 20.9001 10.9996ZM11.0001 2.25977C15.8193 2.25977 19.7399 6.18043 19.7399 10.9996C19.7399 12.7625 19.2156 14.457 18.2432 15.8922C14.3386 11.6921 7.66873 11.6845 3.75698 15.8922C2.78459 14.457 2.26025 12.7625 2.26025 10.9996C2.26025 6.18043 6.18092 2.25977 11.0001 2.25977ZM4.48056 16.8197C7.95227 12.9256 14.0488 12.9266 17.5195 16.8197C14.0361 20.7168 7.96541 20.718 4.48056 16.8197Z"
                                        fill="#8C969F" stroke="#8C969F" stroke-width="0.2"></path><path
                                        d="M11 11.5801C12.9191 11.5801 14.4805 10.0187 14.4805 8.09961V6.93945C14.4805 5.02036 12.9191 3.45898 11 3.45898C9.08091 3.45898 7.51953 5.02036 7.51953 6.93945V8.09961C7.51953 10.0187 9.08091 11.5801 11 11.5801ZM8.67969 6.93945C8.67969 5.65996 9.7205 4.61914 11 4.61914C12.2795 4.61914 13.3203 5.65996 13.3203 6.93945V8.09961C13.3203 9.3791 12.2795 10.4199 11 10.4199C9.7205 10.4199 8.67969 9.3791 8.67969 8.09961V6.93945Z"
                                        fill="#8C969F" stroke="#8C969F" stroke-width="0.2"></path></svg></span><span
                                class="ltr:pl-1 lg:rtl:pr-1.5">Account Settings</span></a>
                        <a class="flex items-center cursor-pointer text-sm lg:text-[15px] text-brand-dark py-3.5 px-3.5 xl:px-4 2xl:px-5 mb-1 font-normal"
                           href="{{route('user.order')}}"><span class="w-9 xl:w-10 shrink-0 flex justify-center"><svg
                                    width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="w-5 md:w-[22px] h-5 md:h-[22px]"><g
                                        clip-path="url(#clip0)"><path
                                            d="M19.8001 19.0172L18.5403 4.8319C18.5133 4.51697 18.2479 4.27853 17.9375 4.27853H15.3461C15.3101 1.91207 13.3755 0 11.0001 0C8.6246 0 6.69003 1.91207 6.65404 4.27853H4.06263C3.7477 4.27853 3.48676 4.51697 3.45977 4.8319L2.20006 19.0172C2.20006 19.0352 2.19556 19.0532 2.19556 19.0712C2.19556 20.6863 3.67572 22 5.49781 22H16.5023C18.3244 22 19.8046 20.6863 19.8046 19.0712C19.8046 19.0532 19.8046 19.0352 19.8001 19.0172ZM11.0001 1.21472C12.7052 1.21472 14.0954 2.58241 14.1313 4.27853H7.86877C7.90476 2.58241 9.29494 1.21472 11.0001 1.21472ZM16.5023 20.7853H5.49781C4.35507 20.7853 3.42828 20.0294 3.41028 19.0982L4.61601 5.49775H6.64954V7.34233C6.64954 7.67975 6.91948 7.94969 7.25691 7.94969C7.59433 7.94969 7.86427 7.67975 7.86427 7.34233V5.49775H14.1313V7.34233C14.1313 7.67975 14.4013 7.94969 14.7387 7.94969C15.0761 7.94969 15.3461 7.67975 15.3461 7.34233V5.49775H17.3796L18.5898 19.0982C18.5718 20.0294 17.6405 20.7853 16.5023 20.7853Z"
                                            fill="#8C969F" stroke="#8C969F" stroke-width="0.1"></path></g><defs><clipPath
                                            id="clip0"><rect width="22" height="22"
                                                             fill="white"></rect></clipPath></defs></svg></span><span
                                class="ltr:pl-1 lg:rtl:pr-1.5">Orders</span>
                        </a>
                        <a class="flex items-center cursor-pointer text-sm lg:text-[15px] text-brand-dark py-3.5 px-3.5 xl:px-4 2xl:px-5 mb-1 font-normal"
                           href="{{route('user.wishlist')}}"><span class="w-9 xl:w-10 shrink-0 flex justify-center"><svg
                                    width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="w-5 md:w-[22px] h-5 md:h-[22px]"><path
                                        d="M11 19.8C10.7181 19.8 10.4463 19.698 10.2345 19.5126C9.43467 18.8138 8.6635 18.1572 7.98312 17.5779L7.97964 17.5749C5.98487 15.8765 4.26231 14.4098 3.06378 12.9649C1.72401 11.3497 1.09998 9.81825 1.09998 8.14521C1.09998 6.51972 1.65785 5.0201 2.67072 3.9224C3.69567 2.81172 5.10206 2.20001 6.63126 2.20001C7.7742 2.20001 8.82091 2.56103 9.74223 3.27296C10.2072 3.63232 10.6287 4.07212 11 4.58513C11.3714 4.07212 11.7927 3.63232 12.2579 3.27296C13.1792 2.56103 14.2259 2.20001 15.3688 2.20001C16.8979 2.20001 18.3044 2.81172 19.3294 3.9224C20.3423 5.0201 20.9 6.51972 20.9 8.14521C20.9 9.81825 20.2761 11.3497 18.9363 12.9648C17.7378 14.4098 16.0154 15.8763 14.0209 17.5746C13.3393 18.1547 12.5669 18.8125 11.7653 19.5129C11.5536 19.698 11.2817 19.8 11 19.8V19.8ZM6.63126 3.35884C5.42987 3.35884 4.32621 3.83788 3.52331 4.70783C2.70848 5.59091 2.25968 6.81161 2.25968 8.14521C2.25968 9.55231 2.78311 10.8107 3.95671 12.2255C5.09103 13.5931 6.77825 15.0296 8.73178 16.693L8.7354 16.696C9.41836 17.2776 10.1925 17.9368 10.9983 18.6407C11.8089 17.9354 12.5843 17.2751 13.2686 16.6927C15.222 15.0293 16.9091 13.5931 18.0434 12.2255C19.2168 10.8107 19.7403 9.55231 19.7403 8.14521C19.7403 6.81161 19.2915 5.59091 18.4766 4.70783C17.6739 3.83788 16.5701 3.35884 15.3688 3.35884C14.4888 3.35884 13.6807 3.63835 12.9673 4.18954C12.3314 4.68096 11.8885 5.30218 11.6288 5.73686C11.4953 5.96038 11.2603 6.0938 11 6.0938C10.7397 6.0938 10.5046 5.96038 10.3711 5.73686C10.1116 5.30218 9.66867 4.68096 9.03269 4.18954C8.31923 3.63835 7.5112 3.35884 6.63126 3.35884V3.35884Z"
                                        fill="#8C969F" stroke="#8C969F" stroke-width="0.2"></path></svg></span><span
                                class="ltr:pl-1 lg:rtl:pr-1.5">Wishlist</span></a>
{{--                        <a class="flex items-center cursor-pointer text-sm lg:text-[15px] text-brand-dark py-3.5 px-3.5 xl:px-4 2xl:px-5 mb-1 font-normal"--}}
{{--                           href="/my-account/address"><span class="w-9 xl:w-10 shrink-0 flex justify-center"><svg--}}
{{--                                    width="22" height="22" viewBox="0 0 22 22" fill="none"--}}
{{--                                    xmlns="http://www.w3.org/2000/svg" class="w-5 md:w-[22px] h-5 md:h-[22px]"><path--}}
{{--                                        d="M10.9998 0C6.60645 0 3.03223 3.57423 3.03223 7.96752C3.03223 13.4197 10.1624 21.4239 10.466 21.762C10.7511 22.0796 11.249 22.079 11.5336 21.762C11.8372 21.4239 18.9674 13.4197 18.9674 7.96752C18.9673 3.57423 15.3931 0 10.9998 0ZM10.9998 20.1837C8.60012 17.3332 4.46704 11.7095 4.46704 7.96761C4.46704 4.36537 7.39759 1.43481 10.9998 1.43481C14.602 1.43481 17.5325 4.36537 17.5325 7.96757C17.5325 11.7096 13.4001 17.3323 10.9998 20.1837Z"--}}
{{--                                        fill="#8C969F"></path><path--}}
{{--                                        d="M11.0001 3.95898C8.78969 3.95898 6.99146 5.75727 6.99146 7.96767C6.99146 10.1781 8.78974 11.9764 11.0001 11.9764C13.2104 11.9764 15.0087 10.1781 15.0087 7.96767C15.0087 5.75727 13.2104 3.95898 11.0001 3.95898ZM11.0001 10.5415C9.58083 10.5415 8.42627 9.38693 8.42627 7.96767C8.42627 6.54841 9.58088 5.3938 11.0001 5.3938C12.4193 5.3938 13.5739 6.54841 13.5739 7.96767C13.5739 9.38693 12.4193 10.5415 11.0001 10.5415Z"--}}
{{--                                        fill="#8C969F"></path></svg></span><span--}}
{{--                                class="ltr:pl-1 lg:rtl:pr-1.5">Address</span></a>--}}
                        <a href="{{route('logout')}}">
                            <button
                                class="flex items-center text-sm lg:text-15px text-brand-dark py-3.5 px-3.5 xl:px-4 2xl:px-5 mb-1 cursor-pointer focus:outline-none">
                            <span class="w-9 xl:w-10 shrink-0 flex justify-center"><svg width="22" height="22"
                                                                                        viewBox="0 0 22 22" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        class="w-5 md:w-[22px] h-5 md:h-[22px]"><g
                                        clip-path="url(#clip0)"><path
                                            d="M17.1875 22H4.8125C3.67583 22 2.75 21.0751 2.75 19.9375V10.3125C2.75 9.17492 3.67583 8.25 4.8125 8.25H17.1875C18.3242 8.25 19.25 9.17492 19.25 10.3125V19.9375C19.25 21.0751 18.3242 22 17.1875 22ZM4.8125 9.625C4.43392 9.625 4.125 9.933 4.125 10.3125V19.9375C4.125 20.317 4.43392 20.625 4.8125 20.625H17.1875C17.5661 20.625 17.875 20.317 17.875 19.9375V10.3125C17.875 9.933 17.5661 9.625 17.1875 9.625H4.8125Z"
                                            fill="#8C969F"></path><path
                                            d="M15.8125 9.625C15.433 9.625 15.125 9.317 15.125 8.9375V5.5C15.125 3.22575 13.2743 1.375 11 1.375C8.72575 1.375 6.875 3.22575 6.875 5.5V8.9375C6.875 9.317 6.567 9.625 6.1875 9.625C5.808 9.625 5.5 9.317 5.5 8.9375V5.5C5.5 2.46675 7.96675 0 11 0C14.0332 0 16.5 2.46675 16.5 5.5V8.9375C16.5 9.317 16.192 9.625 15.8125 9.625Z"
                                            fill="#8C969F"></path><path
                                            d="M10.9998 15.5837C9.98875 15.5837 9.1665 14.7614 9.1665 13.7503C9.1665 12.7392 9.98875 11.917 10.9998 11.917C12.0109 11.917 12.8332 12.7392 12.8332 13.7503C12.8332 14.7614 12.0109 15.5837 10.9998 15.5837ZM10.9998 13.292C10.7478 13.292 10.5415 13.4973 10.5415 13.7503C10.5415 14.0033 10.7478 14.2087 10.9998 14.2087C11.2519 14.2087 11.4582 14.0033 11.4582 13.7503C11.4582 13.4973 11.2519 13.292 10.9998 13.292Z"
                                            fill="#8C969F"></path><path
                                            d="M11 18.3333C10.6205 18.3333 10.3125 18.0253 10.3125 17.6458V15.125C10.3125 14.7455 10.6205 14.4375 11 14.4375C11.3795 14.4375 11.6875 14.7455 11.6875 15.125V17.6458C11.6875 18.0253 11.3795 18.3333 11 18.3333Z"
                                            fill="#8C969F"></path></g><defs><clipPath id="clip0"><rect width="22"
                                                                                                       height="22"
                                                                                                       fill="white"></rect></clipPath></defs></svg></span><span
                                    class="ltr:pl-1 lg:rtl:pr-1.5">Logout</span></button>
                        </a>
                    </nav>
                </div>



                {{--                      account setting here--}}
                <div class=" {{request()->routeIs('user.accountSetting') ? '' : 'hidden'}} w-full p-4 mt-4 border rounded-md lg:mt-0 border-border-base sm:p-5 lg:py-8 2xl:py-10 lg:px-7 2xl:px-12 overflow-x-auto">
                    <div class="flex flex-col w-full">
                        <h2 class="text-brand-dark text-base lg:text-lg xl:text-[20px] font-semibold xl:leading-8 mb-5 md:mb-6 lg:mb-7 lg:-mt-1">
                            Personal Information
                        </h2>

                        <form class="flex flex-col justify-center w-full mx-auto" novalidate="">
                            <div class="border-b border-border-base pb-7 md:pb-8 lg:pb-10">
                                <div class="flex flex-col space-y-4 sm:space-y-5">
                                    <div class="flex flex-col sm:flex-row -mx-1.5 md:-mx-2.5 space-y-4 sm:space-y-0">
                                        <div class="w-full sm:w-1/2 px-1.5 md:px-2.5">
                                            <label for="firstName"
                                                   class="block font-normal text-sm leading-none mb-3 cursor-pointer text-brand-dark text-opacity-70">
                                                First Name *</label>
                                            <input id="firstName" name="firstName" type="text"
                                                   placeholder="First Name"
                                                   class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-[#02b290] h-11 md:h-12"
                                                   autocomplete="off" spellcheck="false"
                                                   aria-invalid="false">
                                        </div>
                                        <div class="w-full sm:w-1/2 px-1.5 md:px-2.5">
                                            <label for="lastName"
                                                   class="block font-normal text-sm leading-none mb-3 cursor-pointer text-brand-dark text-opacity-70">
                                                Last Name *</label>
                                            <input id="lastName" name="lastName" type="text"
                                                   placeholder="Last Name"
                                                   class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-[#02b290] h-11 md:h-12"
                                                   autocomplete="off" spellcheck="false"
                                                   aria-invalid="false">
                                        </div>
                                    </div>
                                    <div class="flex flex-col sm:flex-row -mx-1.5 md:-mx-2.5 space-y-4 sm:space-y-0">
                                        <div class="w-full sm:w-1/2 px-1.5 md:px-2.5">
                                            <label for="phoneNumber"
                                                   class="block font-normal text-sm leading-none mb-3 cursor-pointer text-brand-dark text-opacity-70">
                                                Phone/Mobile
                                                *</label>
                                            <input id="phoneNumber" name="phoneNumber" type="tel"
                                                   placeholder="Mobile Number"
                                                   class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-[#02b290] h-11 md:h-12"
                                                   autocomplete="off" spellcheck="false"
                                                   aria-invalid="false"></div>
                                    </div>
                                </div>
                            </div>


                            <h2 class="text-brand-dark text-base lg:text-lg xl:text-[20px] font-semibold xl:leading-8 pt-6 mb-5 xl:mb-8 md:pt-7 lg:pt-8">
                                Account Information</h2>
                            <div class="border-b border-border-base pb-7 md:pb-9 lg:pb-10">
                                <div class="flex flex-col space-y-4 sm:space-y-5">
                                    <div class="flex flex-col sm:flex-row -mx-1.5 md:-mx-2.5 space-y-4 sm:space-y-0">
                                        <div class="w-full sm:w-1/2 px-1.5 md:px-2.5">
                                            <label for="email"
                                                   class="block font-normal text-sm leading-none mb-3 cursor-pointer text-brand-dark text-opacity-70">
                                                Email *</label>
                                            <input id="email" name="email" type="email" placeholder="Your Email Address"
                                                   class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-[#02b290] h-11 md:h-12"
                                                   autocomplete="off" spellcheck="false"
                                                   aria-invalid="false"></div>
                                    </div>
                                    <div class="flex flex-col sm:flex-row -mx-1.5 md:-mx-2.5 space-y-4 sm:space-y-0">
                                        <div class="w-full sm:w-1/2 px-1.5 md:px-2.5">
                                            <label for="password"
                                                   class="block mb-3 text-sm font-normal leading-none cursor-pointer text-brand-dark opacity-70">Password</label>
                                            <div class="relative">
                                                <input id="password" name="password" type="password"
                                                       class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded-md placeholder-[#B3B3B3] transition duration-200 ease-in-out text-brand-dark border-border-two focus:border-2 focus:outline-none focus:ring-0 focus:border-[#02b290] h-11 md:h-12"
                                                       autocomplete="off" spellcheck="false">
                                                <label for="password"
                                                       class="absolute -mt-2 cursor-pointer right-4 top-5 text-gray-500 text-opacity-30">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                    </svg>
                                                </label></div>
                                        </div>
                                        <div class="w-full sm:w-1/2 px-1.5 md:px-2.5"><label for="confirmPassword"
                                                                                             class="block mb-3 text-sm font-normal leading-none cursor-pointer text-brand-dark opacity-70">Confirm
                                                Password</label>
                                            <div class="relative"><input id="confirmPassword" name="confirmPassword"
                                                                         type="password"
                                                                         class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded-md placeholder-[#B3B3B3] transition duration-200 ease-in-out text-brand-dark border-border-two focus:border-2 focus:outline-none focus:ring-0 focus:border-[#02b290] h-11 md:h-12"
                                                                         autocomplete="off" spellcheck="false"><label
                                                    for="confirmPassword"
                                                    class="absolute -mt-2 cursor-pointer right-4  top-5 text-gray-500 text-opacity-30">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                    </svg>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="relative flex pb-2 mt-5 justify-end lg:pb-0">
                                <button
                                    class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-11 md:h-[50px] bg-[#02b290] text-gray-50 font-manrope px-5 lg:px-6 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 focus:bg-opacity-70 w-full sm:w-auto"
                                    type="submit">Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                {{--                   account setting ends here--}}

                {{--                order history here--}}
                <div class="{{request()->routeIs('user.order') ? '' : 'hidden'}} w-full p-4 mt-4 border rounded-md lg:mt-0 border-border-base sm:p-5 lg:py-8 2xl:py-10 lg:px-7 2xl:px-12 overflow-x-auto">
                    <div class="items-center mb-5 md:flex md:justify-between sm:mb-10"><h2
                            class="mb-4 text-sm font-semibold md:text-xl text-gray-900 md:mb-0">My order list</h2>
                        <form class="relative">
                            <span class="absolute right-3 top-[50%] transform -translate-y-1/2 order-icon-color">
                                <svg stroke="currentColor" fill="gray" stroke-width="0" viewBox="0 0 16 16"
                                     height="19" width="19" xmlns="http://www.w3.org/2000/svg"><path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path></svg></span>
                            <div class="block"><input id="search" name="search" type="search"
                                                      placeholder="Search Order list"
                                                      class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 bg-gray-100 border-gray-300 focus:shadow focus:text-brand-light focus:border-brand  h-[46px] w-full bg-white border border-[#E3E8EC] rounded-md order-search focus:border-2 focus:outline-none focus:border-brand focus:text-brand-muted"
                                                      autocomplete="off" spellcheck="false" aria-invalid="false"
                                                      value="">
                            </div>
                        </form>
                    </div>

                    <div class="rc-table-content" style="overflow: auto hidden;">
                        <table style="width: 750px; min-width: 100%; table-layout: auto;">
                            <colgroup>
                                <col style="width: 140px;">
                                <col style="width: 140px;">
                                <col style="width: 145px;">
                                <col style="width: 140px;">
                                <col style="width: 130px;">
                                <col style="width: 80px;">
                            </colgroup>
                            <thead class="rc-table-thead">
                            <tr class="bg-gray-100 py-2 text-left">
                                <th class="rc-table-cell py-4 px-1 text-black font-semibold id-cell" scope="col">Order
                                    Number
                                </th>
                                <th class="rc-table-cell py-4 px-1 text-black font-semibold" scope="col">Order Date</th>
                                <th class="rc-table-cell py-4 px-1 text-black font-semibold" scope="col">Status</th>
                                <th class="rc-table-cell py-4 px-1 text-black font-semibold" scope="col">Delivery Time
                                </th>
                                <th class="rc-table-cell py-4 px-1 text-black font-semibold" scope="col">Total Price
                                </th>
                                <td class="rc-table-cell py-4 px-1 text-black font-semibold operations-cell"></td>
                            </tr>
                            </thead>
                            <tbody class="rc-table-tbody">
                            @foreach($orders as $order)
                                <tr data-row-key="1" class="rc-table-row rc-table-row-level-0">
                                    <td class="rc-table-cell py-4 px-1 border-b-[2px] border-gray-200 id-cell">{{$loop->iteration}}</td>
                                    <td class="rc-table-cell py-4 px-1 border-b-[2px] border-gray-200"><span
                                            class="whitespace-nowrap">{{$order->created_at->format('d-m-Y')}}</span>
                                    </td>
                                    <td class="rc-table-cell py-4 px-1 border-b-[2px] border-gray-200">
                                        <span class="delivered"><button class="h-3 w-3 rounded-full bg-green-600"></button> Delivered</span>
                                    </td>
                                    <td class="rc-table-cell py-4 px-1 border-b-[2px] border-gray-200">25 May, 2021</td>
                                    <td class="rc-table-cell py-4 px-1 border-b-[2px] border-gray-200"><span
                                            class="total_price">₹ {{$order->amount}}</span></td>
                                    <td class="rc-table-cell py-4 px-1 border-b-[2px] border-gray-200 operations-cell">
                                        <div class="relative actions_button_group" data-headlessui-state="">
                                            <button
                                                class="text-opacity-90 text-white group  px-3 py-2 rounded-md inline-flex items-center text-base font-medium hover:text-opacity-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75"
                                                type="button" aria-expanded="false" data-headlessui-state=""
                                                id="headlessui-popover-button-:r33:">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                     viewBox="0 0 16 16" height="20" width="20"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     style="color: rgb(140, 150, 159);">
                                                    <path
                                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
                {{--                order history ends here--}}

                {{--                wishlist here--}}
                <div class="{{request()->routeIs('user.wishlist') ? '' : 'hidden'}} w-full p-4 mt-4 border rounded-md lg:mt-0 border-border-base sm:p-5 lg:py-8 2xl:py-10 lg:px-7 2xl:px-12 overflow-x-auto">
                    <h2 class="text-base md:text-lg xl:text-[20px] font-semibold text-brand-dark  lg:pt-0">Favorite
                        List</h2>
                    <div class="flex flex-col pt-8 2xl:pt-12">
                        <div class="">
                            <div class="flex flex-col">
                                @foreach($wishlists as $wishlist)
                                    <div
                                        class="flex flex-row justify-between py-6  border-b md:flex-row  border-border-base 2xl:py-5 wishlist-card last:pb-4 first:-mt-8 lg:first:-mt-4 2xl:first:-mt-7">
                                        <div class="flex ">
                                            <div class="relative mt-1 shrink-0">
                                                <div
                                                    class="flex overflow-hidden max-w-[80px]  transition duration-200 ease-in-out transform group-hover:scale-105">
                                                    <img alt="Ocean Mist Farms Green Leaf Lettuce" loading="lazy" width="80"
                                                         height="80" decoding="async" data-nimg="1"
                                                         class="object-cover bg-fill-thumbnail"
                                                         src="{{asset('storage/' .$wishlist->product->image)}}"
                                                         style="color: transparent; width: auto;"></div>
                                            </div>
                                            <div
                                                class="flex flex-col ltr:ml-2 rtl:mr-2 2xl:ltr:ml-3.5 2xl:rtl:mr-3.5 h-full">
                                                <h2 class="text-gray-900 text-[13px] sm:text-sm lg:text-[15px] leading-5 sm:leading-6 mb-1.5">
                                                    {{$wishlist->product->title}}</h2>
                                                <div class="mb-1 text-13px sm:text-sm lg:mb-2 text-gray-500">{{$wishlist->product->quantity}} each</div>
                                                <div class="-mx-1">
                                                <span
                                                    class="inline-block mx-1 text-sm font-semibold sm:text-[15px] lg:text-base text-gray-900">₹ 1.74</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex cursor-pointer  md:pt-7">
                                            <svg stroke="currentColor" fill="#02b290" stroke-width="0"
                                                 viewBox="0 0 512 512" class="text-brand w-5 h-5 mt-0.5" height="1em"
                                                 width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M352 56h-1c-39.7 0-74.8 21-95 52-20.2-31-55.3-52-95-52h-1c-61.9.6-112 50.9-112 113 0 37 16.2 89.5 47.8 132.7C156 384 256 456 256 456s100-72 160.2-154.3C447.8 258.5 464 206 464 169c0-62.1-50.1-112.4-112-113z"></path>
                                            </svg>
                                            <span
                                                class="text-[#02b290] ml-1 font-semibold text-[15px] -mt-0.5 md:mt-0">Favorited</span>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
                {{--                wishlist ends here--}}

                {{--                address here--}}
                <div class="hidden w-full p-4 mt-4 border rounded-md lg:mt-0 border-border-base sm:p-5 lg:py-8 2xl:py-10 lg:px-7 2xl:px-12 overflow-x-auto">
                    <div class="flex flex-col justify-between h-full -mt-4 text-15px md:mt-0">
                        <div class="space-y-4 md:grid md:grid-cols-2 md:gap-5 auto-rows-auto md:space-y-0">
                            <label class="sr-only" id="headlessui-label-:r2:" role="none">address</label>
                            <div class="border-[#02b290] border-2 relative focus:outline-none rounded-md p-5 block cursor-pointer min-h-[112px] h-full group">
                                <h3 class="mb-2 -mt-1 font-semibold text-brand-dark " >
                                    Home</h3>
                                <div class="leading-6 text-gray-500">Wolfson
                                    Institute of Preventive Medicine, London EC1M 7BA, UK
                                </div>
                                <div class="absolute z-10 flex transition-all right-3 top-3">
                                    <button class="flex items-center justify-center w-6 h-6 text-base rounded-full bg-[#02b290] text-gray-50 text-opacity-80">
                                        <span class="sr-only">Home</span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2"
                                             baseProfile="tiny" viewBox="0 0 24 24" height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 6.879l-3.879-3.879c-.293-.293-.678-.439-1.061-.439-.384 0-.767.146-1.06.439l-10.939 10.939c-.293.293-.558.727-.75 1.188-.192.463-.311.959-.311 1.373v4.5h4.5c.414 0 .908-.119 1.371-.311.463-.192.896-.457 1.189-.75l10.94-10.939c.293-.293.439-.678.439-1.061 0-.384-.146-.767-.439-1.06zm-15.232 8.182l8.293-8.293 1.232 1.232-8.293 8.293-1.232-1.232zm1.732 3.939h-1.5l-1-1v-1.5c0-.077.033-.305.158-.605.01-.02 2.967 2.938 2.967 2.938-.322.134-.548.167-.625.167zm1.439-.768l-1.232-1.232 8.293-8.293 1.232 1.232-8.293 8.293zm9-9l-3.172-3.172 1.293-1.293 3.17 3.172-1.291 1.293z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="border-border-base border-2 relative focus:outline-none rounded-md p-5 block cursor-pointer min-h-[112px] h-full group address__box">
                                <h3 class="mb-2 -mt-1 font-semibold text-brand-dark ">
                                    Office</h3>
                                <div class="leading-6 text-gray-500">80 Windsor Park
                                    Rd, Singapore 574175
                                </div>
                                <div class="absolute z-10 flex transition-all right-3 top-3">
                                    <button class="flex items-center justify-center w-6 h-6 text-base rounded-full bg-[#02b290] text-gray-50 text-opacity-80">
                                        <span class="sr-only">Home</span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2"
                                             baseProfile="tiny" viewBox="0 0 24 24" height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 6.879l-3.879-3.879c-.293-.293-.678-.439-1.061-.439-.384 0-.767.146-1.06.439l-10.939 10.939c-.293.293-.558.727-.75 1.188-.192.463-.311.959-.311 1.373v4.5h4.5c.414 0 .908-.119 1.371-.311.463-.192.896-.457 1.189-.75l10.94-10.939c.293-.293.439-.678.439-1.061 0-.384-.146-.767-.439-1.06zm-15.232 8.182l8.293-8.293 1.232 1.232-8.293 8.293-1.232-1.232zm1.732 3.939h-1.5l-1-1v-1.5c0-.077.033-.305.158-.605.01-.02 2.967 2.938 2.967 2.938-.322.134-.548.167-.625.167zm1.439-.768l-1.232-1.232 8.293-8.293 1.232 1.232-8.293 8.293zm9-9l-3.172-3.172 1.293-1.293 3.17 3.172-1.291 1.293z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <button class="w-full border-2 transition-all border-border-base rounded font-semibold p-5 px-10 cursor-pointer text-[#02b290] flex justify-start hover:border-[#02b290] items-center min-h-[112px] h-full"
                                role="none">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" t="1551322312294"
                                     viewBox="0 0 1024 1024" version="1.1" class="ltr:mr-2 rtl:ml-2" height="18"
                                     width="18" xmlns="http://www.w3.org/2000/svg">
                                    <defs role="none"></defs>
                                    <path d="M474 152m8 0l60 0q8 0 8 8l0 704q0 8-8 8l-60 0q-8 0-8-8l0-704q0-8 8-8Z"
                                          role="none"></path>
                                    <path d="M168 474m8 0l672 0q8 0 8 8l0 60q0 8-8 8l-672 0q-8 0-8-8l0-60q0-8 8-8Z"
                                          role="none"></path>
                                </svg>
                                Add Address
                            </button>
                        </div>

{{--                        user address modal checkout page here--}}

                        <div class="flex mt-5 sm:justify-end md:mt-10 lg:mt-20 save-change-button">
                            <button  class="group text-[13px] md:text-sm lg:text-[15px] leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-12 md:h-14 bg-[#02b290] text-gray-50 tracking-widest px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 w-full sm:w-auto">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </div>
                {{--                address ends here--}}
            </div>
        </div>
    </div>
</div>
{{--profile ends here--}}
@endsection
