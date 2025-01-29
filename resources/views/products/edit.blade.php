@extends('layouts.layout')

@section('title', 'Edit Product')

@section('content')
    <div class="mx-auto max-w-lg">
        <h1 class="font-bold mb-2">Edit Product</h1>
        <form class="w-full max-w-lg" method="POST" action="{{ url("products/$product->id") }}">
            @method('PATCH')
            @csrf

            <div class="w-full my-3">
                <label class="block text-gray-700 text-xs font-bold mb-2" for="product_name">Nama Produk</label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4"
                    type="text" id="product_name" name="product_name"
                    value="{{ old('product_name', $product->product_name) }}" required>
            </div>

            <div class="w-full my-3">
                <label class="block text-gray-700 text-xs font-bold mb-2" for="product_desc">Deskripsi Produk</label>
                <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4"
                    id="product_desc" name="product_desc" required>{{ old('product_desc', $product->product_desc) }}</textarea>
            </div>

            <div class="w-full my-3">
                <label class="block text-gray-700 text-xs font-bold mb-2" for="price">Harga</label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4"
                    type="number" step="0.01" id="price" name="price" value="{{ old('price', $product->price) }}"
                    required>
            </div>

            <div class="w-full my-3">
                <label class="block text-gray-700 text-xs font-bold mb-2" for="supplier_id">Nama Pemasok</label>
                <select
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4"
                    id="supplier_id" name="supplier_id" required>
                    <option value="">Pilih Pemasok</option>
                    @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}" {{ $product->supplier_id == $supplier->id ? 'selected' : '' }}>
                            {{ $supplier->supplier_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
        </form>
    </div>
@endsection
