<div class="h-[120px] py-7 wrapper bg-primary italic">
    <div class="flex items-center h-full">
        <h1 class="w-40% md:35% 2xl:w-[20%] mx-auto text-3xl md:text-5xl abril text-left text-pastel">
            What We <span class="lato-thin italic">Clean</span>
        </h1>
    </div>
    @for ($i = 1; $i < 10; $i++)
        <div class="burbuja"><span class="dot"></span></div>
    @endfor
</div>
<div class="grid grid-cols-1 md:grid-cols-2">
    <div class="w-full bg-icon-edificio"></div>
    <div class="md:flex md:justify-center items-center bg-[#e6f8f1]">
        <div class="service-info text-2xl my-2 mx-1 md:my-0 md:mx-0 md:w-[50%]" data-aos="fade-in" data-aos-duration="500">
            <p>CORPORATE OFFICES</p>
            <p>LEASING OFFICES</p>
            <p>MEDICAL OFFICES</p>
            <p>CLASSROOMS/DAYCARES</p>
            <p>CENTERS/SCHOOLS</p>
            <p>RETAIL STORES</p>
        </div>
    </div>

    <div class="w-full bg-icon-garaje md:hidden"></div>
    <div class="md:flex md:justify-center items-center bg-[#e6f8f1]">
        <div class="service-info text-2xl my-2 mx-1 md:my-0 md:mx-0 md:w-[50%]" data-aos="fade-in" data-aos-duration="500">
            <p>VACANT UNITS</p>
            <p>WORKSPACES</p>
            <p>NEW CONSTRUCTION UNITS</p>
            <p>SHOWROOMS</p>
            <p>STORAGE UNITS</p>
        </div>
    </div>
    <div class="w-full bg-icon-garaje hidden md:block"></div>

    <div class="w-full bg-icon-casa"></div>
    <div class="md:flex md:justify-center items-center bg-[#e6f8f1]">
        <div class="service-info text-2xl my-2 mx-1 md:my-0 md:mx-0 md:w-[50%]" data-aos="fade-in" data-aos-duration="500">
            <p>REAL ESTATE LISTINGS</p>
            <p>MOVE IN/OUT CLEANINGS</p>
            <p>VACATION RENTALS</p>
            <p>CLUB HOUSES</p>
            <p>STR/LTR UNITS</p>
        </div>
    </div>
</div>
<div class="h-[120px] py-7 wrapper bg-primary italic">
    <div class="flex items-center h-full">
        <h1 class="w-40% md:35% 2xl:w-[20%] mx-auto text-3xl md:text-5xl abril text-left text-pastel">
            Our <span class="lato-thin italic">Services</span>
        </h1>
    </div>
    @for ($i = 1; $i < 10; $i++)
        <div class="burbuja"><span class="dot"></span></div>
    @endfor
</div>
<div class="bg-pastel p-10">
    <div class="md:flex md:justify-between md:mx-20">
        <div class="my-auto">
            <div class="md:flex">
                <div class="my-auto mr-10">
                    <img src="{{ asset('images/icons/burbujas.svg') }}" alt="burbujas" class="w-52">
                </div>
                <div class="my-auto service-info2 text-lg">
                    <p>DEEP CLEANING</p>
                    <p>SANITIZING</p>
                    <p>DISINFECTING</p>
                    <p>DUSTING</p>
                </div>
            </div>
            <br />
            <div class="md:flex">
                <div class="my-auto mr-10">
                    <img src="{{ asset('images/icons/manos.svg') }}" alt="manos" class="w-52">
                </div>
                <div class="my-auto service-info2 text-lg">
                    <p>DRY WIPING</p>
                    <p>WET WIPING</p>
                    <p>WET WIPING</p>
                    <p>SPOT WIPING</p>
                    <p>POLISHING</p>
                </div>
            </div>
            <br />
            <div class="md:flex">
                <div class="my-auto mr-10">
                    <img src="{{ asset('images/icons/aspiradora.svg') }}" alt="aspiradora" class="w-52">
                </div>
                <div class="my-auto service-info2 text-lg">
                    <p>VACUUMING</p>
                    <p>MOPPING</p>
                    <p>SWEEPING</p>
                </div>
            </div>
            <br />
            <div class="md:flex">
                <div class="my-auto mr-10">
                    <img src="{{ asset('images/icons/notas.svg') }}" alt="notas" class="w-52">
                </div>
                <div class="my-auto service-info2 text-lg">
                    <p>SPECIAL SERVICES (UNDER REQUEST)</p>
                    <p>ORGANIZING (UNDER REQUEST)</p>
                    <p>BEFORE/AFTER EVENT CLEANING</p>
                </div>
            </div>
        </div>
        <div class="mt-10 md:my-auto">
            <a href="#contact" class="mb-3 md:mb-0">
                <button class="btn-book-cleaning" data-aos="fade-in" data-aos-duration="500">Book a Cleaning!</button>
            </a>
        </div>
    </div>
</div>