<?php

namespace App\Http\Controllers\frontend;

use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Exhibition;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->limit(8)->get();
        $categoriesCount = Category::count();
        $exhibitions = Exhibition::latest()->limit(6)->get();
        $exhibitionsCount = Exhibition::count();
        // dd($exhibitions);
        $data = Data::where('name', 'Technical Data')->where('visibility', 1)->first();
        return view('frontend.index', compact('categories', 'categoriesCount', 'exhibitions', 'exhibitionsCount', 'data'));
    }
}
