<?php

namespace App\Http\Controllers;

use App\Models\Categorie; // Utilisation correcte du modèle Categorie
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategorieController extends Controller
{
    /**
     * Afficher la liste des catégories.
     */
    public function index()
    {
        // Récupérer toutes les catégories
        $categories = Categorie::all();

        // Retourner la vue avec la variable $categories
        return view('categories.index', compact('categories'));
    }

    /**
     * Afficher le formulaire pour créer une nouvelle catégorie.
     */
    public function create()
    {
        return view('categories.create'); // Vue pour créer une catégorie
    }

    /**
     * Enregistrer une nouvelle catégorie dans la base de données.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required'], // Validation du champ 'nom'
        ]);

        $categorie = new Categorie();
        $categorie->nom = $request->input('nom'); // Attribuer le nom de la catégorie
        $categorie->save(); // Sauvegarder dans la base de données

        return view('categories.index')->with('success', 'Catégorie créée avec succès.');
    }

    /**
     * Afficher une catégorie spécifique.
     */
    public function show($id)
    {
        $categorie = Categorie::findOrFail($id); // Récupérer une catégorie ou afficher une erreur
        return view('categories.show')->with('categorie', $categorie);
    }

    /**
     * Afficher le formulaire pour modifier une catégorie existante.
     */
    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id); // Récupérer la catégorie
        return view('categories.edit')->with('categorie', $categorie);
    }

    /**
     * Mettre à jour une catégorie existante.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'], // Validation du champ 'nom'
        ]);

        $categorie = Categorie::findOrFail($id);
        $categorie->nom = $request->input('nom'); // Mettre à jour le champ 'nom'
        $categorie->save(); // Sauvegarder les modifications

        return redirect()->route('categorie.index')->with('success', 'Catégorie mise à jour avec succès.');
    }

    /**
     * Supprimer une catégorie.
     */
    public function destroy($id)
    {
        $categorie = Categorie::find($id);
        if ($categorie->delete()){
            return redirect()->route('categorie.index');
        }
        else{
            echo"error";
        }
    }
}
