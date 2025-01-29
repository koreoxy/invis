@extends('layouts.layout')

@section('title', 'Invis - Create')

{{-- @section('content')

    <div class="mx-auto max-w-lg">
        <h1 class="font-bold mb-2">Create</h1>
        <form class="w-full max-w-lg" method="POST" action="{{ url('products') }}">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                        Nama Produk
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" id="name" name="name" placeholder="Teh Botol">
                </div>
                <div class="w-full px-3">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="code_products">
                        Produk Deskripsi
                    </label>

                    <textarea
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-50"
                        placeholder=" "></textarea>
                </div>

            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="price">
                        Harga
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="number" id="price" name="price" placeholder="10.000">
                </div>
                <div class="w-full px-3">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="price">
                        Nama Pemasok
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" id="price" name="price" placeholder="Nama Pemasok">
                </div>
            </div>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
        </form>
    </div>
@endsection --}}

@section('content')
    <div class="mx-auto max-w-lg">
        <h1 class="font-bold mb-2">Create Product</h1>
        <form class="w-full max-w-lg" method="POST" action="{{ url('products') }}">
            @csrf
            <div class="w-full my-3">
                <label class="block text-gray-700 text-xs font-bold mb-2" for="name">Nama Produk</label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4"
                    type="text" id="name" name="name" placeholder="Teh Botol" required>
            </div>

            <div class="w-full my-3">
                <label class="block text-gray-700 text-xs font-bold mb-2" for="description">Deskripsi Produk</label>
                <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4"
                    id="description" name="description" placeholder="Deskripsi produk" required></textarea>
            </div>

            <div class="w-full my-3">
                <label class="block text-gray-700 text-xs font-bold mb-2" for="price">Harga</label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4"
                    type="number" id="price" name="price" placeholder="10000" required>
            </div>

            <div class="w-full my-3">
                <label class="block text-gray-700 text-xs font-bold mb-2" for="supplier_id">Nama Pemasok</label>
                <select
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4"
                    id="supplier_id" name="supplier_id" required>
                    <option value="">Pilih Pemasok</option>
                    @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->supplier_name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
        </form>
    </div>
@endsection
