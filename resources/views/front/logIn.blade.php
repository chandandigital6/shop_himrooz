@extends('front.layouts')

@section('content')
{{--login modal here--}}
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
                <div class="flex mx-auto rounded-lg bg-white">
                    <div class="md:w-1/2 lg:w-[55%] xl:w-[60%] registration hidden md:block relative">
                        <img
                            alt="signin" loading="lazy" decoding="async" data-nimg="fill" sizes="100vw"
                            src="{{asset('assets/images/login.jpg')}}"
                           class="object-cover"  style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div class="w-full md:w-1/2 lg:w-[45%] xl:w-[40%] py-6 sm:py-10 px-4 sm:px-8 md:px-6 lg:px-8 xl:px-12 rounded-md flex flex-col justify-center">
                        <div class="mb-6 text-center">
                            <div>
                                <a class="inline-block focus:outline-none max-w-[131px] w-full" href="{{route('front.home')}}"><img
                                        alt="BoroBazar" loading="eager" width="131" height="30" decoding="async"
                                        data-nimg="1" src="{{asset('assets/images/logo/logo.jpg')}}"
                                        style="color: transparent;"></a></div>
                            <h4 class="text-xl font-semibold text-gray-900 sm:text-2xl sm:pt-3 ">Welcome Back!</h4>
                            <div class="mt-3 mb-1 text-sm text-center sm:text-15px text-body">Don’t have an account?
                                <a href="{{route('signup')}}">
                                    <button type="button"
                                            class="text-sm font-semibold text-[#02b290] sm:text-15px ltr:ml-1 rtl:mr-1 hover:no-underline focus:outline-none">
                                        Create Account
                                    </button>
                                </a>
                            </div>
                        </div>
                        <form class="flex flex-col justify-center" action="{{route('authenticate')}}" method="post">
                           @csrf
                            <div class="flex flex-col space-y-3.5">
                                <div class="block text-left">
                                    <label for="email"  class="block font-normal text-sm leading-none mb-3 cursor-pointer text-gray-900 text-opacity-70">
                                        Email Address
                                    </label>
                                    <input id="email" name="email" type="email" placeholder="Enter your email address"
                                           class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                           autocomplete="off" spellcheck="false"
                                           aria-invalid="false">
                                </div>
                                @error('email')
                                <span>{{$message}}</span>
                                @enderror
                                @if(session()->has('error'))
                                    <span class="text-red-500 text-left">{{session('error')}}</span>
                                @endif
                                @if(session()->has('success'))
                                    <span class="text-green-500 text-left">{{session('success')}}</span>
                                @endif
                                <div class="block text-left">
                                    <label for="password" class="block mb-3 text-sm font-normal leading-none cursor-pointer text-gray-900 opacity-70">
                                        Password
                                    </label>
                                    <div class="relative">
                                        <input id="password" name="password" type="password"
                                               class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded-md placeholder-[#B3B3B3] transition duration-200 ease-in-out text-brand-dark border-border-two focus:border-2 focus:outline-none focus:ring-0 focus:border-brand h-11 md:h-12"
                                               autocomplete="off" spellcheck="false">
                                        <label for="password" class="absolute -mt-2 cursor-pointer right-4 top-5 text-brand-dark text-opacity-30">
                                            <div class="h-max w-max"  onclick="
                                                  var   passwordField = document.getElementById('password');
                                                    if (passwordField.type === 'password') {
                                                        passwordField.type = 'text';
                                                    } else {
                                                        passwordField.type = 'password';
                                                    }


                                                 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                </svg>
                                            </div>
                                        </label>
                                    </div>
                                    @error('password')
                                    <span>{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="flex items-center justify-end">
                                    <div class="flex ltr:ml-auto rtl:mr-auto mt-[3px]">
                                        <a href="{{route('forgetPasswordPage')}}">
                                            <button type="button"
                                                    class="text-sm text-right text-heading ltr:pl-3 lg:rtl:pr-3 hover:no-underline hover:text-[#02b290] focus:outline-none focus:text-brand-dark">
                                                Forgot password?
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="relative">
                                    <a href="">
                                        <button class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-11 md:h-[50px] bg-[#02b290] text-gray-50 font-manrope px-5 lg:px-6 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 focus:bg-opacity-70 w-full mt-2 tracking-normal h-11 md:h-12 font-15px md:font-15px"
                                                type="button    ">Sign In
                                        </button>
                                    </a>
                                </div>

                            </div>
                        </form>



                        <div class="relative flex flex-col items-center justify-center text-sm">
                            <span class="mt-6 text-sm text-gray-900 opacity-70">or continue with</span>
                        </div>
                        <div class="flex justify-center mt-5 space-x-2.5">
                            <button class="flex items-center justify-center w-10 h-10 transition-all border rounded-full cursor-pointer group border-border-one hover:border-[#02b290] focus:border-[#02b290] focus:outline-none">
                                <svg stroke="#02b290" fill="#02b290" stroke-width="0"
                                     viewBox="0 0 512 512"
                                     class="w-4 h-4 text-opacity-50 transition-all text-brand-dark group-hover:text-brand "
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
                                </svg>
                            </button>
                            <button
                                class="flex items-center justify-center w-10 h-10 transition-all border rounded-full cursor-pointer group border-border-one hover:border-[#02b290] focus:border-[#02b290] focus:outline-none">
                                <svg stroke="#02b290" fill="#02b290" stroke-width="0"
                                     viewBox="0 0 512 512"
                                     class="w-4 h-4 text-opacity-50 transition-all text-brand-dark group-hover:text-brand"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                </svg>
                            </button>
                            <button
                                class="flex items-center justify-center w-10 h-10 transition-all border rounded-full cursor-pointer group border-border-one hover:border-[#02b290] focus:border-[#02b290] focus:outline-none">
                                <svg stroke="#02b290" fill="#02b290" stroke-width="0"
                                     viewBox="0 0 448 512"
                                     class="w-4 h-4 text-opacity-50 transition-all text-brand-dark group-hover:text-brand"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--login modal ends here--}}

@endsection
