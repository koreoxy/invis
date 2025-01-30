@extends('layouts.layout')

@section('title', 'Invis - Details Product')



@section('content')
    <div class="flex justify-between items-center mb-2">
        <h1 class="font-bold text-lg">Details Product</h1>
    </div>

    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-semibold">{{ $product->product_name }}</h2>
        <p class="text-gray-700">Harga: <span class="font-semibold">Rp
                {{ number_format($product->price, 0, ',', '.') }}</span></p>
        <p class="text-gray-700">Deskripsi: {{ $product->product_desc }}</p>
        <p class="text-gray-700">
            Kategori:
            <span class="font-semibold">
                {{ $product->categorie ? $product->categorie->name : 'Tidak Ada Pemasok' }}
            </span>
        </p>
        <p class="text-gray-700">
            Pemasok:
            <span class="font-semibold">
                {{ $product->supplier ? $product->supplier->supplier_name : 'Tidak Ada Pemasok' }}
            </span>
        </p>

        <a href="{{ url('products') }}"
            class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
            Kembali
        </a>
    </div>
@endsection
