<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Models\Category;
use App\Models\Parfum;

class PromotionController extends Controller
{
    public function index()
    {
        $promotions = Promotion::all();
        return view('admin.promotion.index', compact('promotions'));
    }

    public function create()
    {
        $categories = Category::all();
        $parfums = Parfum::all();
        return view('admin.promotion.create', compact('categories', 'parfums'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'nom_promotio' => 'required|max:255',
            'description' => 'required|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
            'pourcentage' => 'required|integer',
            'category_id' => 'required|exists:category,id',
            'parfum_id' => 'required|exists:parfum,id',
        ]);

        $promotion = new Promotion();
        $promotion->nom_promotio = $request->nom_promotio;
        $promotion->description = $request->description;
        $promotion->date_debut = $request->date_debut;
        $promotion->date_fin = $request->date_fin;
        $promotion->pourcentage = $request->pourcentage;
        $promotion->category_id = $request->category_id;
        $promotion->parfum_id = $request->parfum_id;
        $promotion->save();

        return redirect()->route('admin.promotion.index')->with('success', 'Promotion créée avec succès!');
 
    }

    public function edit($id)
    {
        $promotion = Promotion::findOrFail($id);
        $categories = Category::all();
        $parfums = Parfum::all();
        return view('admin.promotion.edit', compact('promotion', 'categories', 'parfums'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:category,id',
            'parfum_id' => 'required|exists:parfum,id',
            'nom_promotio' => 'required|max:255',
            'description' => 'required|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
            'pourcentage' => 'required|integer',
        ]);

        $promotion = Promotion::findOrFail($id);
        $promotion->category_id = $request->category_id;
        $promotion->parfum_id = $request->parfum_id;
        $promotion->nom_promotio = $request->nom_promotio;
        $promotion->description = $request->description;
        $promotion->date_debut = $request->date_debut;
        $promotion->date_fin = $request->date_fin;
        $promotion->pourcentage = $request->pourcentage;
        $promotion->save();

        return redirect()->route('admin.promotion.index')->with('success', 'Promotion mise à jour avec succès!');
    }

    public function destroy($id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->delete();
        return redirect()->route('admin.promotion.index')->with('success', 'Promotion supprimée avec succès!');
    }
    public function show($id)
    {
        $promotion = Promotion::findOrFail($id);
        return view('admin.promotion.show', compact('promotion'));
    }

}
