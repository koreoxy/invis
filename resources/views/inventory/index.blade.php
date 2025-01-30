@extends('layouts.layout')

@section('title', 'Invis - Inventory')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Form Input Inventory</h1>
        
        <form method="POST" action="{{ url('inventory') }}" class="space-y-6">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nama Barang -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="product_name">
                        Nama Barang
                    </label>
                    <input type="text" id="product_name" name="product_name" 
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        placeholder="Masukkan nama barang">
                </div>

                <!-- Kode Barang -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="product_code">
                        Kode Barang
                    </label>
                    <input type="text" id="product_code" name="product_code"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        placeholder="Masukkan kode barang">
                </div>

                <!-- Stok -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="stock">
                        Stok Barang
                    </label>
                    <input type="number" id="stock" name="stock"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        placeholder="0">
                </div>

                <!-- Minimum Stok -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="min_stock">
                        Minimum Stok
                    </label>
                    <input type="number" id="min_stock" name="min_stock"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        placeholder="0">
                </div>

                <!-- Harga Beli -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="purchase_price">
                        Harga Beli
                    </label>
                    <input type="number" id="purchase_price" name="purchase_price"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        placeholder="Rp 0">
                </div>

                <!-- Harga Jual -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="selling_price">
                        Harga Jual
                    </label>
                    <input type="number" id="selling_price" name="selling_price"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        placeholder="Rp 0">
                </div>

                <!-- Kategori -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="category">
                        Kategori
                    </label>
                    <select id="category" name="category"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="">Pilih Kategori</option>
                        <option value="electronics">Elektronik</option>
                        <option value="fashion">Fashion</option>
                        <option value="food">Makanan</option>
                    </select>
                </div>

                <!-- Lokasi Penyimpanan -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2" for="storage_location">
                        Lokasi Penyimpanan
                    </label>
                    <input type="text" id="storage_location" name="storage_location"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                        placeholder="Masukkan lokasi penyimpanan">
                </div>
            </div>

            <!-- Deskripsi -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="description">
                    Deskripsi Barang
                </label>
                <textarea id="description" name="description" rows="3"
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    placeholder="Masukkan deskripsi barang"></textarea>
            </div>

            <!-- Tombol Submit -->
            <div class="flex justify-end space-x-4">
                <button type="reset"
                    class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Reset
                </button>
                <button type="submit"
                    class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

