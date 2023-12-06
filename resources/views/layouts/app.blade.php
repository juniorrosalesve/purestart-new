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
        @vite(['resources/css/app.css', 'resources/css/extra.css', 'resources/css/materialdesignicons.css'])
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

        <style>
            .menu[class*=p-] li {
                margin-bottom: -20px;
            }
            .menu[class*=p-] li a {
                border-radius: var(--rounded-btn,.5rem);
            }
            .menu[class*=p-] li .dropmenu {
                border-radius: var(--rounded-btn,.5rem);
            }
            .menu :where(li)>.dropmenu {
                cursor: pointer;
            }
            .menu li>a, .menu li>span, .menu li>.dropmenu {
                padding: 0.2rem 1rem;
                color:currentColor;
            }
            .menu li>.dropmenu:focus, .menu li>.dropmenu:hover {
                --tw-bg-opacity: 1;
                --tw-bg-opacity: 0.1;
                background-color: hsla(var(--bc)/var(--tw-bg-opacity,1));
            }
        </style>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    </head>
    <body>
        <div class="flex h-full bg-base-200" id="body_sidebar">
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
        </div>

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
