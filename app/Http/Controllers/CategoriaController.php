<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index() {
        return view('admin.categorias.index', [
            'categorias' => Categoria::orderBy('created_at', 'asc')->get()
        ]);
    }
    public function add() {
        return view('admin.categorias.add');
    }

    public function store(Request $r) {
        Categoria::create($r->except('_token'));
        return "<script>alert('Creado correctamente!');location.href='".route('categorias')."';</script>";
    }
}