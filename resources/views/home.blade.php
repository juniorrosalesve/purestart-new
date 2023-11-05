@extends('layouts.theme')
@section('body')
    <section id="home" class="bg-secondary">
        <!-- WELCOME -->
        <div class="py-10 px-3 md:p-20 bg-primary">
            <div>
                <div class="ml-10">
                    <h1 class="abril text-slate-100" style="font-size:90px;" data-aos="fade-right" data-aos-duration="500">
                        Welcome!!
                    </h1>
                    <h1 class="lato-thin italic text-slate-100" style="font-size:35px;" data-aos="fade-right" data-aos-duration="1200">
                        Ready for a CLEAN space?
                    </h1>
                </div>
            </div>
            <div>
                <div class="circle license-in source text-lg text-[#82f5a8] font-semibold" data-aos="zoom-in" data-aos-duration="500"></div>
            </div>
        </div>
        <!-- WE ARE -->
        <div class="bg-pastel">
            <br /> 
            <div class="text-center md:text-left md:ml-20">
                <div class="text-center max-w-[700px]">
                    <h1 class="we-are-cleaning text-3xl font-semibold">
                        WE ARE A CLEANING COMPANY
                    </h1>
                    <h1 class="we-are-cleaning text-3xl font-semibold my-1">THAT ACTUALLY CLEANS.</h1>
                    {{-- <h1 class="we-are-cleaning text-3xl ml-10 my-1" style="width: 320px;"></h1> --}}
                </div>
            </div>
            <div class="text-center md:text-left md:flex md:justify-between md:mx-20">
                <div class="we-are-text mt-8 mb-10 uppercase">
                    <p class="text-md font-semibold md:hidden">PureStart is a local owner-operated commercial cleaning company.</p>
                    <p class="text-lg font-semibold md:hidden">We know exactly what needs to be done and how. </p>
                    <p class="text-2xl font-semibold md:hidden">Our results are directly related</p>
                    <p class="text-md font-semibold md:hidden">to high quality products, meticulous processes, and passion.</p>
                    <p class="text-md font-semibold md:hidden">We ensure your space is clean and well maintained. We want </p>
                    <p class="text-md font-semibold md:hidden">you and your employees happy, healthy and productive</p>
                    <p class="text-2xl font-semibold md:hidden">We itch for you and your team to leave</p>
                    <p class="text-md font-semibold md:hidden">a good first impression on potential business partners and customers. </p>
                
                    <p class="text-[12.5px] font-semibold hidden md:block">PureStart is a local owner-operated commercial cleaning company.</p>
                    <p class="text-[20px] font-semibold hidden md:block">We know exactly what needs to be done and how. </p>
                    <p class="text-[20.2px] font-semibold hidden md:block">Our results are directly related to high quality</p>
                    <p class="text-[22.5px] font-semibold hidden md:block">products, meticulous processes, and passion.</p>
                    <p class="text-[15.1px] font-semibold hidden md:block">We ensure your space is clean and well maintained. We want </p>
                    <p class="text-[17.3px] font-semibold hidden md:block">you and your employees happy, healthy and productive</p>
                    <p class="text-[27px] font-semibold hidden md:block">We itch for you and your team to leave</p>
                    <p class="text-[22px] font-semibold hidden md:block">a good first impression on potential business</p>
                    <p class="text-[48.5px] font-semibold hidden md:block mt-2">partners and customers.</p>
                
                </div>
                <div class="my-auto">
                    <a href="#contact">
                        <button class="btn-book-cleaning font-semibold mb-3 md:mb-0" data-aos="zoom-in" data-aos-duration="500">Book a Cleaning!</button>
                    </a>
                </div>
            </div>
        </div>
        <!-- SUSCRIBE -->
        <video class="w-full" loop autoplay muted>
            <source src="{{ asset('images/mesa.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="bg-primary py-10">
            <br />
            <form action="{{ route('mail-suscribe') }}" method="POST" id="suscribe_form_home">
                @csrf
                <div class="p-4 md:p-0 md:ml-20">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div>
                            <h1 class="text-slate-200 text-center text-2xl abril text-pastel" style="letter-spacing: 3px" data-aos="zoom-in" data-aos-duration="500">
                                Join PureStart Newsletter
                            </h1>
                            <h1 class="dont-miss text-slate-200 text-center text-lg mt-1 mb-3" data-aos="zoom-in" data-aos-duration="500">
                                Don’t miss exclusive discounts and cleaning tips &
                                tricks. <br /> Joy delivered right to your inbox. 
                            </h1>
                            <input type="text" name="firstname" class="input-suscribe mb-2" placeholder="Enter your full name" data-aos="fade-right" data-aos-duration="500">
                            <input type="text" name="email" class="mt-3 input-suscribe" placeholder="Enter your email address" data-aos="fade-right" data-aos-duration="500">
                        </div>
                        <div class="md:flex md:justify-center mt-10">
                            <button type="submit" class="btn-suscribe bg-white" id="btn_suscribe_home" data-aos="zoom-in" data-aos-duration="500">Join</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="text-center my-10 hidden" id="suscribe_page_home">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10 mx-auto"><path fill="#72B59A" d="M22 5.5H9C7.9 5.5 7 6.4 7 7.5V16.5C7 17.61 7.9 18.5 9 18.5H22C23.11 18.5 24 17.61 24 16.5V7.5C24 6.4 23.11 5.5 22 5.5M22 16.5H9V9.17L15.5 12.5L22 9.17V16.5M15.5 10.81L9 7.5H22L15.5 10.81M5 16.5C5 16.67 5.03 16.83 5.05 17H1C.448 17 0 16.55 0 16S.448 15 1 15H5V16.5M3 7H5.05C5.03 7.17 5 7.33 5 7.5V9H3C2.45 9 2 8.55 2 8S2.45 7 3 7M1 12C1 11.45 1.45 11 2 11H5V13H2C1.45 13 1 12.55 1 12Z" /></svg>
                <h1 class="text-4xl lato-medium text-pastel">
                    Thank You for subscribing!
                </h1>
                <p class="text-lg lato-regular text-pastel mt-5">You have succesfully subscribed. Check your email for your sparkly 10% discount!</p>
            </div>
            <br /><br /> 
        </div>
    </section>

    <section id="about">
        @include("about")
    </section>
    <section id="services">
        @include("services")
    </section>
    <section id="faq">
        @include("faq")
    </section>
    <section id="contact">
        @include("contact")
    </section>

    <div class="bg-primary-light p-3 w-full">
        <marquee class="lg:text-lg inquire" scrollamount="10">
            <a href="{{ route('contact') }}" class="lato-regular font-semibold inline-block mr-3">INQUIRE TO WORK WITH US</a>
            <p class="inline-block mx-3">•</p>
            <a href="{{ route('contact') }}" class="lato-regular font-semibold inline-block">INQUIRE TO WORK WITH US</a>
            <p class="inline-block mr-3">•</p>
            <a href="{{ route('contact') }}" class="lato-regular font-semibold inline-block">INQUIRE TO WORK WITH US</a>
            <p class="inline-block mx-3">•</p>
            <a href="{{ route('contact') }}" class="lato-regular font-semibold inline-block">INQUIRE TO WORK WITH US</a>
        </marquee>
    </div>

    <script src="{{ asset('circleText.js') }}"></script>

    <script>
        $(".circle").circleText({
            turn: true,
            padding: 20,
            radius: 70,
            duration: 10,
            repeat: 1,
            background: "#FDFDF2"    
        });
    </script>
@endsection