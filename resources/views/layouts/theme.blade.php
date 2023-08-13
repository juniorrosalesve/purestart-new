<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PURESTART, LLC</title>

    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
</head>
<body class="w-full">
    <div class="bg-primary-light p-3 w-full">
        <marquee class="lg:text-lg" scrollamount="10">
            <p class="lato-regular font-semibold inline-block">INQUIRE TO WORK WITH US</p>
            <p class="inline-block">~</p>
            <p class="lato-regular font-semibold inline-block">INQUIRE TO WORK WITH US</p>
            <p class="inline-block">~</p>
            <p class="lato-regular font-semibold inline-block">INQUIRE TO WORK WITH US</p>
        </marquee>
    </div>
    <!-- MENU -->
    <div class="bg-secondary p-5 hidden md:block">
        <div class="flex">
            <div>
                <img src="./images/purestart_logo2.png" onclick="location.href='{{ route('home') }}'" alt="purestart-logo" class="w-44 cursor-pointer">
            </div>
            <div class="flex justify-center my-auto">
                <ul class="menu uppercase text-lg mt-[55px]">
                    <li onclick="location.href='{{ route('home') }}'" @if (\Request::route()->getName() == 'home')
                        class="active"
                    @endif>Home</li>
                    <li onclick="location.href='{{ route('about') }}'" @if (\Request::route()->getName() == 'about')
                        class="active"
                    @endif>About</li>
                    <li onclick="location.href='{{ route('services') }}'" @if (\Request::route()->getName() == 'services')
                        class="active"
                    @endif>Services</li>
                    {{-- <li>Reviews</li> --}}
                    <li onclick="location.href='{{ route('faq') }}'" @if (\Request::route()->getName() == 'faq')
                        class="active"
                    @endif>Faq</li>
                    <li onclick="location.href='{{ route('contact') }}'" @if (\Request::route()->getName() == 'contact')
                        class="active"
                    @endif>Contact</li>
                </ul>
            </div>
        </div>
        <div class="shop-menu">
            <ul>
                <li class="mr-3">
                    <svg onclick="location.href='{{ route('shop') }}'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10"><title>storefront-outline</title><path d="M5.06 3C4.63 3 4.22 3.14 3.84 3.42S3.24 4.06 3.14 4.5L2.11 8.91C1.86 10 2.06 10.95 2.72 11.77L3 12.05V19C3 19.5 3.2 20 3.61 20.39S4.5 21 5 21H19C19.5 21 20 20.8 20.39 20.39S21 19.5 21 19V12.05L21.28 11.77C21.94 10.95 22.14 10 21.89 8.91L20.86 4.5C20.73 4.06 20.5 3.7 20.13 3.42C19.77 3.14 19.38 3 18.94 3H5.06M18.89 4.97L19.97 9.38C20.06 9.81 19.97 10.2 19.69 10.55C19.44 10.86 19.13 11 18.75 11C18.44 11 18.17 10.9 17.95 10.66C17.73 10.43 17.61 10.16 17.58 9.84L16.97 5L18.89 4.97M5.06 5H7.03L6.42 9.84C6.3 10.63 5.91 11 5.25 11C4.84 11 4.53 10.86 4.31 10.55C4.03 10.2 3.94 9.81 4.03 9.38L5.06 5M9.05 5H11V9.7C11 10.05 10.89 10.35 10.64 10.62C10.39 10.88 10.08 11 9.7 11C9.36 11 9.07 10.88 8.84 10.59S8.5 10 8.5 9.66V9.5L9.05 5M13 5H14.95L15.5 9.5C15.58 9.92 15.5 10.27 15.21 10.57C14.95 10.87 14.61 11 14.2 11C13.89 11 13.61 10.88 13.36 10.62C13.11 10.35 13 10.05 13 9.7V5M7.45 12.05C8.08 12.67 8.86 13 9.8 13C10.64 13 11.38 12.67 12 12.05C12.69 12.67 13.45 13 14.3 13C15.17 13 15.92 12.67 16.55 12.05C17.11 12.67 17.86 13 18.8 13H19.03V19H5V13H5.25C6.16 13 6.89 12.67 7.45 12.05Z" /></svg>
                </li>
                <li class="inline-flex items-center // mr-3 // text-2xl font-normal text-slate-800">
                    <span class="relative mr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10" data-drawer-target="carrito" data-drawer-show="carrito" aria-controls="carrito"><title>cart-outline</title><path d="M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z" /></svg>
                        <span class="inline-flex absolute -right-2.5 -top-[1px] justify-center items-center w-[18px] h-[18px] absoluted // bg-primary rounded-full // text-slate-100 text-center text-[10px] conteo-tonteo">
                            0
                        </span>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <div class="flex justify-between mx-4 my-2 md:hidden">
        <div class="my-auto mr-3">
            <a href="javascript:void(0)" type="button" data-drawer-target="menu-responsive" data-drawer-show="menu-responsive" aria-controls="menu-responsive" class="inline-flex items-center // text-2xl font-normal text-slate-800">
                <img src="images/lista.png" alt="MENU" class="w-8 mr-1 img-white" />
            </a>
        </div>
        <div>
            <a href=""><img src="./images/purestart_logo2.png" alt="" class="w-[180px] mt-0 mr-0"></a>
        </div>
        <div class="my-auto flex">
            <a href="{{ route('shop') }}" type="button" class="inline-flex items-center // mr-3 // text-2xl font-normal text-slate-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10"><title>storefront-outline</title><path d="M5.06 3C4.63 3 4.22 3.14 3.84 3.42S3.24 4.06 3.14 4.5L2.11 8.91C1.86 10 2.06 10.95 2.72 11.77L3 12.05V19C3 19.5 3.2 20 3.61 20.39S4.5 21 5 21H19C19.5 21 20 20.8 20.39 20.39S21 19.5 21 19V12.05L21.28 11.77C21.94 10.95 22.14 10 21.89 8.91L20.86 4.5C20.73 4.06 20.5 3.7 20.13 3.42C19.77 3.14 19.38 3 18.94 3H5.06M18.89 4.97L19.97 9.38C20.06 9.81 19.97 10.2 19.69 10.55C19.44 10.86 19.13 11 18.75 11C18.44 11 18.17 10.9 17.95 10.66C17.73 10.43 17.61 10.16 17.58 9.84L16.97 5L18.89 4.97M5.06 5H7.03L6.42 9.84C6.3 10.63 5.91 11 5.25 11C4.84 11 4.53 10.86 4.31 10.55C4.03 10.2 3.94 9.81 4.03 9.38L5.06 5M9.05 5H11V9.7C11 10.05 10.89 10.35 10.64 10.62C10.39 10.88 10.08 11 9.7 11C9.36 11 9.07 10.88 8.84 10.59S8.5 10 8.5 9.66V9.5L9.05 5M13 5H14.95L15.5 9.5C15.58 9.92 15.5 10.27 15.21 10.57C14.95 10.87 14.61 11 14.2 11C13.89 11 13.61 10.88 13.36 10.62C13.11 10.35 13 10.05 13 9.7V5M7.45 12.05C8.08 12.67 8.86 13 9.8 13C10.64 13 11.38 12.67 12 12.05C12.69 12.67 13.45 13 14.3 13C15.17 13 15.92 12.67 16.55 12.05C17.11 12.67 17.86 13 18.8 13H19.03V19H5V13H5.25C6.16 13 6.89 12.67 7.45 12.05Z" /></svg>
            </a>
            <a href="javascript:void(0)" type="button" class="inline-flex items-center // mr-3 // text-2xl font-normal text-slate-800">
                <span class="relative mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10" data-drawer-target="carrito" data-drawer-show="carrito" aria-controls="carrito"><title>cart-outline</title><path d="M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z" /></svg>
                    <span class="inline-flex absolute -right-2.5 -top-[1px] justify-center items-center w-[18px] h-[18px] absoluted // bg-secondary rounded-full // text-pinklight text-center text-[10px] conteo-tonteo">
                        0
                    </span>
                </span>
            </a>
        </div>
    </div>
    <!-- MENU RESPONSIVE -->
    <div id="menu-responsive" class="fixed top-0 left-0 w-[50%] z-40 h-screen p-4 -translate-x-full bg-slate-100 // scrolld overflow-y-auto overflow-x-hidden" tabindex="-1" aria-labelledby="drawer-label">
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
                <div>
                    <ul class="border-[1px] border-solid border-b-[0px] rounded-lg sticky top-0 drop-shadow-[0px_0px_3px_rgba(0,0,0,0.10)]">
                        <li class="@if (\Request::route()->getName() == 'home') bg-primary text-slate-100 @endif relative float-none border-b-[1px] mb-1 // first:rounded-tl-lg first:rounded-tr-lg last:rounded-bl-lg last:rounded-br-lg">
                            <a href="{{ route('home') }}" class="relative roboto-light py-3 px-3 text-secondary text-left text-lg // flex items-center">
                                Home
                            </a>
                        </li>
                    </ul>
                    <ul class="border-[1px] border-solid border-b-[0px] rounded-lg sticky top-0 drop-shadow-[0px_0px_3px_rgba(0,0,0,0.10)]">
                        <li class="@if (\Request::route()->getName() == 'about') bg-primary text-slate-100 @endif relative float-none border-b-[1px] // first:rounded-tl-lg first:rounded-tr-lg last:rounded-bl-lg last:rounded-br-lg">
                            <a href="{{ route('about') }}" class="relative roboto-light py-3 px-3 text-secondary text-left text-lg // flex items-center">
                                About
                            </a>
                        </li>
                    </ul>
                    <ul class="border-[1px] border-solid border-b-[0px] rounded-lg sticky top-0 drop-shadow-[0px_0px_3px_rgba(0,0,0,0.10)]">
                        <li class="@if (\Request::route()->getName() == 'services') bg-primary text-slate-100 @endif relative float-none border-b-[1px] // first:rounded-tl-lg first:rounded-tr-lg last:rounded-bl-lg last:rounded-br-lg">
                            <a href="{{ route('services') }}" class="relative roboto-light py-3 px-3 text-secondary text-left text-lg // flex items-center">
                                Services
                            </a>
                        </li>
                    </ul>
                    <ul class="border-[1px] border-solid border-b-[0px] rounded-lg sticky top-0 drop-shadow-[0px_0px_3px_rgba(0,0,0,0.10)]">
                        <li class="@if (\Request::route()->getName() == 'faq') bg-primary text-slate-100 @endif relative float-none border-b-[1px] // first:rounded-tl-lg first:rounded-tr-lg last:rounded-bl-lg last:rounded-br-lg">
                            <a href="{{ route('faq') }}" class="relative roboto-light py-3 px-3 text-secondary text-left text-lg // flex items-center">
                                Faq
                            </a>
                        </li>
                    </ul>
                    <ul class="border-[1px] border-solid border-b-[0px] rounded-lg sticky top-0 drop-shadow-[0px_0px_3px_rgba(0,0,0,0.10)]">
                        <li class="relative float-none border-b-[1px] // first:rounded-tl-lg first:rounded-tr-lg last:rounded-bl-lg last:rounded-br-lg">
                            <a href="javascript:void(0)" class="relative roboto-light py-3 px-3 text-secondary text-left text-lg // flex items-center">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @yield('body')

    <!-- FOOTER -->
    <footer class="bg-secondary">
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
                    <li>Instagram</li>
                    <li>Facebook</li>
                    <li>Twitter</li>
                </ul>
            </div>
        </div>
    </footer>
    <p class="text-center p-4 bg-footer footer-copyright">
        PURESTART LLC. PRIVACY POLICY. WEB DESIGN BY VALENTINA G.M.
    </p>

    <div id="carrito" class="fixed top-0 left-0 z-40 h-screen p-4 -translate-x-full w-[100%] sm:w-[600px] bg-slate-100 // scrolld overflow-y-auto overflow-x-hidden" tabindex="-1" aria-labelledby="drawer-label">
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
</body>
</html>