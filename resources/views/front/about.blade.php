@extends('front.layouts')

@section('content')
    {{--banner here--}}
    <div class="flex justify-center h-[250px] lg:h-96 2xl:h-[500px] w-full bg-cover bg-no-repeat bg-center"
         style="background-image: url('https://borobazar.vercel.app/assets/images/about-us.png');">
    </div>
    {{--main content here--}}
    <div class="py-8 lg:py-16 2xl:py-20">
        <div class="mx-auto max-w-[1920px] px-4 md:px-6 lg:px-8 2xl:px-10">
            <div class="flex flex-col w-full mx-auto max-w-[1200px]"><h2
                    class="text-lg md:text-xl lg:text-[24px] text-brand-dark font-semibold mb-4 lg:mb-7">About us</h2>
                <div class="text-sm leading-7 text-gray-500  opacity-70 lg:text-[15px] lg:leading-loose"><p>We may
                        automatically track certain information about you based upon your behavior on the website. We use
                        this information to do internal research on our users’ demographics, interests, and behavior to
                        better understand, protect and serve our users. This information is compiled and analyzed on an
                        aggregated basis. This information may include the URL that you just came from (whether this URL is
                        on the website or not), which URL you next go to (whether this URL is on the website or not), your
                        computer browser information, your IP address, and other information associated with your
                        interaction with the website. <strong>We may also share your Mobile IP/Device IP with third
                            party(ies) and to the best of our knowledge, be-life and representations given to us by these
                            third party(ies) this information is not stored.</strong></p>
                    <p>Our Privacy Policy is incorporated into the Terms and Conditions of Use of the website/app, and is
                        subject to change from time to time without notice. It is strongly recommended that you periodically
                        review our Privacy Policy as posted on the App/Web.</p>
                    <p>Should you have any clarifications regarding this Privacy Policy, please do not hesitate to contact
                        us at &nbsp;<a href="mailto:info@borobazar.com">info@borobazar.com</a>&nbsp;.</p></div>
                <div class="grid grid-cols-2 gap-4 my-8 lg:my-14"><img alt="text-map" loading="lazy" width="576"
                                                                       height="390" decoding="async" data-nimg="1"
                                                                       class="ltr:mr-5 rtl:ml-5"
                                                                       src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fabout-us%2F1.png&w=640&q=75"
                                                                       style="color: transparent; width: auto;"><img
                        alt="text-map" loading="lazy" width="576" height="390" decoding="async" data-nimg="1" class=""
                        src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fabout-us%2F2.png&w=640&q=75"
                        style="color: transparent; width: auto;"></div>
                <div class="text-sm leading-7 text-gray-500 opacity-70 lg:text-[15px] lg:leading-loose"><p>To protect
                        against the loss, misuse and alteration of the information under its control, the Company has in
                        place appropriate physical, electronic and managerial procedures. For example, the Company servers
                        are accessible only to authorized personnel and your information is shared with employees and
                        authorized personnel on a need to know basis to complete the transaction and to provide the services
                        requested by you. Although the Company endeavour to safeguard the confidentiality of your personally
                        identifiable information, transmissions made by means of the Internet cannot be made absolutely
                        secure. By using the website, you agree that the Company will have no liability for disclosure of
                        your information due to errors in transmission and/or unauthorized acts of third parties.</p>
                    <p>Please note that the Company will not ask you to share any sensitive data or information via email or
                        telephone. If you receive any such request by email or telephone, please do not respond/divulge any
                        sensitive data or information and forward the information relating to the same to &nbsp;<a
                            href="mailto:info@borobazar.com">info@borobazar.com</a>&nbsp; for necessary action.</p></div>
                <div class="flex flex-col grid-cols-3 gap-4 my-8 lg:my-14 sm:grid"><img alt="text-map" loading="lazy"
                                                                                        width="379" height="262"
                                                                                        decoding="async" data-nimg="1"
                                                                                        class="ltr:mr-4 rtl:ml-4"
                                                                                        src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fabout-us%2F3.png&w=384&q=75"
                                                                                        style="color: transparent; width: auto;"><img
                        alt="text-map" loading="lazy" width="379" height="262" decoding="async" data-nimg="1"
                        class="ltr:mr-4 rtl:ml-4"
                        src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fabout-us%2F4.png&w=828&q=75"
                        style="color: transparent; width: auto;"><img alt="text-map" loading="lazy" width="379" height="262"
                                                                      decoding="async" data-nimg="1" class=""
                                                                      src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fabout-us%2F5.png&w=828&q=75"
                                                                      style="color: transparent; width: auto;"></div>
                <div class="text-sm leading-7 text-gray-500 opacity-70 lg:text-[15px] lg:leading-loose"><p>Built on a
                        proprietary technology stack, the Grocers platform serves as a convergence of consumers looking for
                        everyday essentials, partner stores who serve their needs efficiently, and manufacturers looking for
                        a channel to reach a nation of consumers. While our technology caters to the burgeoning population
                        of urban India, it is ready and poised to serve the next 100+ million Indians who are yet to start
                        shopping online.</p>
                    <p>We believe the ecosystem we power can transform the lives of a billion Indians significantly over the
                        coming decade. They will have access to everyday essentials like groceries at the best value, be
                        able to discover products that improve their health and wellbeing, and spend more meaningful time
                        with their families – with the assurance that their essential needs are being looked after by us. On
                        the other side of this virtuous cycle are the millions of local businesses catering to a nation’s
                        needs, helping create more opportunities for employment, growth, and above all, a better life.</p>
                </div>
                <div class="flex mt-8 mb-6 lg:mt-14 lg:mb-10"><img alt="text-map" loading="lazy" width="1200" height="400"
                                                                   decoding="async" data-nimg="1" class="ltr:mr-4 rtl:ml-4"
                                                                   src="https://borobazar.vercel.app/_next/image?url=%2Fassets%2Fimages%2Fabout-us%2F6.png&w=1200&q=75"
                                                                   style="color: transparent;"></div>
                <h2 class="text-lg md:text-xl lg:text-[24px] text-brand-dark font-semibold mb-4 lg:mb-7">Be safe, be
                    secure!!</h2>
                <div class="text-sm leading-7 text-gray-500 opacity-70 lg:text-[15px] lg:leading-loose"><p>BoroBazar is
                        leading the charge in transforming India’s vast, unorganized grocery landscape through cutting-edge
                        technology and innovation. We believe every Indian deserves the opportunity to continually improve
                        their life – a process that often begins at home. As part of our mission of helping consumers make
                        healthier, better choices when buying everyday products, we make a wide range of high-quality
                        grocery and household products accessible, affordable, and available right at their doorsteps.</p>
                </div>
                <p class="text-brand-dark font-medium text-base lg:text-lg leading-7 2xl:text-[20px] lg:leading-loose lg:mt-4 mb-3.5">
                    For media enquiries please contact us at: &nbsp;<a
                        href="mailto:sample@gmail.com" class="text-[#02b290]">sample@gmail.com</a>.</p>
                <div class="text-sm leading-7 text-gray-800 opacity-70 lg:text-[15px] lg:leading-loose"><p>For all other
                        inquiries, visit our &nbsp;<a href="{{route('contact')}}" class="text-[#02b290]">Contact Us</a>&nbsp; page.</p></div>
            </div>
        </div>
    </div>
    {{--main content end here--}}

@endsection
