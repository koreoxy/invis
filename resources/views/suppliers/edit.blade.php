@extends('layouts.layout')

@section('title', 'Invis - Edit Suplliers')

@section('content')

    <div class="mx-auto max-w-lg">
        <h1 class="font-bold mb-2">Edit</h1>
        <form class="w-full max-w-lg" method="POST" action="{{ url("suppliers/$supplier->id") }}">
            @method('PATCH')
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="supplier_name">
                        Nama Pemasok
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" id="supplier_name" name="supplier_name" value="{{ $supplier->supplier_name }}">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="supplier_phone">
                        Nomor Hp
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" id="supplier_phone" name="supplier_phone" value="{{ $supplier->supplier_phone }}">
                </div>

            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2" for="supplier_address">
                        Alamat
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" id="supplier_address" name="supplier_address"
                        value="{{ $supplier->supplier_address }}">
                </div>
            </div>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
        </form>
    </div>
@endsection
