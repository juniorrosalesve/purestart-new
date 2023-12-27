<style>
    .swiper-button-next, .swiper-button-prev {
        color:#66c485;
    }
    :root {
        --swiper-theme-color: #66c485;
    }
</style>
{{-- <div class="h-[200px] md:h-[140px] wrapper bg-secondary">
    <h1 class="w-full text-2xl md:text-5xl abril text-center text-[#06446c]">We are a cleaning company that actually cleans!</h1>
    @for ($i = 1; $i < 10; $i++)
        <div><span class="dot"></span></div>
    @endfor
</div>
<br /><br /><br /><br /><br /><br /> --}}
{{-- <div class="bg-secondary w-full" style="z-index: 100;">
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
</div> --}}

<div class="flex flex-col md:flex-row bg-white md:max-h-[1000px] -mt-1">
    <div class="image-container h-auto relative">
        <img src="{{ asset('images/valentina-photo.png') }}" class="w-full h-full object-cover" alt="valentina-photo">
        <div class="overlay"></div>
    </div>
    <div class="w-[90%] mx-auto md:ml-8">
        <h1 class="text-4xl mt-6 mb-10 abril text-[#06446c]" data-aos="fade-in" data-aos-duration="500">
            Meet <br />
            <span class="lato-thin italic">&nbsp;&nbsp;&nbsp;&nbsp;The Owner</span>
        </h1>
        <p class="profile text-2xl" data-aos="fade-in" data-aos-duration="500">Hey, I’m Valentina. I am a citrus lover, sport obhsessed and an art and craft genius.</p>
        <p class="profile text-2xl mt-8" data-aos="fade-in" data-aos-duration="500">I decided to create PURESTART in light of te fact of my desire and motivation to dive into the entrepreneurial world. </p>
        <p class="profile text-2xl mt-8" data-aos="fade-in" data-aos-duration="500">Currently using my corporate background, my experience in customer service, and my passion for cleaning, for my business.</p>
        <p class="profile text-2xl mt-8" data-aos="fade-in" data-aos-duration="500">I grew up with high standards of cleaning.</p>
        <p class="profile text-2xl mt-8" data-aos="fade-in" data-aos-duration="500">My home was always in order. I was taught step by step how to wash the dishes, specially if eggs were part of the meal. I watched my mom making the beds with such a technic. She would also iron sheets and towels! I know, kind of  crazy!! But I have to admit, they would look different once stored. </p>
        <p class="profile text-2xl mt-8" data-aos="fade-in" data-aos-duration="500">For all of the above, I took the leap of faith to make this project happen and it has been the greatest adventure yet. I absolutely love what I do, and what I do it for. I cant wait to meet you and have you as part of my happy customers!!   </p>
        <h1 class="text-3xl mt-10 mb-10 md:mb-36 md:mt-10 text-center profile" style="letter-spacing: 3px;" data-aos="fade-up" data-aos-duration="500">It is a great pleasure to meet you!</h1>
    </div>
</div>
<div class="bg-secondary h-auto md:h-72 z-10">
    <br />
    <h1 class="text-5xl our-values mb-4 text-center">OUR VALUES</h1>
    <div class="w-[100%] xl:w-[90%] mx-auto">
        <p class="text-center text-2xl md:text-[30px] xl:mt-3 xl:text-[42px] our-values-text uppercase">Honesty Loyalty Respect Integrity</p>
        <p class="text-center text-2xl md:text-2xl xl:mt-3 xl:text-[35px] our-values-text uppercase">Reliability Authenticity Responsibility </p>
        <p class="text-center text-2xl md:text-[32px] xl:mt-3 xl:text-[44px] our-values-text uppercase">Balance Self-Respect Compassion</p>
        <p class="text-center text-2xl md:text-[31.5px] xl:mt-3 xl:text-[44px] our-values-text uppercase">Ethic Religion     Optimism     Kindness    </p>
        <br />
    </div>
</div>
<div class="bg-[#417d67] relative">
    <div class="swiper mySwiper absolute top-[30%] w-full">
        <div class="swiper-wrapper mb-7 md:mb-10">
            <div class="swiper-slide">
                <p class="text-md md:text-2xl text-center lato-bold italic" style="color:#82F5A8;">
                    “She really loves what she does, and it shows. <br /> Best cleaning I have ever had!” 
                    <br /><br />
                    J. W.
                </p>
            </div>
            <div class="swiper-slide">
                <div class="md:w-[900px] mx-auto">
                    <p class="text-md md:text-2xl lato-bold italic text-center" style="color:#82F5A8;">
                        “We are very happy with our experience with Valentina and PureStart! We have tried several cleaning companies and have never been happy with the results - the companies were too big that communication and attention to detail got lost along the way. But after working with PureStart, those issues have stopped! We have office members who have noticed a difference! We HIGHLY recommend working with Valentina - she is passionate, hard-working, and kind.”
                        <br /><br />
                        T.S.
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="md:w-[900px] mx-auto">
                    <p class="text-md md:text-2xl lato-bold italic text-center" style="color:#82F5A8;">
                        "Awesome job! Affordable and competitive price! Everyone was super nice and friendly.
                        Awesome first time visit and estimate process.
                        Prompt quote and easy payment methods!
                        Awesome follow up!
                        When I moved in, this house was NOT cleaned and many areas were not livable. Bathrooms were very dirty where my family could not even touch! PureStart did an awesome job by cleaning everything well and make this house livable.
                        Would I hire them again? Yes!"
                        <br /><br />
                        R.J.
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="md:w-[900px] mx-auto">
                    <p class="text-md md:text-2xl lato-bold italic text-center" style="color:#82F5A8;">
                        "Fantastic job cleaning my home. Very thorough, careful, and respectful! Would highly recommend and will be using service again!"
                        <br /><br />
                        S.M.
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="md:w-[900px] mx-auto">
                    <p class="text-md md:text-2xl lato-bold italic text-center" style="color:#82F5A8;">
                        "Awesome service. Prompt, detailed and very affordable. Highly recommend for your cleaning needs"
                        <br /><br />
                        S.R.
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="md:w-[900px] mx-auto">
                    <p class="text-md md:text-2xl lato-bold italic text-center" style="color:#82F5A8;">
                        "So grateful you did the cleaning!! you did a fabulous job!!!"
                        <br /><br />
                        K.A.
                    </p>
                </div>
            </div>
        </div>
        <div class="swiper-button-next hidden md:block"></div>
        <div class="swiper-button-prev hidden md:block"></div>
        <div class="swiper-pagination"></div>
    </div>
    <img src="{{ asset('images/reviews.png') }}" alt="reviews" class="w-full h-[530px] lg:h-[700px]">
</div>


<script>
    let width = screen.width;
    if(width >= 768) {
        var swiper = new Swiper(".mySwiper", {
            loop:true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    }
    else {
        var swiper = new Swiper(".mySwiper", {
            loop:true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    }
</script>