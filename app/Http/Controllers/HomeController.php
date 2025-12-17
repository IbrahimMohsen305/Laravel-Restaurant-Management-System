<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $meals = Meal::with('category')->latest()->get();
        $categories = Category::all();
        return view('home', compact('meals', 'categories'));
    }

    public function category($id)
    {
        $meals = Meal::with('category')
            ->where('category_id', $id)
            ->latest()
            ->get();
        $categories = Category::all();
        return view('home', compact('meals', 'categories'));
    }
}
