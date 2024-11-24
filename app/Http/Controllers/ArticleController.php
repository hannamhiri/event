<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie; // Assurez-vous que Categorie est bien importé
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    // Affiche la liste des articles
    public function index()
    {
        $articles = Article::all(); // Récupérer tous les articles
        return view('articles.index', compact('articles')); // Retourner la vue avec les articles
    }

    // Affiche le formulaire pour créer un nouvel article
    public function create()
    {
        $categories = Categorie::all(); // Récupérer toutes les catégories pour afficher dans un select
        return view('articles.create', compact('categories'));
    }

    // Enregistrer un nouvel article dans la base de données
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'titre' => ['required', 'string', 'max:255'],
            'id_categorie' => ['required', 'exists:categories,id'], 
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'description' => ['required'],
        ]);

        $imagePath = $request->file('image')->store('articles', 'public'); 
        
        $article = new Article();
        $article->titre = $request->input('titre');
        $article->id_categorie = $request->input('id_categorie');
        $article->image = $imagePath;
        $article->description = $request->input('description');
       // $article->user_create = Auth::user()->id; // Si vous voulez enregistrer l'utilisateur qui a créé l'article

        $article->save(); 

        return redirect()->route('article.index')->with('success', 'Article créé avec succès.');
    }

    
    public function getarticle()
    {
        $articles = Article::all(); 
        return view('Avis.avis', compact('articles'));
    }

    
    public function edit($id)
    {
        $article = Article::findOrFail($id); // Récupérer l'article
        $categories = Categorie::all(); // Récupérer toutes les catégories
        return view('articles.edit', compact('article', 'categories'));
    }

    // Mettre à jour un article existant
    public function update(Request $request, $id)
    {
        // Validation des données du formulaire
        $request->validate([
            'titre' => ['required'],
            'id_categorie' => ['required'], 
        
            'description' => ['required', 'string'],
        ]);

        $article = Article::findOrFail($id); // Récupérer l'article à modifier

        // Si une nouvelle image est téléchargée, la traiter
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');
            $article->image = $imagePath; // Mettre à jour l'image
        }

        // Mettre à jour les autres champs
        $article->titre = $request->input('titre');
        $article->id_categorie = $request->input('id_categorie');
        $article->description = $request->input('description');
        //$article->user_modify = Auth::user()->id; // Si vous voulez enregistrer l'utilisateur qui a modifié l'article

        $article->save(); // Sauvegarder les modifications

        return redirect()->route('article.index')->with('success', 'Article mis à jour avec succès.');
    }

    // Supprimer un article
    public function destroy($id)
    {
        $article = Article::findOrFail($id); // Récupérer l'article

        
        if ($article->delete()) {
            return redirect()->route('article.index')->with('success', 'Article supprimé avec succès.');
        } else {
            return redirect()->route('article.index')->with('error', 'Erreur lors de la suppression de l\'article.');
        }
    }
}
