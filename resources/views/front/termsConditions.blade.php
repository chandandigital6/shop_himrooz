@extends('front.layouts')

@section('content')
{{--banner here--}}
<div
    class="flex justify-center md:min-h-[250px] lg:min-h-[288px] py-20 w-full bg-cover bg-no-repeat bg-center page-header-banner"
    style="background-image: url('https://borobazar.vercel.app/assets/images/page-hero-bg.png');">
    <div class="relative flex flex-col items-center justify-center w-full"><h2
            class="text-xl md:text-2xl lg:text-3xl 2xl:text-[40px] font-bold text-center text-brand-dark"><span
                class="block mb-3 font-bold font-manrope md:mb-4 lg:mb-5 2xl:mb-7 ">Terms &amp; Condition</span></h2>
        <div class="flex items-center borobazarBreadcrumb">
            <ol class="flex items-center w-full overflow-hidden">
                <li class="text-sm text-brand-muted px-2.5 transition duration-200 ease-in ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 hover:text-brand-dark">
                    <a class="inline-flex items-center" href="{{route('home')}}">
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
                    <a class="capitalize font-semibold text-heading" href="/terms">terms</a></li>
            </ol>
        </div>
    </div>
</div>
{{--banner ends--}}


{{--terms and conditions--}}
<div class="py-12 lg:py-16 2xl:py-20">
    <div class="mx-auto max-w-[1920px] px-4 md:px-6 lg:px-8 2xl:px-10">
        <div class="w-full xl:max-w-[1200px] mx-auto">
            <div class="mb-8 lg:mb-12 last:mb-0 order-list-enable">
                <h2 class="text-brand-dark text-base xl:text-lg xl:leading-7 font-semibold font-manrope mb-4 lg:mb-6 font-body">
                    Last updated: February 18, 2021</h2>
                <div class="text-gray-500 text-sm lg:text-[15px] leading-7 space-y-5"><p>“BoroBazar” is a trademark of
                        BoroBazar Private Limited (“Company”), a company incorporated under the Companies Act, 2013 with
                        its registered and corporate office at Plot 64H, Sector 18, Gudgeon 122001 in the course of its
                        business. The domain name grocers.com is owned by the Company.</p>
                    <p>If you are a California resident, the information below also applies to you. Certain terms used
                        in this section have the meanings given to them in the California Consumer Privacy Act of 2018
                        (“CCPA”).</p>
                    <p>Customer are advised to read and understand our Privacy Policy carefully, as by accessing the
                        website/app you agree to be bound by the terms and conditions of the Privacy Policy and consent
                        to the collection, storage and use of information relating to you as provided herein.</p>
                    <p>If you do not agree with the terms and conditions of our Privacy Policy, including in relation to
                        the manner of collection or use of your information, please do not use or access the
                        website/app.</p>
                    <p>Our Privacy Policy is incorporated into the Terms and Conditions of Use of the website/app, and
                        is subject to change from time to time without notice. It is strongly recommended that you
                        periodically review our Privacy Policy as posted on the App/Web.</p>
                    <p>Should you have any clarifications regarding this Privacy Policy, please do not hesitate to
                        contact us at &nbsp;<a href="mailto:info@borobazar.com">info@borobazar.com</a>&nbsp;.</p></div>
            </div>
        </div>
    </div>
</div>

{{--terms and conditions ends--}}
@endsection
