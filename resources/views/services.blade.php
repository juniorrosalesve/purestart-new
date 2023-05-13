@extends('layouts.theme')
@section('body')
    <div class="bg-yellow-vertical p-5">
        <h1 class="text-5xl title_about text-center">WE ENJOY CLEANING</h1>
    </div>
    <div class="grid grid-cols-2">
        <div class="w-full bg-icon-edificio">
            <img src="{{ asset('images/icons/edificio.svg') }}" alt="icon-1" class="icon-color-white">
        </div>
        <div class="flex justify-center items-center bg-[#e6f8f1]">
            <div class="service-info text-2xl">
                <p>CORPORATE OFFICES</p>
                <p>LEASING OFFICES</p>
                <p>MEDICAL OFFICES</p>
                <p>CLASSROOMS/DAYCARES</p>
                <p>CENTERS/SCHOOLS</p>
                <p>RETAIL STORES</p>
            </div>
        </div>

        <div class="flex justify-center items-center bg-[#e6f8f1]">
            <div class="service-info text-2xl">
                <p>VACANT UNITS</p>
                <p>WORKSPACES</p>
                <p>NEW CONSTRUCTION UNITS</p>
                <p>SHOWROOMS</p>
                <p>STORAGE UNITS</p>
            </div>
        </div>
        <div class="w-full bg-icon-garaje">
            <img src="{{ asset('images/icons/garaje.svg') }}" alt="icon-1" class="icon-color-white">
        </div>

        <div class="w-full bg-icon-casa">
            <img src="{{ asset('images/icons/casa.svg') }}" alt="icon-1" class="icon-color-white">
        </div>
        <div class="flex justify-center items-center bg-[#e6f8f1]">
            <div class="service-info text-2xl">
                <p>REAL ESTATE LISTINGS</p>
                <p>MOVE IN/OUT CLEANINGS</p>
                <p>VACATION RENTALS</p>
                <p>CLUB HOUSES</p>
                <p>STR/LTR UNITS</p>
            </div>
        </div>
    </div>
    <div class="bg-yellow p-5">
        <h1 class="text-5xl title_about text-center">OUR LOVELY SERVICES</h1>
    </div>
    <div class="bg-green3 p-10">
        <br /><br />
        <div class="flex ml-20">
            <div class="my-auto mr-20">
                <img src="{{ asset('images/icons/burbujas.svg') }}" alt="burbujas" class="w-52 icon-color-orange">
            </div>
            <div class="my-auto bg-[#edda00] py-4 px-10 text-center rounded-2xl service-info2 text-lg">
                <p>DEEP CLEANING</p>
                <p>SANITIZING</p>
                <p>DISINFECTING</p>
                <p>DUSTING</p>
            </div>
        </div>
        <br />
        <div class="flex ml-20">
            <div class="my-auto mr-20">
                <img src="{{ asset('images/icons/manos.svg') }}" alt="manos" class="w-52 icon-color-orange">
            </div>
            <div class="my-auto bg-[#edda00] py-4 px-10 text-center rounded-2xl service-info2 text-lg">
                <p>DRY WIPING</p>
                <p>WET WIPING</p>
                <p>WET WIPING</p>
                <p>SPOT WIPING</p>
                <p>POLISHING</p>
            </div>
        </div>
        <br />
        <div class="flex ml-20">
            <div class="my-auto mr-20">
                <img src="{{ asset('images/icons/aspiradora.svg') }}" alt="aspiradora" class="w-52 icon-color-orange">
            </div>
            <div class="my-auto bg-[#edda00] py-4 px-10 text-center rounded-2xl service-info2 text-lg">
                <p>VACUUMING</p>
                <p>MOPPING</p>
                <p>SWEEPING</p>
            </div>
        </div>
        <br />
        <div class="flex ml-20">
            <div class="my-auto mr-20">
                <img src="{{ asset('images/icons/notas.svg') }}" alt="notas" class="w-52 icon-color-orange">
            </div>
            <div class="my-auto bg-[#edda00] py-4 px-4 text-center rounded-2xl service-info2 text-lg">
                <p>SPECIAL SERVICES (UNDER REQUEST)</p>
                <p>ORGANIZING (UNDER REQUEST)</p>
                <p>BEFORE/AFTER EVENT CLEANING</p>
            </div>
        </div>
    </div>
@endsection