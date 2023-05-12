<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PURESTART, LLC</title>

    <!-- TailwindCSS -->
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ asset('css/extra.css') }}">
</head>
<body>
    <div class="bg-green flex justify-evenly p-3 lg:text-lg">
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
    <!-- MENU -->
    <div>
        <div class="flex justify-center mt-3">
            <div>
                <img src="./images/purestart_logo.png" alt="purestart-logo" class="w-44">
            </div>
        </div>
        <div class="flex justify-center">
            <ul class="menu uppercase text-lg">
                <li onclick="location.href='{{ route('home') }}'">Home</li>
                <li onclick="location.href='{{ route('about') }}'">About</li>
                <li>Services</li>
                <li>Reviews</li>
                <li>Faq</li>
                <li>Contact</li>
            </ul>
        </div>
    </div>

    @yield('body')

    <!-- FOOTER -->
    <footer class="bg-footer">
        <div class="flex justify-around legend-footer-text text-3xl font-semibold">
            <div class="my-10 -ml-10">
                <ul>
                    <li>Home</li>
                    <li>About</li>
                    <li>Services</li>
                    <li>Reviews</li>
                    <li>Contact</li>
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
    <p class="text-center p-4 bg-footer footer-copyright text-sm font-thin">
        PURESTART LLC. PRIVACY POLICY. WEB DESIGN BY VALENTINA G.M.
    </p>
</body>
</html>