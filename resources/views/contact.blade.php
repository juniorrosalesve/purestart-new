@extends('layouts.theme')
@section('body')
    <div class="bg-primary text-center py-20 w-full">
        <h1 class="text-3xl md:text-4xl title_about md:w-[60%] mx-auto">DROP US A LINE. <br /> WE WILL GET BACK TO YOU SOON!</h1>
    </div>
    <div class="bg-contact">
        <form action="" class="bg-contact-green">
            <div class="grid grid-cols-1 w-[90%] md:w-[50%] mx-auto">
                <input type="text" class="mt-10 input-suscribe" placeholder="Fullname">
                <input type="text" class="mt-5 input-suscribe" placeholder="Email Address">
                <input type="text" class="mt-5 input-suscribe" placeholder="Phone number">
                <input type="text" class="mt-5 input-suscribe" placeholder="Business name">
            </div>
            <div class="flex justify-center mt-10">
                <button type="button" class="btn-suscribe uppercase bg-[#55957a]">Submit</button>
            </div>
            <br />
        </form>
    </div>
@endsection