@extends('layouts.app')
@section('body')
    <div class="mt-32">
        <div class="card shadow bordered bg-base-100">
            <div class="card-body">
                <div class="flex justify-between my-4">
                    <div>
                        <h2 class="text-2xl inline-block">Ventas</h2>
                    </div>
                    {{-- <div>
                        <button onclick="location.href='#';" class="btn btn-primary btn-sm">Registrar</button> 
                    </div> --}}
                </div><hr />
                <div class="overflow-x-auto mt-5">
                    <table class="table table-compact w-full" id="table">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Nombre</td>
                                <td>Email</td>
                                <td>Correo</td>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection