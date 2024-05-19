<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parfum;


class ParfumController extends Controller
{

    public function index()
    {
        $parfum=Parfum::with('category')->get();
        $categories=Category::with('parfums')->get();
        return view('admin.parfums.index', compact('parfums'));
    }

    public function create()
    {
        $categories=Category::all();
        
        return view('admin.parfums.create', compact('categories'));
    }
    
}
