@extends('layouts.theme')
@section('body')
    <!-- WELCOME -->
    <div class="py-10 px-3 md:p-12 bg-primary">
        <div class="md:flex md:justify-between">
            <div>
                <h1 class="uppercase welcome text-2xl md:ml-10 md:mt-5 text-slate-100">
                    Welcome! <br />
                    Ready for a <br />
                    clean space?
                </h1>
            </div>
            <div>
                <div class="bg-tag1 -mt-28 md:-mt-0 absolute right-0">
                    {{-- <img src="./images/tag1.png" alt="tag-1"> --}}
                    <h1 class="text-center text-lg xl:text-2xl">
                        LICENSED <br />& <br /> INSURED
                    </h1>
                </div>
            </div>
        </div>

    </div>
    <!-- WE ARE -->
    <div>
        <div class="text-center md:text-left mt-3 md:mt-10 md:ml-20">
            <div>
                <h1 class="we-are-cleaning text-3xl md:ml-10">
                    WE ARE A CLEANING COMPANY
                </h1>
                <h1 class="we-are-cleaning text-3xl md:ml-10 my-1">THAT ACTUALLY CLEANS.</h1>
                {{-- <h1 class="we-are-cleaning text-3xl ml-10 my-1" style="width: 320px;"></h1> --}}
            </div>
        </div>
        <div class="text-center md:text-left md:flex md:justify-between md:mx-20">
            <div class="we-are-text mt-8 mb-10 uppercase">
                <p class="text-md font-semibold">PureStart is a local owner-operated commercial cleaning company.</p>
                <p class="text-lg font-semibold">We know exactly what needs to be done and how. </p>
                <p class="text-2xl font-semibold">Our results are directly related</p>
                <p class="text-md font-semibold">to high quality products, meticulous processes, and passion.</p>
                <p class="text-md font-semibold">We ensure your space is clean and well maintained. We want </p>
                <p class="text-md font-semibold">you and your employees happy, healthy and productive</p>
                <p class="text-2xl font-semibold">We itch for you and your team to leave</p>
                <p class="text-md font-semibold">a good first impression on potential business partners and customers. </p>
            </div>
            <div class="my-auto">
                <a href="{{ route('contact') }}">
                    <button class="btn-book-cleaning mb-3 md:mb-0">Book a Cleaning</button>
                </a>
            </div>
        </div>
    </div>
    <!-- SUSCRIBE -->
    <div class="bg-clear1">
        <div class="w-full text-center text-slate-100">
            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
            <h1 class="text-3xl">Join PureStart Newsletter</h1>
            <h1 class="dont-miss text-lg mt-3">
                Don’t miss exclusive discounts and cleaning tips &
                tricks. Joy delivered right to your inbox. 
            </h1>
        </div>
    </div>
    <div class="bg-primary">
        <br />
        <div class="grid grid-cols-1 justify-center mx-3 md:gap-3 md:grid-cols-3 md:justify-evenly">
            <input type="text" class="input-suscribe" placeholder="First Name">
            <input type="text" class="mt-3 md:mt-0 input-suscribe" placeholder="Last Name">
            <input type="text" class="mt-3 md:mt-0 input-suscribe" placeholder="Email Address">
        </div>
        <div class="flex justify-center mt-10">
            <button type="button" class="btn-suscribe uppercase bg-[#55957a]">Suscribe</button>
        </div>
        <br /><br /> 
    </div>

    <div class="bg-primary-light p-3 w-full">
        <marquee class="lg:text-lg" scrollamount="10">
            <p class="lato-regular font-semibold inline-block">INQUIRE TO WORK WITH US</p>
            <p class="inline-block">~</p>
            <p class="lato-regular font-semibold inline-block">INQUIRE TO WORK WITH US</p>
            <p class="inline-block">~</p>
            <p class="lato-regular font-semibold inline-block">INQUIRE TO WORK WITH US</p>
        </marquee>
    </div>
@endsection