<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $suppliers = Supplier::get();

        $view_data = [
            'suppliers' => $suppliers,
        ];

        return view('suppliers.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        return view ('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $supplier_name = $request->input('supplier_name');
        $supplier_phone= $request->input('supplier_phone');
        $supplier_address = $request->input('supplier_address');

        Supplier::create([
            'supplier_name' => $supplier_name,
            'supplier_phone' => $supplier_phone,
            'supplier_address'=> $supplier_address,
        ]);

        return redirect('suppliers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $supplier = Supplier::where('id', '=', $id)->first();

        $view_data = [
            'supplier' => $supplier,

        ];
        return view('suppliers.show', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         if (!Auth::check()) {
            return redirect('login');
        }

        $supplier = Supplier::where('id', $id)->first();

        $view_data = [
            'supplier' => $supplier,
        ];

        return view('suppliers.edit', $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $supplier_name = $request->input('supplier_name');
        $supplier_phone = $request->input('supplier_phone');
        $supplier_address = $request->input('supplier_address');

        Supplier::where('id', $id)
            ->update([
                'supplier_name' => $supplier_name,
                'supplier_phone' => $supplier_phone,
                'supplier_address' => $supplier_address,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

        return redirect("suppliers/{$id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        Supplier::where('id', $id)->delete();
        return redirect('suppliers');
    }
}
