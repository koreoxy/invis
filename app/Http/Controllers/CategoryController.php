<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if (!Auth::check()) {
            return redirect('login');
        }

        $categories = Category::get();

        $view_data = [
            'categories' => $categories,
        ];

        return view('categories.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        return view ('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         if (!Auth::check()) {
            return redirect('login');
        }

        $name = $request->input('name');


        Category::create([
            'name' => $name,
        ]);

        return redirect('categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $category = Category::where('id', '=', $id)->first();

        $view_data = [
            'category' => $category,

        ];
        return view('categories.show', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $category = Category::where('id', $id)->first();

        $view_data = [
            'category' => $category,
        ];

        return view('categories.edit', $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $name = $request->input('name');

        Category::where('id', $id)
            ->update([
                'name' => $name,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

        return redirect("categories/{$id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        Category::where('id', $id)->delete();
        return redirect('categories');
    }
}
