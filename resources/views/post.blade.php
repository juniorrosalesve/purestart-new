@extends('layouts.theme')

@section('body')
    <div class="bg-pastel text-primary min-h-screen p-8">
        <div class="max-w-[90%] mx-auto">
            <!-- Blog Post -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-primary-light text-2xl mb-2 abril">{{ $post->nombre }}</h2>
                <p class="text-sm text-gray-600">{{ $post->created_at->format('F j, Y') }}</p>
                <img class="my-4 rounded" src="{{ asset('storage/posts/'.$post->image) }}" alt="Image of blog post 1">
                <p class="my-4 lato">{{ $post->descripcion }}</p>
            </div>
        </div>
    </div>
@endsection