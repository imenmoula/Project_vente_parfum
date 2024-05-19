<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parfum;
use App\Models\Category;


class ParfumController extends Controller
{

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $parfum=Parfum::with('category')->get();
       $categories= Category::with('parfum')->get();
       

       return view('admin.parfums.index',compact('parfum','categories'));
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id='')
    {
        $categories=Category::all();
        $parfum=Parfum::all();
        return view('admin.parfums.create',compact('categories','parfum'));
       
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:category,id',
            'nom' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'qte_stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'volume' => 'required|numeric',
            'genre' => 'required|string|max:255',
            'marque' => 'required|string|max:255',
        ]);

        $parfum = new Parfum();
        $parfum->category_id = $request->input('category_id');
        $parfum->nom = $request->input('nom');
        $parfum->description = $request->input('description');
        $parfum->prix = $request->input('prix');
        $parfum->qte_stock = $request->input('qte_stock');
        $parfum->volume = $request->input('volume');
        $parfum->genre = $request->input('genre');
        $parfum->marque = $request->input('marque');

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/parfum/', $filename);
            $parfum->image = $filename;
        }

        $parfum->save();

        return redirect()->route('admin.parfums.index')->with('success', 'Parfum created successfully.');
    }


    public function edit($id)
{
    $parfum = Parfum::findOrFail($id);
    $categories = Category::all();
    return view('admin.parfums.edit', compact('parfum', 'categories'));
}



public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:category,id',
            'nom' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'qte_stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'volume' => 'required|numeric',
            'marque' => 'required|string|max:255',
        ]);

        $parfum = Parfum::findOrFail($id);
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/parfum/', $filename);
            $parfum->image = $filename;
        }

        $parfum->category_id = $request->input('category_id');
        $parfum->nom = $request->input('nom');
        $parfum->description = $request->input('description');
        $parfum->prix = $request->input('prix');
        $parfum->qte_stock = $request->input('qte_stock');
        $parfum->volume = $request->input('volume');
        $parfum->marque = $request->input('marque');
        $parfum->save();

        return redirect()->route('admin.parfums.index')->with('success', 'Parfum updated successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parfum=Parfum::find($id);
       
        return view('admin.parfums.show',compact('parfum'));
    }
    public function destroy($id)
    {
        $parfum = Parfum::findOrFail($id);
        $parfum->delete();
        return redirect()->route('admin.parfums.index')->with('success', 'Parfum deleted successfully.');
    }
}
