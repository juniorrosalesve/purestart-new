@extends('layouts.theme')
@section('body')
    <div class="relative w-full mt-5">
        <div class="w-12/12 lg:w-11/12 mx-auto flex">
            <div class="w-4/12 lg:w-3/12 mx-auto p-3 lg:p-5 hidden md:block">
                <ul class="sticky top-0 z-30 // border-[1px] border-solid border-b-[0px] // rounded-lg drop-shadow-[0px_0px_3px_rgba(0,0,0,0.10)]">
                    <!-- <li class="relative float-none border-b-[1px] bg-slate-100 hover:bg-slate-100 // first:rounded-tl-lg first:rounded-tr-lg last:rounded-bl-lg last:rounded-br-lg"><a href="" class="relative py-3 px-3 text-gray-800 text-left text-lg // flex items-center"><img src="img/icon-menu/burger.png" class="float-left w-10 mr-2"> Hamburguesas <span class="mdi mdi-chevron-down // absolute right-3"></span></a>
                        <ul>
                            <li class="float-none border-t-[1px] bg-slate-50 hover:bg-slate-100"><a href="" class="relative py-3 px-8 text-gray-800 text-left text-lg // flex items-center"><img src="img/icon-menu/burger.png" class="float-left w-10 mr-2"> Sencilla</a></li>
                            <li class="float-none border-t-[1px] bg-slate-50 hover:bg-slate-100"><a href="" class="relative py-3 px-8 text-gray-800 text-left text-lg // flex items-center"><img src="img/icon-menu/burger.png" class="float-left w-10 mr-2"> Mixta</a></li>
                        </ul>
                    </li> -->
                    <li class="relative float-none border-b-[1px] bg-pinklight // first:rounded-tl-lg first:rounded-tr-lg last:rounded-bl-lg last:rounded-br-lg">
                        <a href="javascript:void(0)" class="roboto-light relative py-3 px-3 text-secondary text-left text-lg // flex items-center">
                            {{-- <img src="./images/icon-menu/cupcake.png" class="float-left w-10 mr-2"> --}}
                            Detergent
                        </a>
                    </li>
                    <li class="relative float-none border-b-[1px] bg-pinklight // first:rounded-tl-lg first:rounded-tr-lg last:rounded-bl-lg last:rounded-br-lg">
                        <a href="javascript:void(0)" class="roboto-light relative py-3 px-3 text-secondary text-left text-lg // flex items-center">
                            {{-- <img src="./images/icon-menu/can.png" class="float-left w-10 mr-2">  --}}
                            Category 2
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-11/12 md:w-8/12 lg:w-9/12 mx-auto p-5">
                <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-4 place-content-center">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="relative bg-pastel rounded-md p-3 drop-shadow-[0px_0px_3px_rgba(0,0,0,0.10)] hover:drop-shadow-[0px_0px_3px_rgba(0,0,0,0.18)]">
                            <div class="w-full flex justify-center items-center mb-2">
                                <img src="./images/productos/ariel.png" class="mx-auto max-h-[250px] min-w-full w-auto md:cursor-zoom-in preview">
                            </div>
                            <a href="javascript:void(0)" id="btn_addToCart" class="inline-flex z-0 absolute right-3 justify-center items-center w-7 h-7 absoluted right-3d // bg-primary py-0.5 px-1.5 rounded-full text-left text-lg cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="filter: invert(100%) sepia(0%) saturate(0%) hue-rotate(47deg) brightness(106%) contrast(103%);"><title>plus</title><path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" /></svg>
                            </a>
                            <div class="">
                                <h1 class="text-lg text-secondary text-left roboto-light">$7.99</h1>
                                <h1 class="text-lg text-secondary text-left roboto-medium">Ariel</h1>
                                <p class="text-sm text-secondary font-normal text-left roboto-lightitalic">Description here...</p>
                            </div>
                            <form class="-ml-3 absolute bottom-0 w-full hidden" id="form_count">
                                <div class="flex">
                                    <span class="restar_cantidad inline-flex items-center px-3 text-sm text-slate-100 text-xl bg-primary rounded-l-md cursor-pointer">
                                        <span class="restar_simbolo -mt-1 rotate-45">+</span>
                                    </span>
                                    <input type="text" class="view_total_cantidad text-secondary text-center bg-white block flex-1 min-w-0 w-full text-sm p-1.5 rounded-none ring-0 border-0" disabled value="1" />
                                    <span class="inline-flex items-center px-3 text-sm text-slate-100 text-xl bg-primary rounded-r-md cursor-pointer">
                                        <span class="-mt-1">+</span>
                                    </span>
                                </div>
                            </form>
                        </div>

                        <div class="relative bg-pastel rounded-md p-3 drop-shadow-[0px_0px_3px_rgba(0,0,0,0.10)] hover:drop-shadow-[0px_0px_3px_rgba(0,0,0,0.18)]">
                            <div class="w-full flex justify-center items-center mb-2">
                                <img src="./images/productos/wash.png" class="mx-auto max-h-[250px] min-w-full w-auto md:cursor-zoom-in preview">
                            </div>
                            <a href="javascript:void(0)" id="btn_addToCart" class="inline-flex z-0 absolute right-3 justify-center items-center w-7 h-7 absoluted right-3d // bg-primary py-0.5 px-1.5 rounded-full text-left text-lg cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="filter: invert(100%) sepia(0%) saturate(0%) hue-rotate(47deg) brightness(106%) contrast(103%);"><title>plus</title><path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" /></svg>
                            </a>
                            <div class="">
                                <h1 class="text-lg text-secondary text-left roboto-light">$5.90</h1>
                                <h1 class="text-lg text-secondary text-left roboto-medium">Wash</h1>
                                <p class="text-sm text-secondary font-normal text-left roboto-lightitalic">
                                    Description Here...
                                </p>
                            </div>
                            <form class="-ml-3 absolute bottom-0 w-full hidden" id="form_count">
                                <div class="flex">
                                    <span class="restar_cantidad inline-flex items-center px-3 text-sm text-slate-100 text-xl bg-primary rounded-l-md cursor-pointer">
                                        <span class="restar_simbolo -mt-1 rotate-45">+</span>
                                    </span>
                                    <input type="text" class="view_total_cantidad text-secondary text-center bg-white block flex-1 min-w-0 w-full text-sm p-1.5 rounded-none ring-0 border-0" disabled value="1" />
                                    <span class="inline-flex items-center px-3 text-sm text-slate-100 text-xl bg-primary rounded-r-md cursor-pointer">
                                        <span class="-mt-1">+</span>
                                    </span>
                                </div>
                            </form>
                        </div>

                        <div class="relative bg-pastel rounded-md p-3 drop-shadow-[0px_0px_3px_rgba(0,0,0,0.10)] hover:drop-shadow-[0px_0px_3px_rgba(0,0,0,0.18)]">
                            <div class="w-full flex justify-center items-center mb-2">
                                <img src="./images/productos/escoba.png" class="mx-auto max-h-[250px] min-w-full w-auto md:cursor-zoom-in preview">
                            </div>
                            <a href="javascript:void(0)" id="btn_addToCart" class="inline-flex z-0 absolute right-3 justify-center items-center w-7 h-7 absoluted right-3d // bg-primary py-0.5 px-1.5 rounded-full text-left text-lg cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="filter: invert(100%) sepia(0%) saturate(0%) hue-rotate(47deg) brightness(106%) contrast(103%);"><title>plus</title><path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" /></svg>
                            </a>
                            <div class="">
                                <h1 class="text-lg text-secondary text-left roboto-light">$10.00</h1>
                                <h1 class="text-lg text-secondary text-left roboto-medium">Sweeping Broom</h1>
                                <p class="text-sm text-secondary font-normal text-left roboto-lightitalic">
                                    Description Here...
                                </p>
                            </div>
                            <form class="-ml-3 absolute bottom-0 w-full hidden" id="form_count">
                                <div class="flex">
                                    <span class="restar_cantidad inline-flex items-center px-3 text-sm text-slate-100 text-xl bg-primary rounded-l-md cursor-pointer">
                                        <span class="restar_simbolo -mt-1 rotate-45">+</span>
                                    </span>
                                    <input type="text" class="view_total_cantidad text-secondary text-center bg-white block flex-1 min-w-0 w-full text-sm p-1.5 rounded-none ring-0 border-0" disabled value="1" />
                                    <span class="inline-flex items-center px-3 text-sm text-slate-100 text-xl bg-primary rounded-r-md cursor-pointer">
                                        <span class="-mt-1">+</span>
                                    </span>
                                </div>
                            </form>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection