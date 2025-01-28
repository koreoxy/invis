@extends('layouts.layout')

@section('title', 'Invis - Create')

@section('content')
    <div class="flex justify-between items-center mb-2">
        <h1 class="font-bold">Create</h1>
    </div>

    <div>

        <form class="w-full max-w-lg" method="POST" action="{{ url('products') }}">

            @csrf

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                        Nama Produk
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" id="name" name="name" placeholder="Teh Botol">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="code_products">
                        Kode Product
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" id="code_products" name="code_products" placeholder="teh-botol">
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
            </div>
            <button type="submit" class="bg-sky-500 p-4 rounded-md text-white cursor-pointer">Save</button>
        </form>
    </div>
@endsection
