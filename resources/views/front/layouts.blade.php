<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
            defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
          crossorigin="anonymous">
</head>
<body class="relative lg:pb-0 pb-14">



{{--main header starts here--}}
<header id="siteHeader" class=" w-full h-16 lg:h-20 z-50 sticky -top-0.5 ">
    <div
        class="z-20 w-full h-max transition duration-200 ease-in-out border-b bg-white innerSticky body-font text-brand-muted border-border-base">
        <div class=" flex items-center justify-between w-full h-max mx-auto max-w-[1920px] px-4 md:px-6 lg:px-8 2xl:px-10 ">
            <div class="flex gap-2">
                <button aria-label="Menu" id="menuButton"
                        class="flex-col items-center justify-center hidden outline-none menuBtn mr-5:ml-5 lg:flex shrink-0 focus:outline-none"
                        onclick="
                                const sideBar = document.getElementById('sideBar');
                                //set width to full screen
                                sideBar.style.width = '100%';
                                sideBar.style.transition = 'width 0.3s ease-in';

                                ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="14" viewBox="0 0 25.567 18">
                        <g transform="translate(-776 -462)">
                            <rect data-name="Rectangle 941" width="12.749" height="2.499" rx="1.25"
                                  transform="translate(776 462)" fill="currentColor"></rect>
                            <rect data-name="Rectangle 942" width="25.567" height="2.499" rx="1.25"
                                  transform="translate(776 469.75)" fill="currentColor"></rect>
                            <rect data-name="Rectangle 943" width="17.972" height="2.499" rx="1.25"
                                  transform="translate(776 477.501)" fill="currentColor"></rect>
                        </g>
                    </svg>
                </button>
                <div role="button" class="inline-flex">
                    <a class="inline-block focus:outline-none max-w-[131px] w-full" href="/">
                        <img class="w-100% h-24 " alt="BoroBazar"
                             loading="himrooz"
                             decoding="async"
                             data-nimg="1"
                             src="{{asset('/assets/images/logo/logo.jpg')}}"
                             style="color: transparent;"></a>
                </div>
            </div>
            <div class="w-full transition-all duration-200 ease-in-out hidden lg:flex lg:max-w-[385px] xl:max-w-[530px] 2xl:max-w-[700px] ml-auto mr-auto">
                <div
                    class="overlay cursor-pointer invisible w-full h-full opacity-0 flex top-0 left-0:right-0 transition-all duration-300 fixed"></div>
                <div class="relative z-30 flex flex-col justify-center w-full shrink-0">
                    <div class="flex flex-col w-full mx-auto">
                        <form class="relative flex w-full rounded-md" novalidate="" role="search">
                            <label for="top-bar-search" class="flex flex-1 items-center py-0.5">
                                <input id="top-bar-search"
                                       class="text-heading outline-none w-full h-[52px] pl-2 pr-5 md:pl-6 md:pr-6 pr-14 pl-14 md:pr-16 md:pl-16 bg-gray-100 text-brand-dark text-sm lg:text-15px rounded-md transition-all duration-200 focus:border-brand focus:ring-0 placeholder:text-brand-dark/50 bg-fill-one"
                                       placeholder="What are you looking..."
                                       aria-label="top-bar-search"
                                       autocomplete="off"
                                       name="search"
                                       value=""></label><span
                                class="absolute top-0 flex items-center justify-center h-full w-14 md:w-16 right-0 shrink-0 focus:outline-none"><svg
                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    class="w-5 h-5 text-brand-dark text-opacity-40"><path
                                        d="M19.0144 17.9256L13.759 12.6703C14.777 11.4129 15.3899 9.81507 15.3899 8.07486C15.3899 4.04156 12.1081 0.759766 8.07483 0.759766C4.04152 0.759766 0.759766 4.04152 0.759766 8.07483C0.759766 12.1081 4.04156 15.3899 8.07486 15.3899C9.81507 15.3899 11.4129 14.777 12.6703 13.759L17.9256 19.0144C18.0757 19.1645 18.2728 19.24 18.47 19.24C18.6671 19.24 18.8642 19.1645 19.0144 19.0144C19.3155 18.7133 19.3155 18.2266 19.0144 17.9256ZM8.07486 13.8499C4.89009 13.8499 2.2998 11.2596 2.2998 8.07483C2.2998 4.89006 4.89009 2.29976 8.07486 2.29976C11.2596 2.29976 13.8499 4.89006 13.8499 8.07483C13.8499 11.2596 11.2596 13.8499 8.07486 13.8499Z"
                                        fill="currentColor"></path></svg></span></form>
                    </div>
                </div>
            </div>
            <div class="flex shrink-0 py-4">
                <button class="flex items-center justify-center shrink-0 h-auto focus:outline-none transform flex xl:mx-3.5 mx-2.5"
                    aria-label="cart-button"
                    onclick="
                                const cart = document.getElementById('cart');
                                //set width to full screen
                                cart.style.width = '100%';
                                cart.style.transition = 'width 0.3s ease-in';

                                "
                >
                    <div class="relative flex items-center ">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                             xmlns="http://www.w3.org/2000/svg" class="text-gray-700 text-opacity-40">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M19.7999 19.0172L18.5402 4.8319C18.5132 4.51697 18.2478 4.27853 17.9374 4.27853H15.3459C15.31 1.91207 13.3754 0 10.9999 0C8.62447 0 6.68991 1.91207 6.65392 4.27853H4.06251C3.74758 4.27853 3.48664 4.51697 3.45965 4.8319L2.19993 19.0172C2.19993 19.0352 2.19543 19.0532 2.19543 19.0712C2.19543 20.6863 3.6756 22 5.49768 22H16.5022C18.3243 22 19.8044 20.6863 19.8044 19.0712C19.8044 19.0532 19.8044 19.0352 19.7999 19.0172ZM10.9999 1.21472C12.705 1.21472 14.0952 2.58241 14.1312 4.27853H7.86864C7.90464 2.58241 9.29482 1.21472 10.9999 1.21472ZM16.5022 20.7853H5.49768C4.35494 20.7853 3.42815 20.0294 3.41016 19.0982L4.61588 5.49775H6.64942V7.34233C6.64942 7.67975 6.91936 7.94969 7.25678 7.94969C7.59421 7.94969 7.86415 7.67975 7.86415 7.34233V5.49775H14.1312V7.34233C14.1312 7.67975 14.4012 7.94969 14.7386 7.94969C15.076 7.94969 15.3459 7.67975 15.3459 7.34233V5.49775H17.3795L18.5897 19.0982C18.5717 20.0294 17.6404 20.7853 16.5022 20.7853Z"
                                    fill="currentColor" stroke="currentColor" stroke-width="0.1"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="22" height="22" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <span
                            class="h-[20px] w-[20px]  rounded-full bg-[#02b290] flex items-center justify-center bg-brand text-gray-50 absolute -top-2 left-2  text-[12px] font-normal"> 11 </span>
                    </div>
                    <span class="text-md font-normal lg:text-15px text-brand-dark ml-2 mr-2">Cart</span>
                </button>
                <div class="items-center hidden lg:flex shrink-0 xl:ml-3.5 mr-2.5 ml-2.5">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"
                         class="text-gray-700 text-opacity-40">
                        <path
                            d="M20.9001 11C20.9001 5.52836 16.4723 1.09998 11.0001 1.09998C5.52848 1.09998 1.1001 5.52775 1.1001 11C1.1001 16.4231 5.49087 20.9 11.0001 20.9C16.4867 20.9 20.9001 16.448 20.9001 11ZM11.0001 2.26013C15.8193 2.26013 19.7399 6.1808 19.7399 11C19.7399 12.7629 19.2156 14.4573 18.2432 15.8926C14.3386 11.6924 7.66873 11.6849 3.75698 15.8926C2.78459 14.4573 2.26025 12.7629 2.26025 11C2.26025 6.1808 6.18092 2.26013 11.0001 2.26013ZM4.48056 16.8201C7.95227 12.926 14.0488 12.9269 17.5195 16.8201C14.0361 20.7172 7.96541 20.7184 4.48056 16.8201Z"
                            fill="currentColor" stroke="currentColor" stroke-width="0.2"></path>
                        <path
                            d="M11 11.5801C12.9191 11.5801 14.4805 10.0187 14.4805 8.09961V6.93945C14.4805 5.02036 12.9191 3.45898 11 3.45898C9.08091 3.45898 7.51953 5.02036 7.51953 6.93945V8.09961C7.51953 10.0187 9.08091 11.5801 11 11.5801ZM8.67969 6.93945C8.67969 5.65996 9.7205 4.61914 11 4.61914C12.2795 4.61914 13.3203 5.65996 13.3203 6.93945V8.09961C13.3203 9.3791 12.2795 10.4199 11 10.4199C9.7205 10.4199 8.67969 9.3791 8.67969 8.09961V6.93945Z"
                            fill="currentColor" stroke="currentColor" stroke-width="0.2"></path>
                    </svg>
                    <a href="{{route('admin.login')}}">
                        <button
                            class="text-md font-normal lg:text-20px text-gray-800 focus:outline-none ml-2 mr-2"
                            aria-label="Authentication">Sign In
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
{{--main header ends here--}}




{{--sidebar starts here--}}
<div class=" fixed top-0 left-0 w-0 overflow-hidden max-h-screen min-h-screen z-50 bg-black/25 " id="sideBar">
    <div class="bg-white h-screen lg:w-[400px] md:w-[400px] w-full shadow-md shadow-gray-400" aria-modal="true"
         role="dialog">
        <div class="flex flex-col justify-between w-full h-screen">
            <div class="w-full h-max border-b border-border-base flex justify-between items-center relative pl-5 pr-5 pl-7 md:pr-7 shrink-0 py-0.5">
                <div role="button" class="inline-flex">
                    <a class="inline-block focus:outline-none max-w-[131px] w-full" href="/">
                        <img class="h-24 width-100%" alt="aura of organics"
                             loading="eager"
                             decoding="async"
                             data-nimg="1"
                             src="{{asset('/assets/images/logo/logo.jpg')}}"
                             style="color: transparent;"></a>
                </div>
                <button
                    class="flex items-center justify-center px-4 py-5 text-2xl transition-opacity md:px-5 lg:py-8 focus:outline-none hover:opacity-60"
                    aria-label="close"
                    onclick="
                                        const sideBar = document.getElementById('sideBar');
                                      //set width to full screen
                                        sideBar.style.width = '0%';
                                        //add transition
                                        sideBar.style.transition = 'width 0.5s ease-in-out';
                                    "
                >
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
                     style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; top: 0px; right: auto; left: 0px; width: calc(100% + 0px); padding: 0px; overflow-y: scroll;">
                    <div class="flex flex-col px-0 py-6 text-brand-dark h-[calc(100vh_-_150px)]">
                        <ul class="mobile-menu">
                            <li class="transition-colors duration-200 ">
                                <div class="relative flex items-center justify-between hover:bg-gray-200">
                                    <a class="relative w-full py-4 transition duration-300 ease-in-out menu-item pl-5 pr-5 md:pl-7 md:pr-7 pr-4 pl-4 text-brand-dark"
                                       href="{{route('front.home')}}"><span class="block w-full">Home</span></a>
                                </div>
                            </li>
                            <li class="transition-colors duration-200 ">
                                <div class="relative flex items-center justify-between hover:bg-gray-200">
                                    <a class="relative w-full py-4 transition duration-300 ease-in-out menu-item pl-5 pr-5 md:pl-7 md:pr-7 pr-4 pl-4 text-brand-dark"
                                       href="{{route('about')}}"><span class="block w-full">About Us</span></a>
                                </div>
                            </li>
                            <li class="transition-colors duration-200 ">
                                <div class="relative flex items-center justify-between hover:bg-gray-200" onclick="
                                            const category = document.getElementById('category');
                                            category.classList.toggle('h-0');
                                            category.style.transition = 'height 0.5s ease-in-out';
">
                                    <button
                                        class="relative w-max py-4 transition duration-300 ease-in-out menu-item pl-5:pr-5 md:pl-7 md:pr-7 pr-4 pl-4 text-brand-dark">
                                        <span class="block w-full">Category</span></button>
                                    <div
                                        class="cursor-pointer w-full h-8 text-[17px] px-5 shrink-0 flex items-center justify-end text-brand-dark text-opacity-80 absolute right-0 left-0 top-1/2 transform -translate-y-1/2">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                             viewBox="0 0 512 512"
                                             class="transition duration-200 ease-in-out transform rotate-0"
                                             height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <ul id="category" class="overflow-hidden h-0 bg-gray-100">
                                    <li class="transition-colors duration-200 hover:bg-gray-200">
                                        <div class="relative flex items-center justify-between"><a
                                                class="relative w-full py-4 transition duration-300 ease-in-out menu-item pl-5 pr-5 md:pl-7 md:pr-7 pr-4 pl-4 text-brand-dark"
                                                href="{{route('store')}}"><span class="block w-full">Oils</span></a>
                                        </div>
                                    </li>

                                    <li class="transition-colors duration-200 hover:bg-gray-200">
                                        <div class="relative flex items-center justify-between"><a
                                                class="relative w-full py-4 transition duration-300 ease-in-out menu-item pl-5 pr-5 md:pl-7 md:pr-7 pr-4 pl-4 text-brand-dark"
                                                href="{{route('store')}}"><span
                                                    class="block w-full">Dry Fruits</span></a>
                                        </div>
                                    </li>
                                    <li class="transition-colors duration-200 hover:bg-gray-200">
                                        <div class="relative flex items-center justify-between"><a
                                                class="relative w-full py-4 transition duration-300 ease-in-out menu-item pl-5 pr-5 md:pl-7 md:pr-7 pr-4 pl-4 text-brand-dark"
                                                href="{{route('store')}}"><span class="block w-full">Ghee</span></a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="transition-colors duration-200 ">
                                <div class="relative flex items-center justify-between hover:bg-gray-200">
                                    <a class="relative w-full py-4 transition duration-300 ease-in-out menu-item pl-5 pr-5 md:pl-7 md:pr-7 pr-4 pl-4 text-brand-dark"
                                       href="{{route('contact')}}"><span class="block w-full">Contact us</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="os-scrollbar os-scrollbar-horizontal os-scrollbar-auto-hidden os-scrollbar-handle-interactive os-scrollbar-cornerless os-scrollbar-unusable os-theme-dark">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="width: 100%;"></div>
                    </div>
                </div>
                <div
                    class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden os-scrollbar-handle-interactive os-scrollbar-visible os-scrollbar-cornerless os-theme-dark">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="height: 99.535%; transform: translateY(0%);"></div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center py-5 -mx-3 border-t text-brand-light border-border-base px-7 shrink-0">
                <a class="text-heading mx-3 transition duration-300 ease-in text-brand-dark text-opacity-60 hover:text-brand facebook"
                   href="https://www.facebook.com/redqinc/"><span class="sr-only">text-facebook</span>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                         height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z"></path>
                    </svg>
                </a><a
                    class="text-heading mx-3 transition duration-300 ease-in text-brand-dark text-opacity-60 hover:text-brand twitter"
                    href="https://twitter.com/redqinc"><span class="sr-only">text-twitter</span>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                         height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M496 109.5a201.8 201.8 0 01-56.55 15.3 97.51 97.51 0 0043.33-53.6 197.74 197.74 0 01-62.56 23.5A99.14 99.14 0 00348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 002.54 22.1 280.7 280.7 0 01-203-101.3A95.69 95.69 0 0036 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0135.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 01-25.94 3.4 94.38 94.38 0 01-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0139.5 405.6a203 203 0 01-23.5-1.4A278.68 278.68 0 00166.74 448c181.36 0 280.44-147.7 280.44-275.8 0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 00496 109.5z"></path>
                    </svg>
                </a><a
                    class="text-heading mx-3 transition duration-300 ease-in text-brand-dark text-opacity-60 hover:text-brand youtube"
                    href="https://www.youtube.com/channel/UCjld1tyVHRNy_pe3ROLiLhw"><span
                        class="sr-only">text-youtube</span>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                         height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M508.64 148.79c0-45-33.1-81.2-74-81.2C379.24 65 322.74 64 265 64h-18c-57.6 0-114.2 1-169.6 3.6C36.6 67.6 3.5 104 3.5 149 1 184.59-.06 220.19 0 255.79q-.15 53.4 3.4 106.9c0 45 33.1 81.5 73.9 81.5 58.2 2.7 117.9 3.9 178.6 3.8q91.2.3 178.6-3.8c40.9 0 74-36.5 74-81.5 2.4-35.7 3.5-71.3 3.4-107q.34-53.4-3.26-106.9zM207 353.89v-196.5l145 98.2z"></path>
                    </svg>
                </a><a
                    class="text-heading mx-3 transition duration-300 ease-in text-brand-dark text-opacity-60 hover:text-brand instagram"
                    href="https://www.instagram.com/redqinc/"><span class="sr-only">text-instagram</span>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                         height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"></path>
                        <path
                            d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z"></path>
                    </svg>
                </a></div>
        </div>
    </div>
</div>
{{--sidebar ends here--}}



@yield('content')



<div class="bg-fill-two overflow-hidden bg-cover bg-top pt-1.5 md:pt-0"
     style="background-image: url('https://borobazar.vercel.app/assets/images/app-bg.png');">
    <div
        class=" md:flex justify-between max-w-[1920px] mx-auto px-4 sm:px-5 md:px-6 lg:px-16 xl:px-28 2xl:px-32  3xl:px-40">
        <div
            class="shrink-0 mx-auto md:ml-0 md:mr-0 lg:flex lg:items-center pb-5 pt-1.5 md:pt-4 max-w-[450px] md:max-w-[340px] lg:max-w-[485px] xl:max-w-[540px] 2xl:max-w-[680px] 3xl:pl-10 3xl:pr-10">
            <div class="py-8 mb-1 text-left xl:py-10 2xl:py-16  md:text-left">
                <h2 class="text-[22px] md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-[42px] leading-9 lg:leading-[1.4em] xl:leading-[1.45em] text-brand-dark font-bold font-manrope -tracking-[0.2px] mb-3 lg:mb-4">
                    Make your online shop easier with our mobile app</h2>
                <p class="text-15px xl:text-base 2xl:text-[17px] leading-7 xl:leading-9 text-brand-dark text-opacity-70 pb-5 lg:pb-7 ">
                    BoroBazar makes online grocery shopping fast and easy. Get groceries delivered and order the best of
                    seasonal farm fresh food.</p>
                <div class="flex justify-center md:justify-start -mx-1 md:-mx-1.5 pt-0.5 px-7 sm:px-0"><a
                        class="inline-flex transition duration-200 ease-in hover:box-shadow hover:opacity-80 mx-1 md:mx-1.5"
                        href="/#"><img alt="App Store" loading="lazy" width="170" height="56" decoding="async"
                                       data-nimg="1" class="rounded-md w-36 lg:w-44 xl:w-auto aspect-[170/56]"
                                       src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fapp-store.png&w=256&q=75"
                                       style="color: transparent;"></a><a
                        class="inline-flex transition duration-200 ease-in hover:box-shadow hover:opacity-80 mx-1 md:mx-1.5"
                        href="/#"><img alt="Play Store" loading="lazy" width="170" height="56" decoding="async"
                                       data-nimg="1" class="rounded-md w-36 lg:w-44 xl:w-auto aspect-[170/56]"
                                       src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fplay-store.png&w=256&q=75"
                                       style="color: transparent;"></a></div>
            </div>
        </div>
        <div
            class="hidden md:flex items-end ltr:pl-4:pr-4 2xl:ltr:pl-0 2xl:pr-0 md:max-w-[450px] lg:max-w-[660px] xl:max-w-auto ltr:-mr-10:-ml-10 lg:ltr:-mr-16 lg:-ml-16 xl:ltr:-mr-10 xl:-ml-10 3xl:ltr:mr-7 3xl:ml-7">
            <img alt="App Thumbnail" loading="lazy" width="660" height="465" decoding="async" data-nimg="1"
                 src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fapp-thumbnail-2.png&w=750&q=100"
                 style="color: transparent; width: auto;"></div>
    </div>
</div>

<footer class="mt-[50px] lg:mt-14 2xl:mt-16">
    <div class="mx-auto max-w-[1920px] px-4 md:px-6 lg:px-8 2xl:px-10">
        <div class="grid grid-cols-2 md:grid-cols-7 xl:grid-cols-12 gap-5 sm:gap-9 lg:gap-11 xl:gap-7 pb-[50px]">
            <div
                class="pb-10 sm:pb-0 mb-4 border-b col-span-full sm:col-span-1 md:col-span-3 sm:border-b-0 border-b-gray-300 sm:mb-0">
                <div
                    class="flex flex-col text-left sm:ltr:text-left sm:rtl:text-right max-w-[300px] mx-auto sm:ml-0 sm:mr-0 pb-6 sm:pb-5">
                    <a class="inline-block focus:outline-none max-w-[131px] w-full mx-auto mb-3 lg:mb-5 sm:ml-0 sm:mr-0"
                       href="/"><img alt="BoroBazar" loading="eager" width="131" height="30" decoding="async"
                                     data-nimg="1"
                                     src="{{asset('/assets/images/logo/logo.jpg')}}"
                                     style="color: transparent;"></a>
                    <p class="text-gray-800 text-sm leading-7 lg:leading-[27px] lg:text-[15px]">We offer high-quality
                        foods and the best delivery service, and the food market you can blindly trust</p></div>
                <ul class="flex flex-wrap justify-center mx-auto sm:justify-start">
                    <li class="transition hover:opacity-80 last:mr-0 md:mr-5 md:mx-0 mr-4 ml-0 ml-4 md:ml-5">
                        <a target="_blank" rel="noreferrer" href="/"><img alt="facebook"
                                                                          loading="lazy"
                                                                          width="20"
                                                                          height="20"
                                                                          decoding="async"
                                                                          data-nimg="1"
                                                                          class="transform scale-85 md:scale-100"
                                                                          src="https://borobazar.vercel.app/assets/images/social/facebook.svg"
                                                                          style="color: transparent; width: auto;"></a>
                    </li>
                    <li class="transition hover:opacity-80 last:mr-0 md:mr-5 md:mx-0 mr-4 ml-0 ml-4 md:ml-5">
                        <a target="_blank" rel="noreferrer" href="/"><img alt="twitter"
                                                                          loading="lazy"
                                                                          width="20"
                                                                          height="20"
                                                                          decoding="async"
                                                                          data-nimg="1"
                                                                          class="transform scale-85 md:scale-100"
                                                                          src="https://borobazar.vercel.app/assets/images/social/twitter.svg"
                                                                          style="color: transparent; width: auto;"></a>
                    </li>
                    <li class="transition hover:opacity-80 last:mr-0 md:mr-5 md:mx-0 mr-4 ml-0 ml-4 md:ml-5">
                        <a target="_blank" rel="noreferrer" href="/"><img
                                alt="instagram" loading="lazy" width="20" height="20" decoding="async" data-nimg="1"
                                class="transform scale-85 md:scale-100"
                                src="https://borobazar.vercel.app/assets/images/social/instagram.svg"
                                style="color: transparent; width: auto;"></a></li>
                    <li class="transition hover:opacity-80 last:mr-0 md:mr-5 md:mx-0 mr-4 ml-0 ml-4 md:ml-5">
                        <a target="_blank" rel="noreferrer"
                           href="/"><img alt="youtube"
                                         loading="lazy"
                                         width="20" height="20"
                                         decoding="async"
                                         data-nimg="1"
                                         class="transform scale-85 md:scale-100"
                                         src="https://borobazar.vercel.app/assets/images/social/youtube.svg"
                                         style="color: transparent; width: auto;"></a>
                    </li>
                </ul>
            </div>


            <div class="pb-3.5 sm:pb-0 col-span-1 md:col-span-2">
                <h3 class="text-gray-800 text-base lg:text-[17px] lg:leading-7 font-medium mb-4 sm:mb-5 lg:mb-6 pb-0.5">
                    About Us</h3>
                <ul class="flex flex-col space-y-3 text-sm lg:text-[15px]">
                    <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-gray-300"
                                                       href="{{route('front.home')}}">Home</a></li>
                    <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-gray-300"
                                                       href="{{route('about')}}">About us</a></li>
                    <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-gray-300"
                                                       href="{{route('store')}}">Store</a></li>
                    <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-gray-300"
                                                       href="{{route('contact')}}">Contact Us</a></li>
                </ul>
            </div>
            <div class="pb-3.5 sm:pb-0 col-span-1 md:col-span-2">
                <h3 class="text-gray-800 text-base lg:text-[17px] lg:leading-7 font-medium mb-4 sm:mb-5 lg:mb-6 pb-0.5">
                    Our Information</h3>
                <ul class="flex flex-col space-y-3 text-sm lg:text-[15px]">
                    <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-gray-300"
                                                       href="{{route('termsConditions')}}">Terms & Conditions</a></li>
                    <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-gray-300"
                                                       href="{{route('termsConditions')}}">Privacy Policies</a></li>
                    <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-gray-300"
                                                       href="{{route('termsConditions')}}">Shipping Policies</a></li>
                    <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-gray-300"
                                                       href="{{route('termsConditions')}}">Refund Policies</a></li>

                </ul>
            </div>
            <div class="pb-3.5 sm:pb-0 col-span-1 md:col-span-2">
                <h3 class="text-gray-800 text-base lg:text-[17px] lg:leading-7 font-medium mb-4 sm:mb-5 lg:mb-6 pb-0.5">
                    Community</h3>
                <ul class="flex flex-col space-y-3 text-sm lg:text-[15px]">
                    <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-gray-300"
                                                       href="/">Announcements</a></li>
                    <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-gray-300"
                                                       href="/">Answer center</a></li>
                    <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-gray-300"
                                                       href="/">Discussion boards</a></li>
                    <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-gray-300"
                                                       href="/">Giving works</a></li>
                </ul>
            </div>
            <div
                class="flex flex-col pt-8 border-t col-span-full sm:col-span-1 md:col-start-4 xl:col-start-auto md:col-span-4 xl:col-span-3 xl:pl-6 xl:pr-6 sm:pt-0 sm:border-t-0 border-border-three 2xl:pl-7 2xl:pr-7 3xl:pl-16 3xl:pr-16">
                <h3 class="text-gray-800 text-base lg:text-[17px] lg:leading-7 font-medium mb-4 lg:mb-6 lg:pb-0.5">
                    Subscribe Now</h3>
                <p class="text-gray-400 text-sm leading-7 lg:leading-[27px] lg:text-[15px] lg:-mt-1 max-w-[400px]">
                    Subscribe your email for newsletter and featured news based on your interest</p>
                <form novalidate="" class="relative mt-5 max-w-[400px]">
                    <span class="flex items-center absolute ltr:left-0 rtl:right-0 top-0 h-12 px-3.5 transform"><svg
                            width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="w-4 2xl:w-[18px] h-4 2xl:h-[18px]"><g clip-path="url(#clip0)"><path
                                    d="M16.3125 2.25H1.68751C0.75696 2.25 0 3.00696 0 3.93751V14.0625C0 14.9931 0.75696 15.75 1.68751 15.75H16.3125C17.243 15.75 18 14.9931 18 14.0625V3.93751C18 3.00696 17.243 2.25 16.3125 2.25ZM16.3125 3.375C16.3889 3.375 16.4616 3.39085 16.5281 3.41854L9 9.94319L1.47188 3.41854C1.53834 3.39089 1.61105 3.375 1.68747 3.375H16.3125ZM16.3125 14.625H1.68751C1.37715 14.625 1.125 14.3729 1.125 14.0625V4.60711L8.6314 11.1127C8.73743 11.2044 8.86872 11.25 9 11.25C9.13128 11.25 9.26256 11.2044 9.3686 11.1127L16.875 4.60711V14.0625C16.875 14.3729 16.6228 14.625 16.3125 14.625Z"
                                    fill="#B3B3B3"></path></g></svg></span>
                    <div class="w-full">
                        <input id="subscription-email" name="email" type="email"
                               placeholder="Write your email here"
                               class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-gray-300 focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12 ltr:pl-10 rtl:pr-10 2xl:px-11 h-12 rounded-md"
                               autocomplete="off" spellcheck="false" aria-invalid="false"></div>
                    <button
                        class="absolute right-0 top-0 hover:opacity-80 focus:outline-none h-12 px-3 lg:px-3.5 transform scale-90 2xl:scale-100"
                        aria-label="Subscribe Button">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="w-[18px] 2xl:w-5 h-[18px] 2xl:h-5 false">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M18.809 8.21633L2.67252 1.52062C1.99272 1.23851 1.22471 1.36262 0.668264 1.84434C0.111818 2.32613 -0.120916 3.06848 0.0609589 3.78164L1.49725 9.41414H8.52951C8.85311 9.41414 9.11549 9.67648 9.11549 10.0001C9.11549 10.3237 8.85315 10.5861 8.52951 10.5861H1.49725L0.0609589 16.2186C-0.120916 16.9318 0.111779 17.6741 0.668264 18.1559C1.22584 18.6386 1.99393 18.7611 2.67256 18.4796L18.809 11.7839C19.5437 11.4791 20.0001 10.7955 20.0001 10.0001C20.0001 9.20469 19.5437 8.52113 18.809 8.21633Z"
                                    fill="#02B290"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="20" height="20" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="pb-5 lg:pb-7">
        <div class="mx-auto max-w-[1920px] px-4 md:px-6 lg:px-8 2xl:px-10">
            <div
                class="flex flex-col pt-6 text-center border-t-[1px] md:flex-row md:justify-between border-t-gray-300 lg:pt-7">
                <p class="text-brand-dark text-sm leading-7 lg:leading-[27px] lg:text-[15px]">©&nbsp;Copyright
                    2023&nbsp;<a
                        class="transition-colors duration-200 ease-in-out text-gray-800 hover:text-gray-400 font-bold"
                        href="/">HIMROOZ</a>&nbsp; All rights reserved | Designed By: <a
                        class="transition-colors duration-200 ease-in-out text-gray-800 hover:text-gray-400 font-bold"
                        href="www.himsoftsolution.com">Him Soft Solution</a></p>
                <ul class="flex flex-wrap justify-center items-center -mb-1.5 md:mb-0 mx-auto md:mx-0 pt-3.5 md:pt-0">
                    <li class="inline-flex mb-2 transition md:mb-0 hover:opacity-80 mr-4 sm:mr-5 lg:mr-7 mr-0 ml-4 sm:ml-5 lg:ml-7 ml-0">
                        <a href="/" target="_blank" class="inline-flex" rel="noreferrer"><img alt="Master Card"
                                                                                              loading="lazy" width="34"
                                                                                              height="20"
                                                                                              decoding="async"
                                                                                              data-nimg="1"
                                                                                              src="https://borobazar.vercel.app/assets/images/payment/mastercard.svg"
                                                                                              style="color: transparent; width: auto;"></a>
                    </li>
                    <li class="inline-flex mb-2 transition md:mb-0 hover:opacity-80 mr-4 sm:mr-5 lg:mr-7 mr-0 ml-4 sm:ml-5 lg:ml-7 ml-0">
                        <a href="/" target="_blank" class="inline-flex" rel="noreferrer"><img alt="Visa" loading="lazy"
                                                                                              width="50" height="20"
                                                                                              decoding="async"
                                                                                              data-nimg="1"
                                                                                              src="https://borobazar.vercel.app/assets/images/payment/visa.svg"
                                                                                              style="color: transparent; width: auto;"></a>
                    </li>
                    <li class="inline-flex mb-2 transition md:mb-0 hover:opacity-80 mr-4 sm:mr-5 lg:mr-7 mr-0 ml-4 sm:ml-5 lg:ml-7 ml-0">
                        <a href="/" target="_blank" class="inline-flex" rel="noreferrer"><img alt="Paypal"
                                                                                              loading="lazy" width="76"
                                                                                              height="20"
                                                                                              decoding="async"
                                                                                              data-nimg="1"
                                                                                              src="https://borobazar.vercel.app/assets/images/payment/paypal.svg"
                                                                                              style="color: transparent; width: auto;"></a>
                    </li>
                    <li class="inline-flex mb-2 transition md:mb-0 hover:opacity-80 mr-4 sm:mr-5 lg:mr-7 mr-0 ml-4 sm:ml-5 lg:ml-7 ml-0">
                        <a href="/" target="_blank" class="inline-flex" rel="noreferrer"><img alt="JCB" loading="lazy"
                                                                                              width="26" height="20"
                                                                                              decoding="async"
                                                                                              data-nimg="1"
                                                                                              src="https://borobazar.vercel.app/assets/images/payment/jcb.svg"
                                                                                              style="color: transparent; width: auto;"></a>
                    </li>
                    <li class="inline-flex mb-2 transition md:mb-0 hover:opacity-80 mr-4 sm:mr-5 lg:mr-7 mr-0 ml-4 sm:ml-5 lg:ml-7 ml-0">
                        <a href="/" target="_blank" class="inline-flex" rel="noreferrer"><img alt="Skrill"
                                                                                              loading="lazy" width="39"
                                                                                              height="20"
                                                                                              decoding="async"
                                                                                              data-nimg="1"
                                                                                              src="https://borobazar.vercel.app/assets/images/payment/skrill.svg"
                                                                                              style="color: transparent; width: auto;"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>



{{--bottom navbar starts here--}}
<div class="lg:hidden shadow-lg shadow-black fixed z-30 -bottom-0.5 flex items-center justify-between body-font bg-gray-50 w-full h-14 px-4 md:px-6 lg:px-8 text-brand-muted pb-0.5">
    <button aria-label="Menu"
            class="flex flex-col items-center justify-center outline-none shrink-0 focus:outline-none" onclick="
    const sideBar = document.getElementById('sideBar');
    //set width to full screen
    sideBar.style.width = '100%';
    sideBar.style.transition = 'width 0.3s ease-in';

">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="14" viewBox="0 0 25.567 18">
            <g transform="translate(-776 -462)">
                <rect data-name="Rectangle 941" width="12.749" height="2.499" rx="1.25" transform="translate(776 462)"
                      fill="currentColor" class="text-gray-500"></rect>
                <rect data-name="Rectangle 942" width="25.567" height="2.499" rx="1.25"
                      transform="translate(776 469.75)" fill="currentColor" class="text-gray-500"></rect>
                <rect data-name="Rectangle 943" width="17.972" height="2.499" rx="1.25"
                      transform="translate(776 477.501)" fill="currentColor" class="text-gray-500"></rect>
            </g>
        </svg>
    </button>
    <a href="{{route('store')}}">
        <button class="relative flex items-center justify-center h-auto shrink-0 focus:outline-none"
                aria-label="Search Button">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" class="text-gray-500">
                <path
                    d="M19.0144 17.9256L13.759 12.6703C14.777 11.4129 15.3899 9.81507 15.3899 8.07486C15.3899 4.04156 12.1081 0.759766 8.07483 0.759766C4.04152 0.759766 0.759766 4.04152 0.759766 8.07483C0.759766 12.1081 4.04156 15.3899 8.07486 15.3899C9.81507 15.3899 11.4129 14.777 12.6703 13.759L17.9256 19.0144C18.0757 19.1645 18.2728 19.24 18.47 19.24C18.6671 19.24 18.8642 19.1645 19.0144 19.0144C19.3155 18.7133 19.3155 18.2266 19.0144 17.9256ZM8.07486 13.8499C4.89009 13.8499 2.2998 11.2596 2.2998 8.07483C2.2998 4.89006 4.89009 2.29976 8.07486 2.29976C11.2596 2.29976 13.8499 4.89006 13.8499 8.07483C13.8499 11.2596 11.2596 13.8499 8.07486 13.8499Z"
                    fill="currentColor"></path>
            </svg>
        </button>
    </a>
    <a class="shrink-0" href="/"><span class="sr-only">Home</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="20px" viewBox="0 0 17.996 20.442"
             class="text-gray-500">
            <path
                d="M48.187,7.823,39.851.182A.7.7,0,0,0,38.9.2L31.03,7.841a.7.7,0,0,0-.211.5V19.311a.694.694,0,0,0,.694.694H37.3A.694.694,0,0,0,38,19.311V14.217h3.242v5.095a.694.694,0,0,0,.694.694h5.789a.694.694,0,0,0,.694-.694V8.335a.7.7,0,0,0-.228-.512ZM47.023,18.617h-4.4V13.522a.694.694,0,0,0-.694-.694H37.3a.694.694,0,0,0-.694.694v5.095H32.2V8.63l7.192-6.98L47.02,8.642v9.975Z"
                transform="translate(-30.619 0.236)" fill="currentColor" stroke="currentColor"
                stroke-width="0.4"></path>
        </svg>
    </a>
    <button class="flex items-center justify-center shrink-0 h-auto focus:outline-none transform"
            aria-label="cart-button" onclick="
                                const cart = document.getElementById('cart');
                                //set width to full screen
                                cart.style.width = '100%';
                                cart.style.transition = 'width 0.3s ease-in';

                                ">
        <div class="relative flex items-center">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"
                 class=" text-gray-500">
                <g clip-path="url(#clip0)">
                    <path
                        d="M19.7999 19.0172L18.5402 4.8319C18.5132 4.51697 18.2478 4.27853 17.9374 4.27853H15.3459C15.31 1.91207 13.3754 0 10.9999 0C8.62447 0 6.68991 1.91207 6.65392 4.27853H4.06251C3.74758 4.27853 3.48664 4.51697 3.45965 4.8319L2.19993 19.0172C2.19993 19.0352 2.19543 19.0532 2.19543 19.0712C2.19543 20.6863 3.6756 22 5.49768 22H16.5022C18.3243 22 19.8044 20.6863 19.8044 19.0712C19.8044 19.0532 19.8044 19.0352 19.7999 19.0172ZM10.9999 1.21472C12.705 1.21472 14.0952 2.58241 14.1312 4.27853H7.86864C7.90464 2.58241 9.29482 1.21472 10.9999 1.21472ZM16.5022 20.7853H5.49768C4.35494 20.7853 3.42815 20.0294 3.41016 19.0982L4.61588 5.49775H6.64942V7.34233C6.64942 7.67975 6.91936 7.94969 7.25678 7.94969C7.59421 7.94969 7.86415 7.67975 7.86415 7.34233V5.49775H14.1312V7.34233C14.1312 7.67975 14.4012 7.94969 14.7386 7.94969C15.076 7.94969 15.3459 7.67975 15.3459 7.34233V5.49775H17.3795L18.5897 19.0982C18.5717 20.0294 17.6404 20.7853 16.5022 20.7853Z"
                        fill="currentColor" stroke="currentColor" stroke-width="0.1"></path>
                </g>
                <defs>
                    <clipPath id="clip0">
                        <rect width="22" height="22" fill="white"></rect>
                    </clipPath>
                </defs>
            </svg>

            <span
                class="h-[20px] w-[20px]  rounded-full bg-[#02b290] flex items-center justify-center bg-brand text-gray-50 absolute -top-2 left-2  text-[12px] font-normal"> 11 </span>

        </div>
    </button>
    <a href="{{route('profile')}}">
        <button class="shrink-0 focus:outline-none" aria-label="Authentication">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"
                 class="text-gray-500">
                <path
                    d="M20.9001 11C20.9001 5.52836 16.4723 1.09998 11.0001 1.09998C5.52848 1.09998 1.1001 5.52775 1.1001 11C1.1001 16.4231 5.49087 20.9 11.0001 20.9C16.4867 20.9 20.9001 16.448 20.9001 11ZM11.0001 2.26013C15.8193 2.26013 19.7399 6.1808 19.7399 11C19.7399 12.7629 19.2156 14.4573 18.2432 15.8926C14.3386 11.6924 7.66873 11.6849 3.75698 15.8926C2.78459 14.4573 2.26025 12.7629 2.26025 11C2.26025 6.1808 6.18092 2.26013 11.0001 2.26013ZM4.48056 16.8201C7.95227 12.926 14.0488 12.9269 17.5195 16.8201C14.0361 20.7172 7.96541 20.7184 4.48056 16.8201Z"
                    fill="currentColor" stroke="currentColor" stroke-width="0.2"></path>
                <path
                    d="M11 11.5801C12.9191 11.5801 14.4805 10.0187 14.4805 8.09961V6.93945C14.4805 5.02036 12.9191 3.45898 11 3.45898C9.08091 3.45898 7.51953 5.02036 7.51953 6.93945V8.09961C7.51953 10.0187 9.08091 11.5801 11 11.5801ZM8.67969 6.93945C8.67969 5.65996 9.7205 4.61914 11 4.61914C12.2795 4.61914 13.3203 5.65996 13.3203 6.93945V8.09961C13.3203 9.3791 12.2795 10.4199 11 10.4199C9.7205 10.4199 8.67969 9.3791 8.67969 8.09961V6.93945Z"
                    fill="currentColor" stroke="currentColor" stroke-width="0.2"></path>
            </svg>
        </button>
    </a>

</div>
{{--bottom navbar ends here--}}




{{--cart here--}}
<div class=" fixed top-0 right-0 flex justify-end w-0 overflow-hidden max-h-screen min-h-screen z-50 bg-black/25 "
     id="cart">
    <div class="bg-white h-screen lg:w-[500px] md:w-[500px] w-full shadow-md shadow-gray-400" aria-modal="true"
         role="dialog">
        <div class="flex flex-col gap-2 w-full h-screen">
            {{--            cart header--}}
            <div
                class="relative flex items-center justify-between w-full border-b pl-5 pr-5 md:pl-7 md:pr-7 border-border-base">
                <h3 class="text-brand-dark font-semibold text-brand-dark text-xl">Shopping Cart</h3>
                <div class="flex items-center">
                    <button
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
                        <span class="pl-1 lg:pr-1">Clear All</span></button>
                    <button
                        class="flex items-center justify-center px-4 py-6 text-2xl transition-opacity md:px-6 lg:py-7 focus:outline-none text-gray-800 hover:opacity-60"
                        aria-label="close" onclick="
                                        const cart = document.getElementById('cart');
                                      //set width to full screen
                                        cart.style.width = '0%';
                                        //add transition
                                        cart.style.transition = 'width 0.5s ease-in-out';
                                    ">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                             height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M289.94 256l95-95A24 24 0 00351 127l-95 95-95-95a24 24 0 00-34 34l95 95-95 95a24 24 0 1034 34l95-95 95 95a24 24 0 0034-34z"></path>
                        </svg>
                    </button>
                </div>
            </div>
            {{--            cart header ends--}}


            {{--            cart body here--}}
            <div class="os-viewport os-viewport-scrollbar-hidden"
                 style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; top: 0px; right: auto; left: 0px; width: calc(100% + 0px); padding: 0px; overflow-y: scroll;">

{{--              if shopping cart has items . remove hidden class--}}
                <div class="w-full hidden px-5 md:px-7 h-[calc(100vh_-_300px)]">
                    <div
                        class="group w-full h-auto flex justify-start items-center text-brand-light py-4 md:py-7 border-b border-border-one border-opacity-70 relative border-b-0"
                        title="Coconut Oil">
                        <div
                            class="relative flex rounded overflow-hidden shrink-0 cursor-pointer w-[90px] md:w-[100px] h-[90px] md:h-[100px]">
                            <img alt="Fresh Green Leaf Lettuce" loading="eager" width="100" height="100"
                                 decoding="async" data-nimg="1" class="object-cover bg-fill-thumbnail"
                                 src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-1.png&w=128&q=75"
                                 style="color: transparent; width: auto;">
                            <div
                                class="absolute top-0 flex items-center justify-center w-full h-full transition duration-200 ease-in-out bg-black left-0 right-0 bg-opacity-30 md:bg-opacity-0 md:group-hover:bg-opacity-30"
                                role="button">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 512 512"
                                     class="relative text-2xl text-white transition duration-300 ease-in-out transform md:scale-0 md:opacity-0 md:group-hover:scale-100 md:group-hover:opacity-100"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zm52.7 283.3L256 278.6l-52.7 52.7c-6.2 6.2-16.4 6.2-22.6 0-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3l52.7-52.7-52.7-52.7c-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3 6.2-6.2 16.4-6.2 22.6 0l52.7 52.7 52.7-52.7c6.2-6.2 16.4-6.2 22.6 0 6.2 6.2 6.2 16.4 0 22.6L278.6 256l52.7 52.7c6.2 6.2 6.2 16.4 0 22.6-6.2 6.3-16.4 6.3-22.6 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-start justify-between w-full overflow-hidden">
                            <div class="pl-3 pr-3 md:pl-4 md:pr-4"><a
                                    class="block font-semibold leading-5 transition-all text-gray-900 text-[13px] sm:text-sm lg:text-[15px] hover:text-gray-400"
                                    href="/products/fresh-green-leaf-lettuce">Fresh Green Leaf Lettuce</a>
                                <div class="text-[13px] sm:text-sm text-gray-400 mt-1.5 block mb-2">1 each X 3
                                </div>
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 inline-flex">
                                    <button
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
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-[15px] w-9">3</span>
                                    <button
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
                                    </button>
                                </div>
                            </div>
                            <div
                                class="flex font-semibold text-sm md:text-base text-brand-dark leading-5 shrink-0 min-w-[65px] md:min-w-[80px] justify-end">
                                ₹ 7.92
                            </div>
                        </div>
                    </div>
                    <div
                        class="group w-full h-auto flex justify-start items-center text-brand-light py-4 md:py-7 border-b border-border-one border-opacity-70 relative border-b-0"
                        title="Coconut Oil">
                        <div
                            class="relative flex rounded overflow-hidden shrink-0 cursor-pointer w-[90px] md:w-[100px] h-[90px] md:h-[100px]">
                            <img alt="Fresh Green Leaf Lettuce" loading="eager" width="100" height="100"
                                 decoding="async" data-nimg="1" class="object-cover bg-fill-thumbnail"
                                 src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-1.png&w=128&q=75"
                                 style="color: transparent; width: auto;">
                            <div
                                class="absolute top-0 flex items-center justify-center w-full h-full transition duration-200 ease-in-out bg-black left-0 right-0 bg-opacity-30 md:bg-opacity-0 md:group-hover:bg-opacity-30"
                                role="button">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 512 512"
                                     class="relative text-2xl text-white transition duration-300 ease-in-out transform md:scale-0 md:opacity-0 md:group-hover:scale-100 md:group-hover:opacity-100"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zm52.7 283.3L256 278.6l-52.7 52.7c-6.2 6.2-16.4 6.2-22.6 0-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3l52.7-52.7-52.7-52.7c-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3 6.2-6.2 16.4-6.2 22.6 0l52.7 52.7 52.7-52.7c6.2-6.2 16.4-6.2 22.6 0 6.2 6.2 6.2 16.4 0 22.6L278.6 256l52.7 52.7c6.2 6.2 6.2 16.4 0 22.6-6.2 6.3-16.4 6.3-22.6 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-start justify-between w-full overflow-hidden">
                            <div class="pl-3 pr-3 md:pl-4 md:pr-4"><a
                                    class="block font-semibold leading-5 transition-all text-gray-900 text-[13px] sm:text-sm lg:text-[15px] hover:text-gray-400"
                                    href="/products/fresh-green-leaf-lettuce">Fresh Green Leaf Lettuce</a>
                                <div class="text-[13px] sm:text-sm text-gray-400 mt-1.5 block mb-2">1 each X 3
                                </div>
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 inline-flex">
                                    <button
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
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-[15px] w-9">3</span>
                                    <button
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
                                    </button>
                                </div>
                            </div>
                            <div
                                class="flex font-semibold text-sm md:text-base text-brand-dark leading-5 shrink-0 min-w-[65px] md:min-w-[80px] justify-end">
                                ₹ 7.92
                            </div>
                        </div>
                    </div>
                    <div
                        class="group w-full h-auto flex justify-start items-center text-brand-light py-4 md:py-7 border-b border-border-one border-opacity-70 relative border-b-0"
                        title="Coconut Oil">
                        <div
                            class="relative flex rounded overflow-hidden shrink-0 cursor-pointer w-[90px] md:w-[100px] h-[90px] md:h-[100px]">
                            <img alt="Fresh Green Leaf Lettuce" loading="eager" width="100" height="100"
                                 decoding="async" data-nimg="1" class="object-cover bg-fill-thumbnail"
                                 src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-1.png&w=128&q=75"
                                 style="color: transparent; width: auto;">
                            <div
                                class="absolute top-0 flex items-center justify-center w-full h-full transition duration-200 ease-in-out bg-black left-0 right-0 bg-opacity-30 md:bg-opacity-0 md:group-hover:bg-opacity-30"
                                role="button">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 512 512"
                                     class="relative text-2xl text-white transition duration-300 ease-in-out transform md:scale-0 md:opacity-0 md:group-hover:scale-100 md:group-hover:opacity-100"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zm52.7 283.3L256 278.6l-52.7 52.7c-6.2 6.2-16.4 6.2-22.6 0-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3l52.7-52.7-52.7-52.7c-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3 6.2-6.2 16.4-6.2 22.6 0l52.7 52.7 52.7-52.7c6.2-6.2 16.4-6.2 22.6 0 6.2 6.2 6.2 16.4 0 22.6L278.6 256l52.7 52.7c6.2 6.2 6.2 16.4 0 22.6-6.2 6.3-16.4 6.3-22.6 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-start justify-between w-full overflow-hidden">
                            <div class="pl-3 pr-3 md:pl-4 md:pr-4"><a
                                    class="block font-semibold leading-5 transition-all text-gray-900 text-[13px] sm:text-sm lg:text-[15px] hover:text-gray-400"
                                    href="/products/fresh-green-leaf-lettuce">Fresh Green Leaf Lettuce</a>
                                <div class="text-[13px] sm:text-sm text-gray-400 mt-1.5 block mb-2">1 each X 3
                                </div>
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 inline-flex">
                                    <button
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
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-[15px] w-9">3</span>
                                    <button
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
                                    </button>
                                </div>
                            </div>
                            <div
                                class="flex font-semibold text-sm md:text-base text-brand-dark leading-5 shrink-0 min-w-[65px] md:min-w-[80px] justify-end">
                                ₹ 7.92
                            </div>
                        </div>
                    </div>
                    <div
                        class="group w-full h-auto flex justify-start items-center text-brand-light py-4 md:py-7 border-b border-border-one border-opacity-70 relative border-b-0"
                        title="Coconut Oil">
                        <div
                            class="relative flex rounded overflow-hidden shrink-0 cursor-pointer w-[90px] md:w-[100px] h-[90px] md:h-[100px]">
                            <img alt="Fresh Green Leaf Lettuce" loading="eager" width="100" height="100"
                                 decoding="async" data-nimg="1" class="object-cover bg-fill-thumbnail"
                                 src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-1.png&w=128&q=75"
                                 style="color: transparent; width: auto;">
                            <div
                                class="absolute top-0 flex items-center justify-center w-full h-full transition duration-200 ease-in-out bg-black left-0 right-0 bg-opacity-30 md:bg-opacity-0 md:group-hover:bg-opacity-30"
                                role="button">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 512 512"
                                     class="relative text-2xl text-white transition duration-300 ease-in-out transform md:scale-0 md:opacity-0 md:group-hover:scale-100 md:group-hover:opacity-100"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zm52.7 283.3L256 278.6l-52.7 52.7c-6.2 6.2-16.4 6.2-22.6 0-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3l52.7-52.7-52.7-52.7c-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3 6.2-6.2 16.4-6.2 22.6 0l52.7 52.7 52.7-52.7c6.2-6.2 16.4-6.2 22.6 0 6.2 6.2 6.2 16.4 0 22.6L278.6 256l52.7 52.7c6.2 6.2 6.2 16.4 0 22.6-6.2 6.3-16.4 6.3-22.6 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-start justify-between w-full overflow-hidden">
                            <div class="pl-3 pr-3 md:pl-4 md:pr-4"><a
                                    class="block font-semibold leading-5 transition-all text-gray-900 text-[13px] sm:text-sm lg:text-[15px] hover:text-gray-400"
                                    href="/products/fresh-green-leaf-lettuce">Fresh Green Leaf Lettuce</a>
                                <div class="text-[13px] sm:text-sm text-gray-400 mt-1.5 block mb-2">1 each X 3
                                </div>
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 inline-flex">
                                    <button
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
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-[15px] w-9">3</span>
                                    <button
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
                                    </button>
                                </div>
                            </div>
                            <div
                                class="flex font-semibold text-sm md:text-base text-brand-dark leading-5 shrink-0 min-w-[65px] md:min-w-[80px] justify-end">
                                ₹ 7.92
                            </div>
                        </div>
                    </div>
                    <div
                        class="group w-full h-auto flex justify-start items-center text-brand-light py-4 md:py-7 border-b border-border-one border-opacity-70 relative border-b-0"
                        title="Coconut Oil">
                        <div
                            class="relative flex rounded overflow-hidden shrink-0 cursor-pointer w-[90px] md:w-[100px] h-[90px] md:h-[100px]">
                            <img alt="Fresh Green Leaf Lettuce" loading="eager" width="100" height="100"
                                 decoding="async" data-nimg="1" class="object-cover bg-fill-thumbnail"
                                 src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-1.png&w=128&q=75"
                                 style="color: transparent; width: auto;">
                            <div
                                class="absolute top-0 flex items-center justify-center w-full h-full transition duration-200 ease-in-out bg-black left-0 right-0 bg-opacity-30 md:bg-opacity-0 md:group-hover:bg-opacity-30"
                                role="button">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 512 512"
                                     class="relative text-2xl text-white transition duration-300 ease-in-out transform md:scale-0 md:opacity-0 md:group-hover:scale-100 md:group-hover:opacity-100"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zm52.7 283.3L256 278.6l-52.7 52.7c-6.2 6.2-16.4 6.2-22.6 0-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3l52.7-52.7-52.7-52.7c-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3 6.2-6.2 16.4-6.2 22.6 0l52.7 52.7 52.7-52.7c6.2-6.2 16.4-6.2 22.6 0 6.2 6.2 6.2 16.4 0 22.6L278.6 256l52.7 52.7c6.2 6.2 6.2 16.4 0 22.6-6.2 6.3-16.4 6.3-22.6 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-start justify-between w-full overflow-hidden">
                            <div class="pl-3 pr-3 md:pl-4 md:pr-4"><a
                                    class="block font-semibold leading-5 transition-all text-gray-900 text-[13px] sm:text-sm lg:text-[15px] hover:text-gray-400"
                                    href="/products/fresh-green-leaf-lettuce">Fresh Green Leaf Lettuce</a>
                                <div class="text-[13px] sm:text-sm text-gray-400 mt-1.5 block mb-2">1 each X 3
                                </div>
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 inline-flex">
                                    <button
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
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-[15px] w-9">3</span>
                                    <button
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
                                    </button>
                                </div>
                            </div>
                            <div
                                class="flex font-semibold text-sm md:text-base text-brand-dark leading-5 shrink-0 min-w-[65px] md:min-w-[80px] justify-end">
                                ₹ 7.92
                            </div>
                        </div>
                    </div>
                    <div
                        class="group w-full h-auto flex justify-start items-center text-brand-light py-4 md:py-7 border-b border-border-one border-opacity-70 relative border-b-0"
                        title="Coconut Oil">
                        <div
                            class="relative flex rounded overflow-hidden shrink-0 cursor-pointer w-[90px] md:w-[100px] h-[90px] md:h-[100px]">
                            <img alt="Fresh Green Leaf Lettuce" loading="eager" width="100" height="100"
                                 decoding="async" data-nimg="1" class="object-cover bg-fill-thumbnail"
                                 src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-1.png&w=128&q=75"
                                 style="color: transparent; width: auto;">
                            <div
                                class="absolute top-0 flex items-center justify-center w-full h-full transition duration-200 ease-in-out bg-black left-0 right-0 bg-opacity-30 md:bg-opacity-0 md:group-hover:bg-opacity-30"
                                role="button">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 512 512"
                                     class="relative text-2xl text-white transition duration-300 ease-in-out transform md:scale-0 md:opacity-0 md:group-hover:scale-100 md:group-hover:opacity-100"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zm52.7 283.3L256 278.6l-52.7 52.7c-6.2 6.2-16.4 6.2-22.6 0-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3l52.7-52.7-52.7-52.7c-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3 6.2-6.2 16.4-6.2 22.6 0l52.7 52.7 52.7-52.7c6.2-6.2 16.4-6.2 22.6 0 6.2 6.2 6.2 16.4 0 22.6L278.6 256l52.7 52.7c6.2 6.2 6.2 16.4 0 22.6-6.2 6.3-16.4 6.3-22.6 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-start justify-between w-full overflow-hidden">
                            <div class="pl-3 pr-3 md:pl-4 md:pr-4"><a
                                    class="block font-semibold leading-5 transition-all text-gray-900 text-[13px] sm:text-sm lg:text-[15px] hover:text-gray-400"
                                    href="/products/fresh-green-leaf-lettuce">Fresh Green Leaf Lettuce</a>
                                <div class="text-[13px] sm:text-sm text-gray-400 mt-1.5 block mb-2">1 each X 3
                                </div>
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 inline-flex">
                                    <button
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
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-[15px] w-9">3</span>
                                    <button
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
                                    </button>
                                </div>
                            </div>
                            <div
                                class="flex font-semibold text-sm md:text-base text-brand-dark leading-5 shrink-0 min-w-[65px] md:min-w-[80px] justify-end">
                                ₹ 7.92
                            </div>
                        </div>
                    </div>
                    <div
                        class="group w-full h-auto flex justify-start items-center text-brand-light py-4 md:py-7 border-b border-border-one border-opacity-70 relative border-b-0"
                        title="Coconut Oil">
                        <div
                            class="relative flex rounded overflow-hidden shrink-0 cursor-pointer w-[90px] md:w-[100px] h-[90px] md:h-[100px]">
                            <img alt="Fresh Green Leaf Lettuce" loading="eager" width="100" height="100"
                                 decoding="async" data-nimg="1" class="object-cover bg-fill-thumbnail"
                                 src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fproducts%2Fp-1.png&w=128&q=75"
                                 style="color: transparent; width: auto;">
                            <div
                                class="absolute top-0 flex items-center justify-center w-full h-full transition duration-200 ease-in-out bg-black left-0 right-0 bg-opacity-30 md:bg-opacity-0 md:group-hover:bg-opacity-30"
                                role="button">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 512 512"
                                     class="relative text-2xl text-white transition duration-300 ease-in-out transform md:scale-0 md:opacity-0 md:group-hover:scale-100 md:group-hover:opacity-100"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zm52.7 283.3L256 278.6l-52.7 52.7c-6.2 6.2-16.4 6.2-22.6 0-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3l52.7-52.7-52.7-52.7c-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3 6.2-6.2 16.4-6.2 22.6 0l52.7 52.7 52.7-52.7c6.2-6.2 16.4-6.2 22.6 0 6.2 6.2 6.2 16.4 0 22.6L278.6 256l52.7 52.7c6.2 6.2 6.2 16.4 0 22.6-6.2 6.3-16.4 6.3-22.6 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-start justify-between w-full overflow-hidden">
                            <div class="pl-3 pr-3 md:pl-4 md:pr-4"><a
                                    class="block font-semibold leading-5 transition-all text-gray-900 text-[13px] sm:text-sm lg:text-[15px] hover:text-gray-400"
                                    href="/products/fresh-green-leaf-lettuce">Fresh Green Leaf Lettuce</a>
                                <div class="text-[13px] sm:text-sm text-gray-400 mt-1.5 block mb-2">1 each X 3
                                </div>
                                <div
                                    class="flex items-center justify-between rounded overflow-hidden shrink-0 p-1 inline-flex">
                                    <button
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
                                    </button>
                                    <span
                                        class="font-semibold text-brand-dark flex items-center justify-center h-full transition-colors duration-250 ease-in-out cursor-default shrink-0 text-[15px] w-9">3</span>
                                    <button
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
                                    </button>
                                </div>
                            </div>
                            <div
                                class="flex font-semibold text-sm md:text-base text-brand-dark leading-5 shrink-0 min-w-[65px] md:min-w-[80px] justify-end">
                                ₹ 7.92
                            </div>
                        </div>
                    </div>
                </div>

{{--                if shopping cart is empty--}}
                <div class="px-5 md:px-7 pt-8 pb-5 flex justify-center flex-col items-center h-[calc(100vh_-_300px)]">
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
                        ₹ 7.92
                    </div>
                </div>
                <div class="flex flex-col"><a
                        class="w-full px-5 py-3 md:py-4 flex items-center justify-center bg-heading rounded font-semibold text-sm sm:text-[15px] text-gray-50 bg-[#02B288] focus:outline-none transition duration-300 hover:bg-opacity-90"
                        href="{{route('checkOut')}}"><span class="py-0.5">Proceed To Checkout</span></a></div>
            </div>
            {{--            cart footer ends here--}}
        </div>
    </div>
</div>
{{--cart ends here--}}

</body>
</html>
