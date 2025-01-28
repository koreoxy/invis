<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

        $products = Product::get();

        $view_data = [
            'products' => $products,
        ];

        return view('products.index', $view_data);
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

        return view ('products.create');
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

        $name = $request->input('name');
        $code_products = $request->input('code_products');
        $price = $request->input('price');

        Product::create([
            'name' => $name,
            'code_products' => $code_products,
            'price' => $price,
        ]);

        return redirect('products');
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

        $product = Product::where('id', '=', $id)->first();
        $price = Product::where('price')->get();

        $view_data = [
            'product' => $product,
            'price' => $price,
        ];
        return view('products.show', $view_data);
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

        $product = Product::where('id', $id)->first();

        $view_data = [
            'product' => $product,
        ];

        return view('products.edit', $view_data);
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

        $name = $request->input('name');
        $code_products = $request->input('code_products');
        $price = $request->input('price');

        Product::where('id', $id)
            ->update([
                'name' => $name,
                'code_products' => $code_products,
                'price' => $price,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

        return redirect("products/{$id}");
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
