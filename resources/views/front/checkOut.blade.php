@extends('front.layouts')

@section('content')
{{--checckout section here--}}
<div class="py-10 border-t 2xl:py-12 border-border-base checkout mx-auto max-w-[1920px] px-4 md:px-6 lg:px-8 2xl:px-10">
    <div class="flex flex-col mx-auto xl:max-w-screen-xl">
        <div class="flex flex-col flex-wrap grid-cols-1 gap-x-7 xl:gap-x-8 lg:grid lg:grid-cols-12">

            <div class="w-full col-start-1 col-end-9">
                <div class="border rounded-md border-border-base text-gray-500">
                    <div class=" border-b border-border-base">
                        <div id="index_0" class="flex items-center p-4 pb-6 cursor-pointer sm:p-8 ">
                            <span
                                class="flex items-center justify-center font-semibold border-2 border-[#02b290] rounded-full h-9 w-9 text-[#02b290] mr-3 ml-3">1</span>
                            <h3 class="text-gray-900 text-[15px] sm:text-base font-semibold">Delivery Address</h3>
                        </div>
                        <div data-aria-label="index_0"
                             class="pb-6 pl-5 pr-5 sm:pl-9 sm:pr-9 lg:pl-20 lg:pr-20 sm:pr-9 sm:pl-9 pr-5 pl-5 ">
                            <div class="mb-6">
                                <div class="flex flex-col justify-between h-full -mt-4 text-15px md:mt-0">
                                    <div class="space-y-4 md:grid md:grid-cols-2 md:gap-5 auto-rows-auto md:space-y-0">
                                        <label class="sr-only" id="headlessui-label-:r1a:" role="none">address</label>
                                        <div class="border-brand  border-2 relative focus:outline-none rounded-md p-5 block cursor-pointer min-h-[112px] h-full group address__box">
                                            <h3 class="mb-2 -mt-1 font-semibold text-brand-dark ">Home</h3>
                                            <div class="leading-6 text-brand-muted">
                                                Wolfson Institute of Preventive Medicine, London EC1M 7BA, UK
                                            </div>
                                            <div
                                                class="absolute z-10 flex transition-all right-3  top-3  address__actions">
                                                <button
                                                    class="flex items-center justify-center w-6 h-6 text-base rounded-full bg-[#02b290] text-gray-50 text-opacity-80">
                                                    <span class="sr-only">Home</span>
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                         version="1.2" baseProfile="tiny" viewBox="0 0 24 24"
                                                         height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M21 6.879l-3.879-3.879c-.293-.293-.678-.439-1.061-.439-.384 0-.767.146-1.06.439l-10.939 10.939c-.293.293-.558.727-.75 1.188-.192.463-.311.959-.311 1.373v4.5h4.5c.414 0 .908-.119 1.371-.311.463-.192.896-.457 1.189-.75l10.94-10.939c.293-.293.439-.678.439-1.061 0-.384-.146-.767-.439-1.06zm-15.232 8.182l8.293-8.293 1.232 1.232-8.293 8.293-1.232-1.232zm1.732 3.939h-1.5l-1-1v-1.5c0-.077.033-.305.158-.605.01-.02 2.967 2.938 2.967 2.938-.322.134-.548.167-.625.167zm1.439-.768l-1.232-1.232 8.293-8.293 1.232 1.232-8.293 8.293zm9-9l-3.172-3.172 1.293-1.293 3.17 3.172-1.291 1.293z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="border-border-base border-border-base border-2 relative focus:outline-none rounded p-5 block cursor-pointer min-h-[112px] h-full group address__box">
                                            <h3 class="mb-2 -mt-1 font-semibold text-brand-dark ">Office</h3>
                                            <div class="leading-6 text-brand-muted">
                                                Wolfson Institute of Preventive Medicine, London EC1M 7BA, UK
                                            </div>
                                            <div
                                                class="absolute z-10 flex transition-all right-3  top-3  address__actions">
                                                <button
                                                    class="flex items-center justify-center w-6 h-6 text-base rounded-full bg-[#02b290] text-gray-50 text-opacity-80">
                                                    <span class="sr-only">Home</span>
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                         version="1.2" baseProfile="tiny" viewBox="0 0 24 24"
                                                         height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M21 6.879l-3.879-3.879c-.293-.293-.678-.439-1.061-.439-.384 0-.767.146-1.06.439l-10.939 10.939c-.293.293-.558.727-.75 1.188-.192.463-.311.959-.311 1.373v4.5h4.5c.414 0 .908-.119 1.371-.311.463-.192.896-.457 1.189-.75l10.94-10.939c.293-.293.439-.678.439-1.061 0-.384-.146-.767-.439-1.06zm-15.232 8.182l8.293-8.293 1.232 1.232-8.293 8.293-1.232-1.232zm1.732 3.939h-1.5l-1-1v-1.5c0-.077.033-.305.158-.605.01-.02 2.967 2.938 2.967 2.938-.322.134-.548.167-.625.167zm1.439-.768l-1.232-1.232 8.293-8.293 1.232 1.232-8.293 8.293zm9-9l-3.172-3.172 1.293-1.293 3.17 3.172-1.291 1.293z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>

                                        <button
                                            class="w-full border-2 transition-all border-border-base rounded font-semibold p-5 px-10 cursor-pointer text-[#02b290] flex justify-start hover:border-[#02b290] items-center min-h-[112px] h-full"
                                            role="none">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                 t="1551322312294" viewBox="0 0 1024 1024" version="1.1"
                                                 class="ltr:mr-2 rtl:ml-2" height="18" width="18"
                                                 xmlns="http://www.w3.org/2000/svg" >
                                                <defs role="none"></defs>
                                                <path
                                                    d="M474 152m8 0l60 0q8 0 8 8l0 704q0 8-8 8l-60 0q-8 0-8-8l0-704q0-8 8-8Z"
                                                    role="none"></path>
                                                <path
                                                    d="M168 474m8 0l672 0q8 0 8 8l0 60q0 8-8 8l-672 0q-8 0-8-8l0-60q0-8 8-8Z"
                                                    role="none"></path>
                                            </svg>
                                            Add Address
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{--                                 add new or edit address modal--}}

                            <div class="hidden fixed inset-0 z-50 overflow-x-hidden overflow-y-auto">
                                <div class="min-h-screen lg:px-4 text-center">
                                    <div class="fixed inset-0 z-40 cursor-pointer bg-black/25 opacity-100"></div>
                                    <div class="relative z-50 inline-block w-full p-4 overflow-hidden align-middle transition-all transform md:w-auto md:p-6 xl:p-8 text-left text-right opacity-100 scale-100">
                                        <div class="relative rounded-md">
                                            <button aria-label="Close panel" class="absolute opacity-0 top-2 md:top-4 right-2 left-2 md:right-4 md:left-4"></button>
                                            <div class="w-full md:w-[600px] text-left lg:w-[900px] xl:w-[1000px] mx-auto p-5 sm:p-8 bg-white rounded-md ">
                                                    <button class="absolute  z-10 inline-flex items-center justify-center w-8 h-8 lg:w-9 lg:h-9 transition duration-200 text-brand-dark text-opacity-50 focus:outline-none  hover:text-opacity-100 top-0.5 md:top-2 lg:top-7 xl:top-10 right-0.5  md:right-2  lg:right-7 xl:right-10  bg-[#02b290] text-white rounded-full">
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                             viewBox="0 0 512 512" class="text-xl lg:text-2xl" height="1em"
                                                             width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M289.94 256l95-95A24 24 0 00351 127l-95 95-95-95a24 24 0 00-34 34l95 95-95 95a24 24 0 1034 34l95-95 95 95a24 24 0 0034-34z"></path>
                                                        </svg>
                                                    </button>
                                                    <h2 class="text-gray-800 text-base xl:text-lg xl:leading-7 font-semibold font-manrope mb-8 -mt-1.5">
                                                        Add Delivery Address</h2>
                                                <form novalidate="">
                                                    <div class="mb-6">
                                                        <div class="block">
                                                            <label for="title" class="block font-normal text-sm leading-none mb-3 cursor-pointer text-gray-900 text-opacity-70">Address
                                                                Title</label>
                                                            <input id="title" name="title" type="text"
                                                                                    placeholder="Address Title"
                                                                                    class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                                                                    autocomplete="off"
                                                                                    spellcheck="false"
                                                                                    aria-invalid="false"></div>
                                                    </div>
                                                    <div class="grid grid-cols-1 mb-6 gap-7">
                                                        <div class="text-brand-dark">
                                                            <label for="formatted_address"
                                                                                            class="block text-brand-dark opacity-70 font-normal text-13px lg:text-sm leading-none mb-3 cursor-pointer">Address</label><textarea
                                                                id="formatted_address" name="formatted_address"
                                                                class="px-4 py-3 flex items-center w-full rounded appearance-none transition duration-300 ease-in-out text-brand-dark text-13px lg:text-sm focus:outline-none focus:ring-0 placeholder-[#B3B3B3] border border-border-two focus:bg-white focus:border-2 focus:border-brand"
                                                                autocomplete="off" spellcheck="false" rows="4"
                                                                placeholder=""></textarea></div>
                                                    </div>
                                                    <div class="flex justify-end w-full">
                                                        <button class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-12 md:h-14 bg-[#02b290] text-gray-50 tracking-widest px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 h-11 md:h-12 mt-1.5"
                                                                type="submit">Save Address
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                                 add new or edit address modal--}}


                            <div class="text-right">
                                <button
                                    class="group text-[13px] md:text-sm lg:text-[15px] leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-[#02b290] font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-11 md:h-[50px] bg-[#02b290] text-gray-50 font-manrope px-5 lg:px-6 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 focus:bg-opacity-70 bg-brand text-brand-light rounded font-semibold font-[14px] px-4 py-3">
                                    Next Steps
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=" border-b border-border-base bg-gray-50">
                        <div  class="flex items-center p-4 pb-6 cursor-pointer sm:p-8">
                            <span class="flex items-center justify-center font-semibold border-2 border-[#02b290] rounded-full h-9 w-9 text-[#02b290] mr-3 ml-3">2</span>
                            <h3 class="text-gray-900 text-[15px] sm:text-base font-semibold">Delivery Schedule</h3>
                        </div>
                        <div class=" hidden pb-6 pl-5 pr-5 sm:pl-9 sm:pr-9 lg:pl-20 lg:pr-20 sm:pr-9 sm:pl-9 pr-5 pl-5 ">
                            <div class="mb-6">
                                <div class="w-full">
                                    <div class="w-full mx-auto">

                                        <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 lg:grid-cols-6">
                                                <div class="relative rounded-lg px-5 py-3 cursor-pointer focus:outline-none bg-[#02b290] text-gray-50">
                                                    <div class="text-center"><p
                                                            class="text-base font-semibold  text-brand-light">Sat</p><span
                                                            class="text-15px text-brand-light"> Jul 03</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="relative rounded-lg px-5 py-3 cursor-pointer focus:outline-none bg-gray-100">
                                                    <div class="text-center"><p
                                                            class="text-base font-semibold  text-gray-900">Sun</p><span
                                                            class="text-15px text-gray-500"> Jul 04</span></div>
                                                </div>
                                                <div
                                                    class="relative rounded-lg px-5 py-3 cursor-pointer focus:outline-none bg-gray-100">
                                                    <div class="text-center"><p
                                                            class="text-base font-semibold  text-gray-900">Mon</p><span
                                                            class="text-15px text-gray-500"> Jul 05</span></div>
                                                </div>
                                            </div>

                                        <div class="mt-10">
                                            <div class="flex flex-wrap justify-between grid-cols-2 gap-4 lg:grid sm:grid-cols-3 lg:grid-cols-5">
                                                <div class="cursor-pointer focus:outline-none">
                                                    <div class="flex items-center">
                                                        <input type="radio" for="time">
                                                        <p class="text-sm text-black ml-2 mr-2"
                                                           id="headlessui-label-:ro:">9am to 10am</p></div>
                                                </div>
                                                <div class="cursor-pointer focus:outline-none">
                                                    <div class="flex items-center" >
                                                        <input type="radio" for="time">
                                                        <p class="text-sm text-black ml-2 mr-2"
                                                           id="headlessui-label-:ro:">11am to 12am</p></div>
                                                </div>
                                                <div class="cursor-pointer focus:outline-none">
                                                    <div class="flex items-center">
                                                        <input type="radio" for="time">
                                                        <p class="text-sm text-black ml-2 mr-2"
                                                           id="headlessui-label-:ro:">01pm to 02pm</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button data-variant="formButton"
                                        class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-11 md:h-[50px] bg-[#02b290] text-gray-50 font-manrope px-5 lg:px-6 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 focus:bg-opacity-70 bg-brand text-brand-light rounded font-semibold font-[14px] px-4 py-3">
                                    Next Steps
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=" border-b border-border-base bg-gray-50 ">
                        <div id="index_2" class="flex items-center p-4 pb-6 cursor-pointer sm:p-8 accordion__button">
                            <span class="flex items-center justify-center font-semibold border-2 border-current rounded-full h-9 w-9 text-[#02b290] mr-3 ml-3">3</span>
                            <h3 class="text-gray-900 text-[15px] sm:text-base font-semibold">Contact Number</h3>
                        </div>

                        <div class="hidden pb-6 pl-5 pr-5 sm:pl-9 sm:pr-9 lg:pl-20 lg:pr-20 sm:pr-9 sm:pl-9 pr-5 pl-5 accordion__content">
                            <div class="mb-6">
                                <div class="w-full max-w-[1300px] mx-auto">
                                    <div class="flex flex-wrap">
                                        <div class="w-full">
                                            <div class="text-[15px] text-brand-dark ">
                                                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 auto-rows-auto">
                                                    <div class="border-border-base border-[#02b290] border-2 relative focus:outline-none rounded p-5 block cursor-pointer min-h-[112px] h-full group address__box"><h2
                                                            class="mb-2 font-semibold">
                                                            Primary Number</h2>
                                                        <div class="opacity-70">+91 0123456789
                                                        </div>
                                                        <div class="absolute z-30 flex transition-all right-3 top-3">
                                                            <button class="flex items-center justify-center w-6 h-6 text-base rounded-full bg-[#02b290] text-gray-50 text-opacity-80">
                                                                <svg stroke="currentColor" fill="currentColor"
                                                                     stroke-width="0" version="1.2" baseProfile="tiny"
                                                                     viewBox="0 0 24 24" height="1em" width="1em"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M21 6.879l-3.879-3.879c-.293-.293-.678-.439-1.061-.439-.384 0-.767.146-1.06.439l-10.939 10.939c-.293.293-.558.727-.75 1.188-.192.463-.311.959-.311 1.373v4.5h4.5c.414 0 .908-.119 1.371-.311.463-.192.896-.457 1.189-.75l10.94-10.939c.293-.293.439-.678.439-1.061 0-.384-.146-.767-.439-1.06zm-15.232 8.182l8.293-8.293 1.232 1.232-8.293 8.293-1.232-1.232zm1.732 3.939h-1.5l-1-1v-1.5c0-.077.033-.305.158-.605.01-.02 2.967 2.938 2.967 2.938-.322.134-.548.167-.625.167zm1.439-.768l-1.232-1.232 8.293-8.293 1.232 1.232-8.293 8.293zm9-9l-3.172-3.172 1.293-1.293 3.17 3.172-1.291 1.293z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="border-border-base border-border-base border-2 relative focus:outline-none rounded p-5 block cursor-pointer min-h-[112px] h-full group address__box">
                                                        <h2
                                                            class="mb-2 font-semibold">
                                                            Secondary Number</h2>

                                                        <div class="absolute z-30 flex transition-all right-3  top-3  address__actions">
                                                            <button
                                                                class="flex items-center justify-center w-6 h-6 text-base rounded-full bg-[#02b290] text-gray-50 text-opacity-80">
                                                                <svg stroke="currentColor" fill="currentColor"
                                                                     stroke-width="0" version="1.2" baseProfile="tiny"
                                                                     viewBox="0 0 24 24" height="1em" width="1em"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M21 6.879l-3.879-3.879c-.293-.293-.678-.439-1.061-.439-.384 0-.767.146-1.06.439l-10.939 10.939c-.293.293-.558.727-.75 1.188-.192.463-.311.959-.311 1.373v4.5h4.5c.414 0 .908-.119 1.371-.311.463-.192.896-.457 1.189-.75l10.94-10.939c.293-.293.439-.678.439-1.061 0-.384-.146-.767-.439-1.06zm-15.232 8.182l8.293-8.293 1.232 1.232-8.293 8.293-1.232-1.232zm1.732 3.939h-1.5l-1-1v-1.5c0-.077.033-.305.158-.605.01-.02 2.967 2.938 2.967 2.938-.322.134-.548.167-.625.167zm1.439-.768l-1.232-1.232 8.293-8.293 1.232 1.232-8.293 8.293zm9-9l-3.172-3.172 1.293-1.293 3.17 3.172-1.291 1.293z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <button
                                                        class="border-2 transition-all border-border-base rounded font-semibold p-5 px-10 cursor-pointer text-brand flex justify-start hover:border-brand items-center min-h-[112px] h-full"
                                                        role="none">
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                             t="1551322312294" viewBox="0 0 1024 1024" version="1.1"
                                                             class="ltr:mr-2 rtl:ml-2" height="18" width="18"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <defs role="none"></defs>
                                                            <path
                                                                d="M474 152m8 0l60 0q8 0 8 8l0 704q0 8-8 8l-60 0q-8 0-8-8l0-704q0-8 8-8Z"
                                                                role="none"></path>
                                                            <path
                                                                d="M168 474m8 0l672 0q8 0 8 8l0 60q0 8-8 8l-672 0q-8 0-8-8l0-60q0-8 8-8Z"
                                                                role="none"></path>
                                                        </svg>
                                                        Add Phone Number
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                                 add new or edit contact number modal--}}

                            <div class="hidden fixed inset-0 z-50 overflow-x-hidden overflow-y-auto">
                                <div class="min-h-screen lg:px-4 text-center">
                                    <div class="fixed inset-0 z-40 cursor-pointer bg-black/25 opacity-100"></div>
                                    <div class="relative z-50 inline-block w-full p-4 overflow-hidden align-middle transition-all transform md:w-auto md:p-6 xl:p-8 text-left text-right opacity-100 scale-100">
                                        <div class="relative rounded-md">
                                            <button aria-label="Close panel" class="absolute opacity-0 top-2 md:top-4 right-2 left-2 md:right-4 md:left-4"></button>
                                            <div class="w-full md:w-[600px] text-left lg:w-[900px] xl:w-[1000px] mx-auto p-5 sm:p-8 bg-white rounded-md ">
                                                <button class="absolute  z-10 inline-flex items-center justify-center w-8 h-8 lg:w-9 lg:h-9 transition duration-200 text-brand-dark text-opacity-50 focus:outline-none  hover:text-opacity-100 top-0.5 md:top-2 lg:top-7 xl:top-10 right-0.5  md:right-2  lg:right-7 xl:right-10  bg-[#02b290] text-white rounded-full">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                         viewBox="0 0 512 512" class="text-xl lg:text-2xl" height="1em"
                                                         width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M289.94 256l95-95A24 24 0 00351 127l-95 95-95-95a24 24 0 00-34 34l95 95-95 95a24 24 0 1034 34l95-95 95 95a24 24 0 0034-34z"></path>
                                                    </svg>
                                                </button>
                                                <h2 class="text-gray-800 text-base xl:text-lg xl:leading-7 font-semibold font-manrope mb-8 -mt-1.5">
                                                    Add Contact Numenr</h2>
                                                <form novalidate="">
                                                    <div class="mb-6">
                                                        <div class="block">
                                                            <label for="title" class="block font-normal text-sm leading-none mb-3 cursor-pointer text-gray-900 text-opacity-70">Contact Number
                                                                Title</label>
                                                            <input id="title" name="title" type="text"
                                                                   placeholder="Contact Number Title"
                                                                   class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                                                   autocomplete="off"
                                                                   spellcheck="false"
                                                                   aria-invalid="false">
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-1 mb-6 gap-7">
                                                        <div class="text-brand-dark">
                                                            <label for="formatted_address"
                                                                   class="block text-brand-dark opacity-70 font-normal text-13px lg:text-sm leading-none mb-3 cursor-pointer">Contact Number</label>
                                                            <input id="title" name="title" type="number"
                                                                   placeholder="Contact Number"
                                                                   class="py-2 px-4 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded placeholder-[#B3B3B3] min-h-12 transition duration-200 ease-in-out text-brand-dark focus:ring-0 text-brand-dark border-border-two focus:border-2 focus:outline-none focus:border-brand h-11 md:h-12"
                                                                   autocomplete="off"
                                                                   spellcheck="false"
                                                                   aria-invalid="false"></div>
                                                    </div>
                                                    <div class="flex justify-end w-full">
                                                        <button class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-12 md:h-14 bg-[#02b290] text-gray-50 tracking-widest px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 h-11 md:h-12 mt-1.5"
                                                                type="submit">Save Address
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                                 add new or edit number modal--}}




                            <div class="text-right">
                                <button data-variant="formButton" class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-11 md:h-[50px] bg-[#02b290] text-gray-50 font-manrope px-5 lg:px-6 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 focus:bg-opacity-70 bg-brand text-brand-light rounded font-semibold font-[14px] px-4 py-3">
                                    Next Steps
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-border-base  ">
                        <div id="index_3" class="flex items-center p-4 pb-6 cursor-pointer sm:p-8">
                            <span class="flex items-center justify-center font-semibold border-2 border-[#02b290] rounded-full h-9 w-9 text-[#02b290] mr-3 ">4</span>
                            <h3 class="text-gray-900 text-[15px] sm:text-base font-semibold">Payment Option</h3></div>
                        <div data-aria-label="index_3"
                             class="pb-6 pl-5 pr-5 sm:pl-9 sm:pr-9 lg:pl-20 lg:pr-20 sm:pr-9 sm:pl-9 pr-5 pl-5 accordion__content">
                            <div class="mb-6">
                                <div class="w-full bg-white rounded-xl xl:w-[500px]">
                                    <h3 class="text-brand-dark opacity-60 mb-3">Enter card info</h3>

                                    <div class="StripeElement StripeElement--empty">
                                        <div class="__PrivateStripeElement"
                                             style="margin: 0px !important; padding: 10px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;">
                                            <iframe name="__privateStripeFrame2286" frameborder="0"
                                                    allowtransparency="true" scrolling="no" role="presentation"
                                                    allow="payment *"
                                                    src="https://js.stripe.com/v3/elements-inner-card-3e7f1858a30b9d69b867fce451a25530.html#wait=false&amp;mids[guid]=4e82a61d-bd5e-4e5e-a26d-ed9edf825b18ed86b8&amp;mids[muid]=ace23801-07ef-4270-b0b8-f816fcbdcbd519d0af&amp;mids[sid]=947dc5c4-be7d-4242-a7d3-6693ad6d7e6802c414&amp;rtl=false&amp;componentName=card&amp;keyMode=test&amp;apiKey=pk_test_51JUDYDHE5OSjrvPugQ9mmxXvbKTVeN3ylicpta7qLBbKhLJ46qN2SxIzYLUN1rKsK2ZBeNl3jImSgnBdVXIuaWFX00xFdlgcUP&amp;referrer=https%3A%2F%2Fborobazar.vercel.app%2Fcheckout&amp;controllerId=__privateStripeController2281"
                                                    title="Secure card payment input frame"
                                                    style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; transform: translate(0px) !important; color-scheme: light only !important; height: 16.8px;"></iframe>
                                            <input class="__PrivateStripeElement-input" aria-hidden="true"
                                                   aria-label=" " autocomplete="false" maxlength="1"
                                                   style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: -1px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;">
                                        </div>
                                    </div>

                                    <button class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-11 md:h-[50px] bg-[#02b290] text-gray-50 font-manrope px-5 lg:px-6 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 focus:bg-opacity-70 h-11 md:h-12  mt-5"
                                            type="button">Pay Now
                                    </button>
                                </div>
                            </div>
                            <div class="text-right">
                                <button data-variant="formButton"
                                        class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-11 md:h-[50px] bg-[#02b290] text-gray-50 font-manrope px-5 lg:px-6 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 focus:bg-opacity-70 bg-brand text-brand-light rounded font-semibold font-[14px] px-4 py-3">
                                    Next Steps
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-border-base bg-gray-50">
                        <div id="index_4" class="flex items-center p-4 pb-6 cursor-pointer sm:p-8">
                            <span class="flex items-center justify-center font-semibold border-2 border-[#02b290] rounded-full h-9 w-9 text-[#02b290] mr-3 ">5</span>
                            <h3 class="text-gray-900 text-[15px] sm:text-base font-semibold">Delivery Instructions
                                (optional)</h3>
                        </div>
                        <div class="hidden pb-6 pl-5:pr-5 sm:pl-9 sm:pr-9 lg:pl-20 lg:pr-20 sm:pr-9 sm:pl-9 pr-5 pl-5">
                            <div class="mb-6">
                                <div class="w-full">
                                    <div class="w-full mx-auto">
                                        <form novalidate="">
                                            <div class="mb-6">
                                                <div><label for="instructionNote"
                                                            class="block text-brand-dark opacity-70 font-normal text-[13px] lg:text-sm leading-none mb-3 cursor-pointer">Delivery
                                                        Instructions Note</label><textarea id="instructionNote"
                                                                                           name="instructionNote"
                                                                                           class="px-4 py-3 flex items-center w-full rounded appearance-none transition duration-300 ease-in-out text-brand-dark text-13px lg:text-sm focus:outline-none focus:ring-0 placeholder-[#B3B3B3] bg-white border border-border-two focus:shadow focus:outline-none focus:border-heading focus:border-2 focus:outline-none focus:border-brand"
                                                                                           autocomplete="off"
                                                                                           spellcheck="false" rows="4"
                                                                                           placeholder=""></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-6">
                                                <input id="default-type" type="checkbox"
                                                                     class="w-3 h-3 transition duration-500 ease-in-out border border-[#02b290] rounded cursor-pointer form-checkbox focus:ring-offset-0 hover:border-heading focus:outline-none focus:ring-0 focus-visible:outline-none focus:checked:bg-brand hover:checked:bg-brand checked:bg-brand"
                                                                     name="default"><label for="default-type"
                                                                                           class="font-medium align-middle ml-3 text-gray-800 text-[15px]">Leave
                                                    at my door if I am not around</label>
                                                <p class="text-gray-500 text-sm leading-7 lg:leading-[1.85em] ml-8  pt-2.5">
                                                    By selecting this option you accept full responsibility for your
                                                    order after it has been delivered unattended, including any loss due
                                                    to theft or damage due to temperature sensitivity.</p></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="ltr:text-right rtl:text-left">
                                <button class="group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-11 md:h-[50px] bg-[#02b290] text-gray-50 font-manrope px-5 lg:px-6 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 focus:bg-opacity-70 bg-brand text-brand-light rounded font-semibold font-[14px] px-4 py-3">
                                    Next Steps
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="accordion__panel">
                        <div id="index_5" class="flex items-center p-4 pb-6 cursor-pointer sm:p-8">
                            <span
                                class="flex items-center justify-center font-semibold border-2 border-[#02b290] rounded-full h-9 w-9 text-[#02b290] mr-3 ">6</span>
                            <h3 class="text-gray-900 text-[15px] sm:text-base font-semibold">Delivery Tip</h3>
                        </div>
                        <div data-aria-label="index_5" class="hidden pb-6 pl-5 pr-5 sm:pl-9 sm:pr-9 lg:pl-20 lg:pr-20 sm:pr-9 sm:pl-9 pr-5 pl-5 accordion__content">
                            <div class="mb-6">
                                <div class="w-full">
                                    <div class="w-full mx-auto">
                                            <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 lg:grid-cols-6"
                                                 role="none">
                                                <div
                                                    class="relative rounded-lg px-5 py-4 cursor-pointer focus:outline-none bg-[#02b290] text-white"
                                                    id="headlessui-radiogroup-option-:rv:" role="radio"
                                                    aria-checked="true" tabindex="0" data-headlessui-state="checked"
                                                    aria-labelledby="headlessui-label-:r10:">
                                                    <div class="text-center"><p
                                                            class="text-base font-semibold  text-brand-light"
                                                            id="headlessui-label-:r10:">₹5</p></div>
                                                </div>
                                                <div
                                                    class="relative rounded-lg px-5 py-4 cursor-pointer focus:outline-none bg-gray-100"
                                                    id="headlessui-radiogroup-option-:r11:" role="radio"
                                                    aria-checked="false" tabindex="-1" data-headlessui-state=""
                                                    aria-labelledby="headlessui-label-:r12:">
                                                    <div class="text-center"><p
                                                            class="text-base font-semibold  text-brand-dark"
                                                            id="headlessui-label-:r12:">₹10</p></div>
                                                </div>
                                                <div
                                                    class="relative rounded-lg px-5 py-4 cursor-pointer focus:outline-none bg-gray-100"
                                                    id="headlessui-radiogroup-option-:r13:" role="radio"
                                                    aria-checked="false" tabindex="-1" data-headlessui-state=""
                                                    aria-labelledby="headlessui-label-:r14:">
                                                    <div class="text-center"><p
                                                            class="text-base font-semibold  text-brand-dark"
                                                            id="headlessui-label-:r14:">₹15</p></div>
                                                </div>
                                                <div
                                                    class="relative rounded-lg px-5 py-4 cursor-pointer focus:outline-none bg-gray-100"
                                                    id="headlessui-radiogroup-option-:r15:" role="radio"
                                                    aria-checked="false" tabindex="-1" data-headlessui-state=""
                                                    aria-labelledby="headlessui-label-:r16:">
                                                    <div class="text-center"><p
                                                            class="text-base font-semibold  text-brand-dark"
                                                            id="headlessui-label-:r16:">₹20</p></div>
                                                </div>
                                                <div
                                                    class="relative rounded-lg px-5 py-4 cursor-pointer focus:outline-none bg-gray-100"
                                                    id="headlessui-radiogroup-option-:r17:" role="radio"
                                                    aria-checked="false" tabindex="-1" data-headlessui-state=""
                                                    aria-labelledby="headlessui-label-:r18:">
                                                    <div class="text-center"><p
                                                            class="text-base font-semibold  text-brand-dark"
                                                            id="headlessui-label-:r18:">₹25</p></div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w-full col-start-9 col-end-13 mt-7 lg:mt-0">
                <div class="px-4 pt-4 border rounded-md border-border-base text-brand-light xl:py-6 xl:px-7">
                    <div class="flex justify-between pb-2 text-sm font-semibold rounded-md text-heading">
                        <span class="font-medium text-[15px] text-gray-900">Product</span>
                        <span
                            class="font-medium ltr:ml-auto rtl:mr-auto shrink-0 text-[15px] text-gray-900">Subtotal</span>
                    </div>
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
                        <h6 class="font-semibold text-[15px] text-gray-900 pl-3 pr-3">Fresh Green Leaf
                            Lettuce</h6>
                        <div
                            class="flex font-semibold ml-auto mr-auto text-[15px] text-brand-dark pl-2 pr-2 shrink-0">
                            ₹ 7.92
                        </div>
                    </div>
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
                        <h6 class="font-semibold text-[15px] text-gray-900 pl-3 pr-3">Fresh Green Leaf
                            Lettuce</h6>
                        <div
                            class="flex font-semibold ml-auto mr-auto text-[15px] text-brand-dark pl-2 pr-2 shrink-0">
                            ₹ 7.92
                        </div>
                    </div>
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
                        <h6 class="font-semibold text-[15px] text-gray-900 pl-3 pr-3">Fresh Green Leaf
                            Lettuce</h6>
                        <div
                            class="flex font-semibold ml-auto mr-auto text-[15px] text-brand-dark pl-2 pr-2 shrink-0">
                            ₹ 7.92
                        </div>
                    </div>
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
                        <h6 class="font-semibold text-[15px] text-gray-900 pl-3 pr-3">Fresh Green Leaf
                            Lettuce</h6>
                        <div
                            class="flex font-semibold ml-auto mr-auto text-[15px] text-brand-dark pl-2 pr-2 shrink-0">
                            ₹ 7.92
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-between w-full py-4 text-sm font-medium border-b lg:py-5 border-border-base text-[15px] text-gray-900 last:border-b-0 last:text-base last:pb-0">
                        Subtotal<span class="font-semibold shrink-0 text-[15px] text-gray-900">₹ 9.42</span>
                    </div>
                    <div
                        class="flex items-center justify-between w-full py-4 text-sm font-medium border-b lg:py-5 border-border-base text-[15px] text-gray-900 last:border-b-0 last:text-base last:pb-0">
                        Shipping<span
                            class="font-semibold shrink-0 text-[15px] text-gray-900">₹ 0</span>
                    </div>
                    <div
                        class="flex items-center justify-between w-full py-4 text-sm font-medium border-b lg:py-5 border-border-base text-[15px] text-gray-900 last:border-b-0 last:text-base last:pb-0">
                        Total<span
                            class="font-semibold shrink-0 text-[15px] text-gray-900">₹9.42</span>
                    </div>
                    <a href="{{route('orderComplete')}}">
                        <button class="group text-[13px] md:text-sm lg:text-[15px] leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none h-11 md:h-[50px] bg-[#02b290] text-gray-50 font-manrope px-5 lg:px-6 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 focus:bg-opacity-70 w-full mt-8 mb-5 bg-brand text-brand-light rounded font-semibold px-4 py-3 transition-all false">
                            Order Now
                        </button>
                    </a>
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
        </div>
    </div>
</div>
{{--checkoutout section ends--}}
@endsection
