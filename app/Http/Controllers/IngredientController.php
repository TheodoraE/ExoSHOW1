<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class IngredientController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::all();
        return view('welcome', compact('ingredients'));
    }

    public function create()
    {
        return view('pages/create');
    }

    public function store(Request $request)
    {
        $store = new Ingredient;
        $store->nom = $request->nom;
        $store->quantite = $request->quantite;
        $store->photo = $request->photo;

        $store->save();
        return redirect()->back();
    }

    public function show($id)
    {
        $show = Ingredient::find($id);
        return view('pages/show', compact('show'));
    }

    public function destroy($id)
    {
        $destroy = Ingredient::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
