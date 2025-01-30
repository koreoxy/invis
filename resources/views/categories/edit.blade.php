@extends('layouts.layout')

@section('title', 'Invis - Categories')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Form Edit Kategori</h1>

            <form method="POST" action="{{ url(path: "categories/$category->id") }}" class="space-y-6">
                @method('PATCH')
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nama Kategori -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="name">
                            Nama Kategori
                        </label>
                        <input type="text" id="name" name="name"
                            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 py-3 px-4"
                            value="{{ old('name', $category->name) }}">
                    </div>
                </div>

                <!-- Tombol Submit -->
                <div class="flex justify-end space-x-4">
                    <button type="submit"
                        class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
