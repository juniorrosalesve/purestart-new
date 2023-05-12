@extends('layouts.theme')
@section('body')
    <!-- WELCOME -->
    <div class="bg-green p-12">
        <div class="flex justify-between">
            <div>
                <h1 class="uppercase welcome text-2xl ml-32 mt-5">
                    Welcome! <br />
                    Ready for a <br />
                    clean space?
                </h1>
            </div>
            <div>
                <div class="bg-tag1 -mr-15">
                    <img src="./images/tag1.png" alt="tag-1">
                    <h1 class="text-center text-lg xl:text-2xl">
                        LICENSED <br />& <br /> INSURED
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- WE ARE -->
    <div>
        <div class="flex justify-between mt-10 mx-20">
            <div>
                <h1 class="we-are-cleaning text-3xl ml-10" style="width: 345px;">
                    WE ARE A CLEANING
                </h1>
                <h1 class="we-are-cleaning text-3xl ml-10 my-1" style="width: 270px;">COMPANY THAT</h1>
                <h1 class="we-are-cleaning text-3xl ml-10 my-1" style="width: 320px;">ACTUALLY CLEANS.</h1>
            </div>
            <div>
                <button class="btn-book-cleaning mt-[20px] mr-10">Book a Cleaning</button>
            </div>
        </div>
        <div class="we-are-text text-center mt-8 mb-10 uppercase">
            <p class="text-md font-semibold">PureStart is a local owner-operated commercial cleaning company.</p>
            <p class="text-lg font-semibold">We know exactly what needs to be done and how. </p>
            <p class="text-2xl font-semibold">Our results are directly related</p>
            <p class="text-md font-semibold">to high quality products, meticulous processes, and passion.</p>
            <p class="text-md font-semibold">We ensure your space is clean and well maintained. We want </p>
            <p class="text-md font-semibold">you and your employees happy, healthy and productive</p>
            <p class="text-2xl font-semibold">We itch for you and your team to leave</p>
            <p class="text-md font-semibold">a good first impression on potential business partners and customers. </p>
        </div>
    </div>
    <!-- SUSCRIBE -->
    <div class="bg-clear1" style="position: relative;">
        <div class="bumble">
        </div>
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        <div class="bg-tag2">
            <img src="./images/tag2.png" width="40%">
            <h1 class="text-3xl">Join PureStart Newsletter</h1>
        </div>
        <div class="mt-3">
            <h1 class="dont-miss text-center text-lg" style="color:#06446c;margin:auto;background-color: #e6f8f1;width:820px;border-radius: 3px; padding:10px;">
                Don’t miss exclusive discounts and cleaning tips &
                tricks. Joy delivered right to your inbox. 
            </h1>
        </div>
        <div class="flex justify-evenly mt-10">
            <input type="text" class="input-suscribe" placeholder="First Name">
            <input type="text" class="input-suscribe" placeholder="Last Name">
            <input type="text" class="input-suscribe" placeholder="Email Address">

            
        </div>
        <div class="flex justify-center mt-10">
            <button type="button" class="btn-suscribe uppercase">Suscribe</button>
        </div>
        <br /><br /> 
    </div>

    <div class="flex justify-evenly p-8">
        <div>
            <p class="multi-regular">INQUIRE TO WORK WITH US</p>
        </div>
        <div>
            <p class="multi-regular">INQUIRE TO WORK WITH US</p>
        </div>
        <div>
            <p class="multi-regular">INQUIRE TO WORK WITH US</p>
        </div>
    </div>
@endsection