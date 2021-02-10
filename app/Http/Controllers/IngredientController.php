<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::all();
        return view('welcome', compact('ingredients'));
    }

    public function create()
    {
        $ingredients = Ingredient::all();
        return view('pages/create', compact('ingredients'));
    }

    public function store(Request $request)
    {
        $store = new Ingredient;
        $store->nom = $request->nom;
        $store->quantite = $request->quantite;
        $store->photo = $request->photo;

        $store->save;
        return redirect()->back();
    }
}
