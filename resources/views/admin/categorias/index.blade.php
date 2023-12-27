@extends('layouts.app')
@section('body')
    <div>
        <div class="card shadow bordered bg-base-100">
            <div class="card-body">
                <div class="flex justify-between my-4">
                    <div>
                        <h2 class="text-2xl inline-block">Categorías</h2>
                    </div>
                    <div>
                        <a href="{{ route('addCategoria') }}">
                            <button class="btn btn-primary btn-sm">Añadir</button> 
                        </a>
                    </div>
                </div><hr />
                <div class="overflow-x-auto mt-5">
                    <table class="table table-compact w-full" id="table">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Nombre</td>
                                <td>Productos asignados</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nombre }}</td>
                                    <td>0</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection