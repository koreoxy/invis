@extends('layouts.layout')

@section('title', 'Invis - Products')

@section('content')
    <div class="flex justify-between items-center mb-2">
        <h1 class="font-bold">Dashboard</h1>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer"
            href="{{ url('products/create') }}">Create</a>
    </div>

    <div class="flex flex-col border rounded-md bg-white shadow p-6">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                    No</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                    Nama Produk</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                    Harga</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                    Kategori</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                    Nama Pemasok</th>
                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500">
                                    Action</th>
                            </tr>
                        </thead>


                        <tbody class="divide-y divide-gray-200">
                            @foreach ($products as $product)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                        {{ $product->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                        {{ $product->product_name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                        {{ number_format($product->price, 0, ',', '.') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                        {{ $product->categorie ? $product->categorie->name : 'Tidak Ada Pemasok' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                        {{ $product->supplier ? $product->supplier->supplier_name : 'Tidak Ada Pemasok' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a href="{{ url("products/$product->id") }}"
                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Details</a>
                                        <a href="{{ "products/$product->id/edit" }}"
                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Edit</a>

                                        <form method="POST" action="{{ url("products/$product->id") }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit"
                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 focus:outline-none focus:text-red-800 disabled:opacity-50 disabled:pointer-events-none">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
