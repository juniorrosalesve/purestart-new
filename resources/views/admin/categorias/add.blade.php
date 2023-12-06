@extends('layouts.app')
@section('body')
    <div class="mt-32">
        <div class="card shadow bordered bg-base-100">
            <div class="card-body">
                <div class="text-sm breadcrumbs">
                    <ul>
                        <li>
                            <a href="{{ route('categorias') }}">Categorías</a>
                        </li> 
                        <li>Nueva categoría</li>
                    </ul>
                </div>
                <form method="POST" action="{{ route('storeCategoria') }}">
                    @csrf
                    <div class="grid grid-cols-1">
                        <div>
                            <div class="divider mb-8 text-xl">Información</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1">
                        <div class="mt-5 ml-3">
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Nombre <i class="text-red-500">*</i></span>
                                </label> 
                                <input type="text" name="nombre" class="input input-bordered" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <hr style="margin-top:30px;">
                    <div class="modal-action">
                        <button type="submit"class="btn btn-primary btn-sm" wire:loading.attr="disabled">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection