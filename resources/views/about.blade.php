@extends('layouts.theme')
@section('body')
    <div class="bg-yellow-vertical p-2">
        <div class="bg-about-header">
            <img src="{{ asset('images/bg-real-cleaning.png') }}" alt="header" class="h-[400px]">
            <h1 class="text-4xl title_about">REAL CLEANING THAT BRINGS JOY!</h1>
        </div>
    </div>
    <div class="bg-rose p-10 w-full">
        <div class="w-full">
            <svg viewBox="0 0 100 100" width="280" height="280" class="mx-auto">
                <defs>
                  <path id="circle"
                    d="
                      M 50, 50
                      m -37, 0
                      a 37,37 0 1,1 74,0
                      a 37,37 0 1,1 -74,0"/>
                </defs>
                <text font-size="17" class="arco-purestart">
                  <textPath xlink:href="#circle">
                    PURESTART
                  </textPath>
                </text>
            </svg>
            <div class="flex justify-center">
                <hr class="lateral-barra">
                <div class="w-[200px] -mt-[230px] logo-arco ml-3 mr-3">
                    <img src="{{ asset('images/purestart_icono.png') }}" alt="logo" class="w-full" />
                    <p class="w-full arco-women text-sm uppercase text-center font-semibold mt-12 mb-3">Woman • Owned</p>
                </div>
                <hr class="lateral-barra">
            </div>
        </div>
        
    </div>

    <div class="grid grid-cols-2" style="background-color: #e6f8f1;">
        <div>
            <img src="{{ asset('images/valentina-photo.png') }}" class="w-[100%] mx-auto" alt="valentina-photo">
        </div>
        <div class="mt-10 ml-8">
            <h1 class="text-4xl mb-10 profile">MEET THE OWNER</h1>
            <p class="profile text-lg">Hey, I’m Valentina. I am a citrus lover, sport obhsessed and an art and craft genius.</p>
            <p class="profile text-lg mt-5">I decided to create PURESTART in light of te fact of my desire and motivation to dive into the entrepreneurial world. </p>
            <p class="profile text-lg mt-5">Currently using my corporate background, my experience in customer service, and my passion for cleaning, for my business.</p>
            <p class="profile text-lg mt-5">I grew up with high standards of cleaning.</p>
            <p class="profile text-lg mt-5">My home was always in order. I was taught step by step how to wash the dishes, specially if eggs were part of the meal. I watched my mom making the beds with such a technic. She would also iron sheets and towels! I know, kind of  crazy!! But I have to admit, they would look different once stored. </p>
            <p class="profile text-lg mt-5">For all of the above, I took the leap of faith to make this project happen and it has been the greatest adventure yet. I absolutely love what I do, and what I do it for. I cant wait to meet you and have you as part of my happy customers!!   </p>
            <h1 class="text-3xl mt-96 text-center profile" style="letter-spacing: 3px;">It is a great pleasure to meet you!</h1>
        </div>
    </div>

    <div class="bg-rose h-96 text-center">
        <br /><br /><br />
        <h1 class="text-5xl our-values mb-4">OUR VALUES</h1>
        <p class="text-2xl our-values-text uppercase">Honesty Loyalty Respect Integrity</p>
        <p class="text-2xl our-values-text uppercase">Reliability Authenticity Compassion Balance </p>
        <p class="text-3xl our-values-text uppercase">Self-Respect Ethic Responsibility </p>
        <p class="text-4xl our-values-text uppercase">Religion     Optimism     Kindness    </p>
    </div>
@endsection