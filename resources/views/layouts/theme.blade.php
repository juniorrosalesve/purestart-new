<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PURESTART, LLC</title>

    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bumble.css') }}">
    <link rel="stylesheet" href="{{ asset('bunny.css') }}">
    <link rel="stylesheet" href="{{ asset('letrero.css') }}">

    @vite('resources/css/app.css')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
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
    <!-- MENU -->
    <div class="bg-secondary p-8 hidden md:block" id="pcMenu">
        <div class="flex">
            <div class="mr-3" id="menu-logo">
                <img src="./images/purestart_logo2.png" onclick="location.href='{{ route('home') }}'" alt="purestart-logo" class="w-44 cursor-pointer">
            </div>
            <nav class="flex justify-center mt-1 my-auto">
                <ul class="menu uppercase text-lg mt-[55px]">
                    <li>
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    {{-- <li>Reviews</li> --}}
                    <li>
                        <a href="#faq">Faq<span class="lowercase">s</span></a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="shop-menu">
            <ul>
                <li class="mr-3">
                    <svg onclick="location.href='{{ route('shop') }}'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10 menu-svg"><title>storefront-outline</title><path d="M5.06 3C4.63 3 4.22 3.14 3.84 3.42S3.24 4.06 3.14 4.5L2.11 8.91C1.86 10 2.06 10.95 2.72 11.77L3 12.05V19C3 19.5 3.2 20 3.61 20.39S4.5 21 5 21H19C19.5 21 20 20.8 20.39 20.39S21 19.5 21 19V12.05L21.28 11.77C21.94 10.95 22.14 10 21.89 8.91L20.86 4.5C20.73 4.06 20.5 3.7 20.13 3.42C19.77 3.14 19.38 3 18.94 3H5.06M18.89 4.97L19.97 9.38C20.06 9.81 19.97 10.2 19.69 10.55C19.44 10.86 19.13 11 18.75 11C18.44 11 18.17 10.9 17.95 10.66C17.73 10.43 17.61 10.16 17.58 9.84L16.97 5L18.89 4.97M5.06 5H7.03L6.42 9.84C6.3 10.63 5.91 11 5.25 11C4.84 11 4.53 10.86 4.31 10.55C4.03 10.2 3.94 9.81 4.03 9.38L5.06 5M9.05 5H11V9.7C11 10.05 10.89 10.35 10.64 10.62C10.39 10.88 10.08 11 9.7 11C9.36 11 9.07 10.88 8.84 10.59S8.5 10 8.5 9.66V9.5L9.05 5M13 5H14.95L15.5 9.5C15.58 9.92 15.5 10.27 15.21 10.57C14.95 10.87 14.61 11 14.2 11C13.89 11 13.61 10.88 13.36 10.62C13.11 10.35 13 10.05 13 9.7V5M7.45 12.05C8.08 12.67 8.86 13 9.8 13C10.64 13 11.38 12.67 12 12.05C12.69 12.67 13.45 13 14.3 13C15.17 13 15.92 12.67 16.55 12.05C17.11 12.67 17.86 13 18.8 13H19.03V19H5V13H5.25C6.16 13 6.89 12.67 7.45 12.05Z" /></svg>
                </li>
                <li class="inline-flex items-center // mr-3 // text-2xl font-normal text-slate-800">
                    <span class="relative mr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10 menu-svg" data-drawer-target="carrito" data-drawer-show="carrito" aria-controls="carrito"><title>cart-outline</title><path d="M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z" /></svg>
                        <span class="inline-flex absolute -right-2.5 -top-[1px] justify-center items-center w-[18px] h-[18px] absoluted // bg-primary rounded-full // text-slate-100 text-center text-[10px] conteo-tonteo">
                            0
                        </span>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <div class="bg-secondary shadow-lg p-2 w-full sticky top-0 md:hidden" style="z-index: 49;">
        <div class="flex w-full justify-between">
            <div class="my-auto mr-3">
                <a href="javascript:void(0)" type="button" data-drawer-target="menu-responsive" data-drawer-show="menu-responsive" aria-controls="menu-responsive" class="inline-flex items-center // text-2xl font-normal text-slate-800">
                    <img src="images/lista.png" alt="MENU" class="w-8 mr-1 img-white" />
                </a>
            </div>
            <div>
                <a href=""><img src="./images/purestart_logo2.png" alt="" class="w-[160px] mt-0 mr-0"></a>
            </div>
            <div class="my-auto flex">
                <a href="{{ route('shop') }}" type="button" class="inline-flex items-center // mr-3 // text-2xl font-normal text-slate-800">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10 menu-svg"><title>storefront-outline</title><path d="M5.06 3C4.63 3 4.22 3.14 3.84 3.42S3.24 4.06 3.14 4.5L2.11 8.91C1.86 10 2.06 10.95 2.72 11.77L3 12.05V19C3 19.5 3.2 20 3.61 20.39S4.5 21 5 21H19C19.5 21 20 20.8 20.39 20.39S21 19.5 21 19V12.05L21.28 11.77C21.94 10.95 22.14 10 21.89 8.91L20.86 4.5C20.73 4.06 20.5 3.7 20.13 3.42C19.77 3.14 19.38 3 18.94 3H5.06M18.89 4.97L19.97 9.38C20.06 9.81 19.97 10.2 19.69 10.55C19.44 10.86 19.13 11 18.75 11C18.44 11 18.17 10.9 17.95 10.66C17.73 10.43 17.61 10.16 17.58 9.84L16.97 5L18.89 4.97M5.06 5H7.03L6.42 9.84C6.3 10.63 5.91 11 5.25 11C4.84 11 4.53 10.86 4.31 10.55C4.03 10.2 3.94 9.81 4.03 9.38L5.06 5M9.05 5H11V9.7C11 10.05 10.89 10.35 10.64 10.62C10.39 10.88 10.08 11 9.7 11C9.36 11 9.07 10.88 8.84 10.59S8.5 10 8.5 9.66V9.5L9.05 5M13 5H14.95L15.5 9.5C15.58 9.92 15.5 10.27 15.21 10.57C14.95 10.87 14.61 11 14.2 11C13.89 11 13.61 10.88 13.36 10.62C13.11 10.35 13 10.05 13 9.7V5M7.45 12.05C8.08 12.67 8.86 13 9.8 13C10.64 13 11.38 12.67 12 12.05C12.69 12.67 13.45 13 14.3 13C15.17 13 15.92 12.67 16.55 12.05C17.11 12.67 17.86 13 18.8 13H19.03V19H5V13H5.25C6.16 13 6.89 12.67 7.45 12.05Z" /></svg>
                </a>
                <a href="javascript:void(0)" type="button" class="inline-flex items-center // mr-3 // text-2xl font-normal text-slate-800">
                    <span class="relative mr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10 menu-svg" data-drawer-target="carrito" data-drawer-show="carrito" aria-controls="carrito"><title>cart-outline</title><path d="M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z" /></svg>
                        <span class="inline-flex absolute -right-2.5 -top-[1px] justify-center items-center w-[18px] h-[18px] absoluted // bg-secondary rounded-full // text-pinklight text-center text-[10px] conteo-tonteo">
                            0
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!-- MENU RESPONSIVE -->
    <div id="menu-responsive" class="fixed top-0 left-0 w-[70%] z-50 h-screen p-4 -translate-x-full bg-slate-100 // scrolld overflow-y-auto overflow-x-hidden" tabindex="-1" aria-labelledby="drawer-label">
        <div class="relative">
            <div class="sticky top-0 z-30 w-full bg-slate-100">
                <h5 class="flex justify-between items-center mb-4 text-slate-900 text-lg font-semibold" id="drawer-label" type="button" data-drawer-dismiss="menu-responsive" aria-controls="menu-responsive">
                    <span class="inline-flex justify-between items-center">
                        <img src="images/lista.png" alt="MENU" class="w-4 mr-1"> 
                        Navbar
                    </span>
                    <span class="text-2xl rotate-45 cursor-pointer">+</span>
                </h5>
            </div>
            <!-- MENU -->
            <div class="">
                <nav>
                    <ul class="border-[1px] border-solid border-b-[0px] rounded-lg sticky top-0 drop-shadow-[0px_0px_3px_rgba(0,0,0,0.10)]">
                        <li class="mb-1 relative float-none border-b-[1px] // first:rounded-tl-lg first:rounded-tr-lg last:rounded-bl-lg last:rounded-br-lg">
                            <a href="#home" class="uppercase relative roboto-light py-3 px-3 text-primary text-left text-lg // flex items-center">
                                Home
                            </a>
                        </li>
                    </ul>
                    <ul class="border-[1px] border-solid border-b-[0px] rounded-lg sticky top-0 drop-shadow-[0px_0px_3px_rgba(0,0,0,0.10)]">
                        <li class="mb-1 relative float-none border-b-[1px] // first:rounded-tl-lg first:rounded-tr-lg last:rounded-bl-lg last:rounded-br-lg">
                            <a href="#about" class="uppercase relative roboto-light py-3 px-3 text-primary text-left text-lg // flex items-center">
                                About
                            </a>
                        </li>
                    </ul>
                    <ul class="border-[1px] border-solid border-b-[0px] rounded-lg sticky top-0 drop-shadow-[0px_0px_3px_rgba(0,0,0,0.10)]">
                        <li class="mb-1 relative float-none border-b-[1px] // first:rounded-tl-lg first:rounded-tr-lg last:rounded-bl-lg last:rounded-br-lg">
                            <a href="#services" class="uppercase relative roboto-light py-3 px-3 text-primary text-left text-lg // flex items-center">
                                Services
                            </a>
                        </li>
                    </ul>
                    <ul class="border-[1px] border-solid border-b-[0px] rounded-lg sticky top-0 drop-shadow-[0px_0px_3px_rgba(0,0,0,0.10)]">
                        <li class="mb-1 relative float-none border-b-[1px] // first:rounded-tl-lg first:rounded-tr-lg last:rounded-bl-lg last:rounded-br-lg">
                            <a href="#faq" class="uppercase relative roboto-light py-3 px-3 text-primary text-left text-lg // flex items-center">
                                Faq<span class="lowercase">s</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="border-[1px] border-solid border-b-[0px] rounded-lg sticky top-0 drop-shadow-[0px_0px_3px_rgba(0,0,0,0.10)]">
                        <li class="mb-1 relative float-none border-b-[1px] // first:rounded-tl-lg first:rounded-tr-lg last:rounded-bl-lg last:rounded-br-lg">
                            <a href="#contact" class="uppercase relative roboto-light py-3 px-3 text-primary text-left text-lg // flex items-center">
                                Contact
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    @yield('body')

    <!-- FOOTER -->
    <footer class="bg-secondary z-10">
        <div class="flex justify-around legend-footer-text mx-3 text-lg md:mx-0 md:text-3xl">
            <div class="my-10 md:-ml-10">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}">Services</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}">Store</a>
                    </li>
                </ul>
            </div>
            <div class="my-10">
                <ul>
                    <li>
                        <a href="https://www.instagram.com/purestartllc/" target="_blank">Instagram</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/Purestartllc/" target="_blank">Facebook</a>
                    </li>
                    <li>
                        <a href="https://twitter.com/PureStartllc" target="_blank">Twitter</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <p class="text-center p-4 bg-footer footer-copyright">
        PURESTART LLC. PRIVACY POLICY. WEB DESIGN BY VALENTINA G.M.
    </p>

    <div id="carrito" class="fixed top-0 left-0 z-50 h-screen p-4 -translate-x-full w-[100%] sm:w-[600px] bg-slate-100 // scrolld overflow-y-auto overflow-x-hidden" tabindex="-1" aria-labelledby="drawer-label">
        <div class="w-full relative">
            <div class="w-ful sticky left-0 top-0 z-20 px-4 pb-1 pt-4 bg-slate-100">
                <h5 class="flex justify-between items-center mb-4 text-slate-900 text-lg font-semibold" id="drawer-label" type="button" data-drawer-dismiss="carrito" aria-controls="carrito">
                    <span class="inline-flex justify-between items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-7 mr-3"><title>cart-outline</title><path d="M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z" /></svg>
                        Cart</span>
                    <span class="text-3xl rotate-45 cursor-pointer">+</span>
                </h5>
            </div>

            <div id="cart_step1">
                <div class="w-full relative p-4 mb-40">
                    <!-- PRODUCTOS -->
                    <div class="w-full relative">
                        <div>
                            <ul class="w-full h-94 border-[1px] border-solid border-b-[0px] rounded-lg drop-shadow-[0px_0px_3px_rgba(0,0,0,0.10)]" id="cart_list">
                                <!-- cooper.js -->
                            </ul>
                        </div>
                        <div class="text-center mt-[25%]" id="thanks">
                            {{-- <h1 class="text-primary text-2xl">¡Gracias por tú pedido!</h1> --}}
                            <span class="text-[#436f5c] text-md">No items in the cart.</span>
                        </div>
                    </div>
                </div>
    
                <!-- TOTAL -->
                <div class="relative w-[100%] sm:w-[600px]">
                    <ul class="border-t border-solid w-[100%] sm:w-[600px] // fixed left-0 bottom-0 // bg-slate-100">
                        <li class="relative float-none border-b border-solid border-slate-200 mt-2 py-3 px-6">
                            <div class="relative">
                                <div class="relative mr-0 pt-1 pb-1 flex justify-between items-center">
                                    <p class="block text-gray-600 text-left text-base font-normal">Subtotal</p>
                                    <p class="block text-gray-600 text-left text-base font-normal"><span class="mdi mdi-currency-usd"></span><span class="totalDeTotales">$0.00</span></p>
                                </div>
                                <div class="relative mr-0 pt-1 pb-1 flex justify-between items-center">
                                    <p class="block text-gray-600 text-left text-base font-normal">Shipping costs</p>
                                    <p class="block text-gray-600 text-left text-base font-normal"><span class="mdi mdi-currency-usd"></span>0.00</p>
                                </div>
                                <div class="relative mr-0 pt-1 pb-1 flex justify-between items-center">
                                    <p class="block text-primary text-left text-base font-normal">Discount coupon</p>
                                    <p class="block text-primary text-left text-base font-normal"><span class="mdi mdi-currency-usd"></span>0.00</p>
                                </div>
                                <!-- <div class="relative mr-0 py-2 flex justify-between items-center border-t border-solid border-slate-200"> -->
                                <div class="relative mr-0 py-2 flex justify-between items-center">
                                    <p class="block text-gray-800 text-left text-base font-semibold">Total</p>
                                    <p class="block text-gray-800 text-left text-base font-semibold"><span class="mdi mdi-currency-usd"></span><span class="totalDeTotales">$0.00</span></p>
                                </div>
                                <div class="relative mr-0 pt-2 flex justify-between items-center">
                                    <button type="button" class="w-full inline-flex items-center px-3 py-3 text-base font-semibold text-slate-50 bg-[#436f5c]">
                                        <span class="mx-auto">Order now</span>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Main modal -->
    <div id="suscribeModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative">
            <video playsinline autoplay muted loop style="border-radius: 15px;" class="video-tag">
                <source src="{{ asset('images/bg_stars.mp4') }}" type="video/mp4">
            </video>
            <!-- Modal content -->
            <div class="w-[320px] md:w-[500px] sign three">
                <div class="block">
                    <div id="formHideSubscribe">
                        {{-- <h1 class="text-primary uppercase lato-regular text-lg md:text-4xl text-center">Special Offer</h1> --}}
                        {{-- <h1 class="text-dark uppercase lato-regular md:text-2xl text-center">10% OFF</h1> --}}
                        <div class="div-off">
                            <h1 class="textoVertical lato-light text-lg">Take</h1>
                            <h1 class="text-5xl lato-bold">10% Off</h1>
                        </div>
                        <img src="{{ asset('images/join_pures.png') }}" alt="licensed">
                        <form method="POST" action="{{ route('mail-suscribe') }}" id="formModalSuscribe">
                            <div class="grid grid-cols-1 gap-2">
                                <input type="text" name="firstname" class="input-suscribe-modal" placeholder="Full Name">
                                <input type="text" name="email" class="mt-3 md:mt-0 input-suscribe-modal" placeholder="Email Address">
                            </div>
                            <div class="flex justify-center mt-2">
                                <button type="submit" class="btn-suscribe-modal uppercase bg-[#55957a]" id="formModalSuscribeBtn">Subscribe</button>
                            </div>
                            <br />
                        </form>
                    </div>
                    <div class="text-center my-10 hidden" id="formModalSuscribeInfo">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10 mx-auto"><path fill="#72B59A" d="M22 5.5H9C7.9 5.5 7 6.4 7 7.5V16.5C7 17.61 7.9 18.5 9 18.5H22C23.11 18.5 24 17.61 24 16.5V7.5C24 6.4 23.11 5.5 22 5.5M22 16.5H9V9.17L15.5 12.5L22 9.17V16.5M15.5 10.81L9 7.5H22L15.5 10.81M5 16.5C5 16.67 5.03 16.83 5.05 17H1C.448 17 0 16.55 0 16S.448 15 1 15H5V16.5M3 7H5.05C5.03 7.17 5 7.33 5 7.5V9H3C2.45 9 2 8.55 2 8S2.45 7 3 7M1 12C1 11.45 1.45 11 2 11H5V13H2C1.45 13 1 12.55 1 12Z" /></svg>
                        <h1 class="text-lg md:text-3xl lato-medium text-primary">
                            Thank You for subscribing!
                        </h1>
                        <p class="md:text-lg lato-regular text-primary mt-5">You have succesfully subscribed. Check your email for your sparkly 10% discount!</p>
                    </div>

                    <div class="bg-[#e6e6e6] text-center p-2" style="border-radius: 40px;">
                        <p class="lato-regular text-xs md:text-sm">Don't miss exclusive discount and cleaning tips.</p>
                        <p class="lato-regular text-xs md:text-sm">Joy delivered right to your inbox.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="open-modal" onclick="modal()">10% Off</button>

    <script src="{{ asset('jquery.sticky.js') }}"></script>
    <script src="{{ asset('sections.js') }}"></script>
    <script>
        const icon = document.getElementById('close-icon');
        const modal     =   () => {
            new Modal(document.getElementById('suscribeModal'), null).show();
        };
        if(Cookies.get('offert') == undefined) {
            modal();
            Cookies.set('offert', 'anti-spam', { expires: 365 })
        }

        document.getElementById('formModalSuscribe').addEventListener('submit', function() {
            event.preventDefault();
            document.getElementById('formModalSuscribeBtn').innerHTML  =   'Loading...';
            document.getElementById('formModalSuscribeBtn').disabled   =   true;
            axios.post('{{ route('mail-suscribe') }}', {
                firstname: this.elements.firstname.value,
                email: this.elements.email.value
            })
            .then(function (res) {
                if(res.data == 1) {
                    document.getElementById('formHideSubscribe').classList.add('hidden');
                    document.getElementById('formModalSuscribeInfo').classList.remove('hidden');
                }
                else {
                    document.getElementById('formModalSuscribeBtn').innerHTML  =   'This user already exists';
                    document.getElementById('formModalSuscribeBtn').disabled   =   false;
                }
                console.log(res);
            })
            .catch(function (error) {
                console.log(error);
                document.getElementById('formModalSuscribeBtn').innerHTML  =   'Oops an error occurred, retry';
                document.getElementById('formModalSuscribeBtn').disabled   =   false;
            });
        });
        document.getElementById('suscribe_form_home').addEventListener('submit', function() {
            event.preventDefault();
            document.getElementById('btn_suscribe_home').innerHTML  =   'Loading...';
            document.getElementById('btn_suscribe_home').disabled   =   true;
            axios.post('{{ route('mail-suscribe') }}', {
                firstname: this.elements.firstname.value,
                email: this.elements.email.value
            })
            .then(function (res) {
                if(res.data == 1) {
                    document.getElementById('suscribe_form_home').classList.add('hidden');
                    document.getElementById('suscribe_page_home').classList.remove('hidden');
                }
                else  {
                    document.getElementById('btn_suscribe_home').innerHTML  =   'This user already exists';
                    document.getElementById('btn_suscribe_home').disabled   =   false;
                }
                console.log(res);
            })
            .catch(function (error) {
                console.log(error);
                document.getElementById('btn_suscribe_home').innerHTML  =   'Oops an error occurred, retry';
                document.getElementById('btn_suscribe_home').disabled   =   false;
            });
        });
        AOS.init({
            once: true
        });
        if(window.screen.width >= 768) {
            $("#pcMenu").sticky();
            $('#pcMenu').on('sticky-start', function() { 
                $("#pcMenu").removeClass("p-8");
                $("#pcMenu").addClass("shadow-lg");
                $("#pcMenu #menu-logo").addClass("my-auto");
                $("#pcMenu #menu-logo img").removeClass("w-44");
                $("#pcMenu #menu-logo img").addClass("w-32");
            });
            $('#pcMenu').on('sticky-end', function() { 
                $("#pcMenu").addClass("p-8");
                $("#pcMenu").removeClass("shadow-lg");
                $("#pcMenu #menu-logo").removeClass("my-auto");
                $("#pcMenu #menu-logo img").removeClass("w-32");
                $("#pcMenu #menu-logo img").addClass("w-44");
            });
        }
    </script>
</body>
</html>