<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //PENGECEKANA JIKA USER TIDAK LOGIN DI REDIRECT
        if (!Auth::check()) {
            return redirect('login');
        }

       $products = Product::with('supplier')->get();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //PENGECEKANA JIKA USER TIDAK LOGIN DI REDIRECT
        if (!Auth::check()) {
            return redirect('login');
        }

        $suppliers = Supplier::all();
        return view('products.create', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //PENGECEKANA JIKA USER TIDAK LOGIN DI REDIRECT
        if (!Auth::check()) {
            return redirect('login');
        }

        // $name = $request->input('name');
        // $code_products = $request->input('code_products');
        // $price = $request->input('price');

        // Product::create([
        //     'name' => $name,
        //     'code_products' => $code_products,
        //     'price' => $price,
        // ]);

        // return redirect('products');

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);

        // Simpan ke database
        Product::create([
            'product_name' => $request->input('name'),
            'product_desc' => $request->input('description'),
            'price' => $request->input('price'),
            'supplier_id' => $request->input('supplier_id'),
        ]);

        // Redirect dengan pesan sukses
        return redirect('products')->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        //PENGECEKANA JIKA USER TIDAK LOGIN DI REDIRECT
        if (!Auth::check()) {
            return redirect('login');
        }

        $product = Product::with('supplier')->findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        //PENGECEKANA JIKA USER TIDAK LOGIN DI REDIRECT
        if (!Auth::check()) {
            return redirect('login');
        }

        $product = Product::findOrFail($id);
        $suppliers = Supplier::all(); // Ambil semua pemasok

        return view('products.edit', compact('product', 'suppliers'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        //PENGECEKANA JIKA USER TIDAK LOGIN DI REDIRECT
        if (!Auth::check()) {
            return redirect('login');
        }

         // Validasi input
        $validated = $request->validate([
            'product_name' => 'required|string|max:100',
            'product_desc' => 'required|string',
            'price' => 'required|numeric|min:0',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);

        // Cari produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Update data produk
        $product->update([
            'product_name' => $validated['product_name'],
            'product_desc' => $validated['product_desc'],
            'price' => $validated['price'],
            'supplier_id' => $validated['supplier_id'],
            'updated_at' => now(),
        ]);

        return redirect("products/{$id}")->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        //PENGECEKANA JIKA USER TIDAK LOGIN DI REDIRECT
        if (!Auth::check()) {
            return redirect('login');
        }

        Product::where('id', $id)->delete();
        return redirect('products');
    }
}
