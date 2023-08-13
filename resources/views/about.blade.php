@extends('layouts.theme')
@section('body')
    <div class="bg-primary text-center py-20 md:p-20 w-full">
        <h1 class="text-4xl title_about md:w-[60%] mx-auto">REAL CLEANING THAT BRINGS JOY!</h1>
    </div>
    <div class="bg-secondary w-full">
        <br /> 
        <div class="w-full text-center mb-60">
            <h1 class="arco-purestart text-3xl">PURESTART</h1>
        </div>
        <div class="w-full">
            <div class="flex justify-center block">
                <hr class="lateral-barra">
                <div class="w-[200px] -mt-[230px] logo-arco ml-3 mr-3">
                    <img src="{{ asset('images/purestart_icono.png') }}" alt="logo" class="w-full" />
                    <p class="w-full arco-women text-sm uppercase text-center font-semibold mt-12 mb-3">Woman • Owned</p>
                </div>
                <hr class="lateral-barra">
            </div>
        </div>
        <br />
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 bg-white">
        <div>
            <img src="{{ asset('images/valentina-photo.png') }}" class="w-[100%] mx-auto" alt="valentina-photo">
        </div>
        <div class="w-[90%] mt-10 mx-auto md:ml-8">
            <h1 class="text-4xl mb-10 profile">MEET THE OWNER</h1>
            <p class="profile text-lg">Hey, I’m Valentina. I am a citrus lover, sport obhsessed and an art and craft genius.</p>
            <p class="profile text-lg mt-5">I decided to create PURESTART in light of te fact of my desire and motivation to dive into the entrepreneurial world. </p>
            <p class="profile text-lg mt-5">Currently using my corporate background, my experience in customer service, and my passion for cleaning, for my business.</p>
            <p class="profile text-lg mt-5">I grew up with high standards of cleaning.</p>
            <p class="profile text-lg mt-5">My home was always in order. I was taught step by step how to wash the dishes, specially if eggs were part of the meal. I watched my mom making the beds with such a technic. She would also iron sheets and towels! I know, kind of  crazy!! But I have to admit, they would look different once stored. </p>
            <p class="profile text-lg mt-5">For all of the above, I took the leap of faith to make this project happen and it has been the greatest adventure yet. I absolutely love what I do, and what I do it for. I cant wait to meet you and have you as part of my happy customers!!   </p>
            <h1 class="text-3xl mt-10 mb-10 md:mb-0 md:mt-96 text-center profile" style="letter-spacing: 3px;">It is a great pleasure to meet you!</h1>
        </div>
    </div>

    <div class="bg-primary h-auto p-4 md:h-96 text-center">
        <br />
        <h1 class="text-5xl our-values mb-4">OUR VALUES</h1>
        <p class="text-2xl our-values-text uppercase">Honesty Loyalty Respect Integrity</p>
        <p class="text-2xl our-values-text uppercase">Reliability Authenticity Compassion Balance </p>
        <p class="text-3xl our-values-text uppercase">Self-Respect Ethic Responsibility </p>
        <p class="text-4xl our-values-text uppercase">Religion     Optimism     Kindness    </p>
    </div>
@endsection