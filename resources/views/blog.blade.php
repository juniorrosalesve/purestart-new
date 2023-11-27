@extends('layouts.theme')

@section('body')
<div class="bg-pastel text-primary min-h-screen p-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-[90%] mx-auto">
        @foreach ($posts as $item)
            <div class="bg-white rounded-lg shadow-md p-6 cursor-pointer">
                <a href="{{ route('post', [
                    'nombre' => \Illuminate\Support\Str::slug($item->nombre),
                    'id' => $item->id
                ]) }}">
                    <h2 class="text-primary-light text-xl mb-2 abril">{{ $item->nombre }}</h2>
                    <p class="text-sm text-gray-600 lato font-semibold">{{ $item->created_at->format('F j, Y') }}</p>
                        <img class="my-4 rounded" src="{{ asset('storage/posts/'.$item->image) }}" alt="Image of blog post 1">
                    <p class="mb-4 lato">{{ \Illuminate\Support\Str::limit($item->descripcion, 150, '...') }}</p>
                    <a href="{{ route('post', [
                        'nombre' => \Illuminate\Support\Str::slug($item->nombre),
                        'id' => $item->id
                    ]) }}" class="lato text-primary-light">Read more</a>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection