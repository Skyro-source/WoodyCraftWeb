<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie = Categorie::all();
        return view('puzzles.accueil', compact('puzzles'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        return view('puzzles.categorie', compact('puzzle'));
    }
}
