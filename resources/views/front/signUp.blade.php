@extends('front.layouts')

@section('content')
{{--sign up modal here--}}
<div class="fixed inset-0 z-50 overflow-x-hidden overflow-y-auto">
    <div class="min-h-screen lg:px-4 text-center flex flex-col justify-center">
        <div class="fixed inset-0 z-40 cursor-pointer bg-black/50 opacity-100"></div>
        <div class="relative z-50 inline-block w-full p-4 overflow-hidden align-middle transition-all transform md:w-auto md:p-6 xl:p-8 scale-100 mx-auto">
            <div class="w-full md:w-[720px] lg:w-[920px] xl:w-[1000px] 2xl:w-[1200px] relative">
                <a href="{{route('front.home')}}" aria-label="Close Button" class="fixed z-10 inline-flex items-center justify-center w-8 h-8 lg:w-9 lg:h-9 transition duration-200 text-gray-50 text-opacity-50 focus:outline-none  hover:text-opacity-100 top-0.5 md:top-2 lg:top-7 xl:top-10 right-0.5 md:right-2 lg:right-7 xl:right-10  bg-[#02b290] rounded-full">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                         class="text-xl lg:text-2xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M289.94 256l95-95A24 24 0 00351 127l-95 95-95-95a24 24 0 00-34 34l95 95-95 95a24 24 0 1034 34l95-95 95 95a24 24 0 0034-34z"></path>
                    </svg>
                </a>
                <div class="flex mx-auto overflow-hidden rounded-lg bg-white">
                    <div class="md:w-1/2 lg:w-[55%] xl:w-[60%] registration hidden md:block relative">
                        <img
                            alt="signin" loading="lazy" decoding="async" data-nimg="fill" sizes="100vw"
                            class="object-cover" src="{{asset('assets/images/homeSlider/2.jpg')}}"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>


                    <div class="w-full md:w-1/2 lg:w-[45%] xl:w-[40%] py-6 sm:py-10 px-4 sm:px-8 md:px-6 lg:px-8 xl:px-12 rounded-md flex flex-col justify-center">
                        <div class="mb-6 text-center">
                            <div>
                                <a class="inline-block focus:outline-none max-w-[131px] w-full" href="{{route('front.home')}}"><img
                                        alt="BoroBazar" loading="eager" width="131" height="30" decoding="async"
                                        data-nimg="1" src="{{asset('assets/images/logo/logo.jpg')}}"
                                        style="color: transparent;"></a></div>
                            <h4 class="text-xl font-semibold text-gray-900 sm:text-2xl sm:pt-3 ">Welcome Back!</h4>
                            <div class="mt-3 mb-1 text-sm text-center sm:text-15px text-body">Already Registered?
                                <a href="{{route('admin.login')}}">
                                    <button type="button"
                                            class="text-sm font-semibold text-[#02b290] sm:text-15px ltr:ml-1 rtl:mr-1 hover:no-underline focus:outline-none">
                                        Sign In Now
                                    </button>
                                </a>
                            </div>
                        </div>
                        <form class="flex flex-col justify-center" >
                            <div class="flex flex-col space-y-3.5">
                                <div class="block text-left">
                                    <label for="email" class="block font-normal text-sm leading-none mb-3 cursor-pointer text-gray-900 text-opacity-70">
                                        Name
                                    </label>
                                    <input id="email" name="email" type="text" placeholder="Enter Your Name"
                                           class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                           autocomplete="off" spellcheck="false"
                                           aria-invalid="false">
                                </div>
                                <div class="block text-left">
                                    <label for="email" class="block font-normal text-sm leading-none mb-3 cursor-pointer text-gray-900 text-opacity-70">
                                        Email Address
                                    </label>
                                    <input id="email" name="email" type="email" placeholder="Enter your email address"
                                           class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                           autocomplete="off" spellcheck="false"
                                           aria-invalid="false">
                                </div>
                                <div class="block text-left">
                                    <label for="password" class="block mb-3 text-sm font-normal leading-none cursor-pointer text-gray-900 opacity-70">
                                        Password
                                    </label>
                                    <div class="relative">
                                        <input id="password" name="password" type="password"
                                               class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded-md placeholder-[#B3B3B3] transition duration-200 ease-in-out text-brand-dark border-border-two focus:border-2 focus:outline-none focus:ring-0 focus:border-brand h-11 md:h-12"
                                               autocomplete="off" spellcheck="false">
                                        <label for="password" class="absolute -mt-2 cursor-pointer right-4 top-5 text-brand-dark text-opacity-30">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end">
                                    <div class="flex ltr:ml-auto rtl:mr-auto mt-[3px]">
                                        <a href="">
                                            <button type="button"
                                                    class="text-sm text-right text-heading ltr:pl-3 lg:rtl:pr-3 hover:no-underline hover:text-[#02b290] focus:outline-none focus:text-brand-dark">
                                                Privacy Policy
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="relative">
                                    <a href="">
                                        <button class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-11 md:h-[50px] bg-[#02b290] text-gray-50 font-manrope px-5 lg:px-6 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 focus:bg-opacity-70 w-full mt-2 tracking-normal h-11 md:h-12 font-15px md:font-15px"
                                                type="button">Register</button>
                                    </a>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--sign up modal end here--}}
@endsection

