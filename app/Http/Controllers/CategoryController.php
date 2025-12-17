<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Session\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories'
        ]);
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        session()->flash('success', 'Category created successfully.');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {

        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        Session()->flash('success', 'Category Updated successfully.');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category->delete();
        Session()->flash('success', 'Category Deleted successfully.');
        return redirect()->route('categories.index');
    }
}
