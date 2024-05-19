<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date_creation' => 'required|date',
            'status' => 'required|string',
            'sexe' => 'required|string',
        ]);
    
        $category = new Category();
    
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/parfum/', $filename);
            $category->image = $filename;
        }
    
        $category->nom = $request->input('nom');
        $category->description = $request->input('description');
        $category->date_creation = $request->input('date_creation');
        $category->date_update = now();
        $category->status = $request->input('status');
        $category->sexe = $request->input('sexe');
        $category->save();
    
        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }
 


public function edit($id)
{
    $category = Category::findOrFail($id);
    return view('admin.categories.edit', compact('category'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'date_update' => 'required|date',
        'status' => 'required|string',
    ]);

    $category = Category::findOrFail($id);

    if($request->hasFile('image')) {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ext;
        $file->move('uploads/parfum/', $filename);
        $category->image = $filename;
    }

    $category->nom = $request->input('nom');
    $category->description = $request->input('description');
    $category->date_update = now();
    $category->status = $request->input('status');
    $category->save();

    return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
}
public function show($id)
{
    $categories = category::find($id);
     return view('admin.categories.show')->with('categories', $categories);
}

public function destroy($id)
    {
    $categorie=category::where('id',$id)->first();
    $categorie->delete();
    return  back()->withSuccess('Categorie supprimer  avec succe');
    }


}


