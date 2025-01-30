@extends('layouts.layout')

@section('title', 'Invis - Details Product')



@section('content')
    <div class="flex justify-between items-center mb-2">
        <h1 class="font-bold text-lg">Details Categories</h1>
    </div>

    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-semibold">{{ $category->name }}</h2>


        <a href="{{ url('categories') }}"
            class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
            Kembali
        </a>
    </div>
@endsection
