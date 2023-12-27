@extends('layouts.app')
@section('body')
    <div>
        <div class="card bg-base-100">
            <div class="card-body">
                <div class="flex justify-between my-4">
                    <div>
                        <h2 class="text-2xl inline-block">Pedidos</h2>
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
                                <td>Fecha</td>
                                <td>Nombre</td>
                                <td>Total</td>
                                <td>Despachado</td>
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