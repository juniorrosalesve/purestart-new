<!DOCTYPE html>
<html lang="es" data-theme="cupcake">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Purestart, LLC</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/css/extra.css'])
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    </head>
    <body>
        <div class="flex flex-row h-screen">
            <div class="flex flex-col w-1/5 bg-gray-800">
                <img class="w-[140px] mx-auto mt-4" src="{{ asset('images/purestart_logo.png') }}" alt="Logo">
                <nav class="mt-5 px-2 flex-1">
                    <a href="{{ route('dashboard') }}" class="
                    @if(\Request::route()->getName() == 'dashboard') 
                        bg-gray-900 text-white
                    @else 
                        text-gray-300 hover:bg-gray-700
                    @endif 
                    group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <!-- Heroicon name: home -->
                        
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 h-6 w-6 text-gray-300 group-hover:text-gray-200 group-focus:text-gray-200" viewBox="0 0 24 24"><title>order-bool-descending</title><path fill="#fff" d="M6 13C3.79 13 2 14.79 2 17S3.79 21 6 21 10 19.21 10 17 8.21 13 6 13M6 19C4.9 19 4 18.1 4 17S4.9 15 6 15 8 15.9 8 17 7.1 19 6 19M6 3C3.79 3 2 4.79 2 7S3.79 11 6 11 10 9.21 10 7 8.21 3 6 3M12 5H22V7H12V5M12 19V17H22V19H12M12 11H22V13H12V11Z" /></svg>
                        Pedidos
                    </a>
                
                    <a href="{{ route('ventas') }}" class="@if(\Request::route()->getName() == 'ventas') 
                        bg-gray-900 text-white
                    @else 
                        text-gray-300 hover:bg-gray-700
                    @endif rounded-md group flex items-center px-2 py-2 text-sm font-medium">
                        <!-- Heroicon name: users -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 h-6 w-6 text-gray-300 group-hover:text-gray-200 group-focus:text-gray-200" viewBox="0 0 24 24"><title>cash-register</title><path fill="#fff" d="M2,17H22V21H2V17M6.25,7H9V6H6V3H14V6H11V7H17.8C18.8,7 19.8,8 20,9L20.5,16H3.5L4.05,9C4.05,8 5.05,7 6.25,7M13,9V11H18V9H13M6,9V10H8V9H6M9,9V10H11V9H9M6,11V12H8V11H6M9,11V12H11V11H9M6,13V14H8V13H6M9,13V14H11V13H9M7,4V5H13V4H7Z" /></svg>
                        Ventas
                    </a>
                    <a href="{{ route('clientes') }}" class="@if(\Request::route()->getName() == 'clientes') 
                        bg-gray-900 text-white
                    @else 
                        text-gray-300 hover:bg-gray-700
                    @endif rounded-md group flex items-center px-2 py-2 text-sm font-medium">
                        <!-- Heroicon name: users -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 h-6 w-6 text-gray-300 group-hover:text-gray-200 group-focus:text-gray-200" viewBox="0 0 24 24"><title>account-heart-outline</title><path fill="#fff" d="M5,15L4.4,14.5C2.4,12.6 1,11.4 1,9.9C1,8.7 2,7.7 3.2,7.7C3.9,7.7 4.6,8 5,8.5C5.4,8 6.1,7.7 6.8,7.7C8,7.7 9,8.6 9,9.9C9,11.4 7.6,12.6 5.6,14.5L5,15M15,4A4,4 0 0,0 11,8A4,4 0 0,0 15,12A4,4 0 0,0 19,8A4,4 0 0,0 15,4M15,10.1A2.1,2.1 0 0,1 12.9,8A2.1,2.1 0 0,1 15,5.9C16.16,5.9 17.1,6.84 17.1,8C17.1,9.16 16.16,10.1 15,10.1M15,13C12.33,13 7,14.33 7,17V20H23V17C23,14.33 17.67,13 15,13M21.1,18.1H8.9V17C8.9,16.36 12,14.9 15,14.9C17.97,14.9 21.1,16.36 21.1,17V18.1Z" /></svg>
                        Clientes
                    </a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 rounded-md group flex items-center px-2 py-2 text-sm font-medium">
                        <!-- Heroicon name: users -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mr-4 h-6 w-6 text-gray-300 group-hover:text-gray-200 group-focus:text-gray-200"><title>store-outline</title><path fill="#fff" d="M18.36 9L18.96 12H5.04L5.64 9H18.36M20 4H4V6H20V4M20 7H4L3 12V14H4V20H14V14H18V20H20V14H21V12L20 7M6 18V14H12V18H6Z" /></svg>
                        Productos
                    </a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 rounded-md group flex items-center px-2 py-2 text-sm font-medium">
                        <!-- Heroicon name: users -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mr-4 h-6 w-6 text-gray-300 group-hover:text-gray-200 group-focus:text-gray-200"><title>shape-plus-outline</title><path fill="#fff" d="M11 11V2H2V11M4 9V4H9V9M20 6.5C20 7.9 18.9 9 17.5 9S15 7.9 15 6.5 16.11 4 17.5 4 20 5.11 20 6.5M6.5 14L2 22H11M7.58 20H5.42L6.5 18.08M22 6.5C22 4 20 2 17.5 2S13 4 13 6.5 15 11 17.5 11 22 9 22 6.5M19 17V14H17V17H14V19H17V22H19V19H22V17Z" /></svg>
                        Categorías
                    </a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 rounded-md group flex items-center px-2 py-2 text-sm font-medium">
                        <!-- Heroicon name: users -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mr-4 h-6 w-6 text-gray-300 group-hover:text-gray-200 group-focus:text-gray-200"><title>bullhorn-outline</title><path fill="#fff" d="M12,8H4A2,2 0 0,0 2,10V14A2,2 0 0,0 4,16H5V20A1,1 0 0,0 6,21H8A1,1 0 0,0 9,20V16H12L17,20V4L12,8M15,15.6L13,14H4V10H13L15,8.4V15.6M21.5,12C21.5,13.71 20.54,15.26 19,16V8C20.53,8.75 21.5,10.3 21.5,12Z" /></svg>
                        Blog
                    </a>
                    <a href="{{ route('profile.edit') }}" class="@if(\Request::route()->getName() == 'profile.edit') 
                        bg-gray-900 text-white
                    @else 
                        text-gray-300 hover:bg-gray-700
                    @endif rounded-md group flex items-center px-2 py-2 text-sm font-medium">
                        <!-- Heroicon name: users -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="mr-4 h-6 w-6 text-gray-300 group-hover:text-gray-200 group-focus:text-gray-200"><title>account-box-outline</title><path fill="#fff" d="M19,19H5V5H19M19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16.5,16.25C16.5,14.75 13.5,14 12,14C10.5,14 7.5,14.75 7.5,16.25V17H16.5M12,12.25A2.25,2.25 0 0,0 14.25,10A2.25,2.25 0 0,0 12,7.75A2.25,2.25 0 0,0 9.75,10A2.25,2.25 0 0,0 12,12.25Z" /></svg>
                        Cuenta
                    </a>
                </nav>
            </div>
            <div class="flex flex-col w-4/5 overflow-auto bg-gray-100">
                <div class="container mx-auto py-10 px-4 sm:px-6 lg:px-8">
                    @yield('body')
                </div>
            </div>
        </div>
        {{-- <div class="flex h-full bg-base-200" id="body_sidebar">
            <div class="w-auto h-full p-4 bg-base-100 text-base-content">
                <ul class="menu h-screen p-4 pb-20 w-80 bg-base-100 text-base-content">
                    <div class="bg-base-300 shadow absolute w-full left-0 top-0 p-2">
                        <img src="{{ asset('images/purestart_logo.png') }}" alt="logo" width="130" class="mx-auto">
                    </div>
                    <li style="margin-top:110px;" 
                    @if (\Request::route()->getName() == 'dashboard')
                        class="bg-secondary text-secondary-content rounded-lg"
                    @endif>
                        <a href="{{ route('dashboard') }}">
                            <span class="mdi mdi-mailbox inline-block text-lg stroke-current"></span>
                            Pedidos
                        </a>
                    </li>
                    <li
                    @if (\Request::route()->getName() == 'ventas')
                        class="bg-secondary text-secondary-content rounded-lg"
                    @endif>
                        <a href="{{ route('ventas') }}">
                            <span class="mdi mdi-mailbox inline-block text-lg stroke-current"></span>
                            Ventas
                        </a>
                    </li>
                    <li
                    @if (\Request::route()->getName() == 'clientes')
                        class="bg-secondary text-secondary-content rounded-lg"
                    @endif>
                        <a href="{{ route('clientes') }}">
                            <span class="mdi mdi-mailbox inline-block text-lg stroke-current"></span>
                            Clientes
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <span class="mdi mdi-mailbox inline-block text-lg stroke-current"></span>
                            Productos
                        </a>
                    </li>
                    <li
                    @if (\Request::route()->getName() == 'categorias' || \Request::route()->getName() == 'addCategoria')
                        class="bg-secondary text-secondary-content rounded-lg"
                    @endif>
                        <a href="{{ route('categorias') }}">
                            <span class="mdi mdi-mailbox inline-block text-lg stroke-current"></span>
                            Categorías
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <span class="mdi mdi-mailbox inline-block text-lg stroke-current"></span>
                            Blog
                        </a>
                    </li>
                    <li 
                    @if (\Request::route()->getName() == 'profile.edit')
                        class="bg-secondary text-secondary-content rounded-lg"
                    @endif>
                        <a href="{{ route('profile.edit') }}">
                            <span class="mdi mdi-account-edit inline-block text-lg stroke-current"></span>
                            Cuenta
                        </a>
                    </li>
                </ul>
            </div>
            <div class="h-screen flex-grow p-5 bg-base-200">
                <div class="container">
                    @yield('body')
                </div>
            </div>
        </div> --}}

        <script>
            $(function(){
                $("#table, #table2").DataTable({
                    order:[
                        [0, 'desc']
                    ]
                });
            })
        </script>
    </body>
</html>
