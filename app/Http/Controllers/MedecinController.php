<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use Illuminate\Http\Request;

class MedecinController extends Controller
{
    /**
     * Affiche une liste de tous les médecins.
     */
    public function index()
    {
        $medecins = Medecin::all(); // Récupérer tous les médecins
        return view('medecins.index', compact('medecins')); // Vue pour afficher les médecins
    }

    /**
     * Montre le formulaire pour créer un nouveau médecin.
     */
    public function create()
    {
        return view('medecins.create'); // Vue du formulaire de création
    }

    /**
     * Enregistre un nouveau médecin dans la base de données.
     */
    public function store(Request $request)
{
    // Validation des données
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'parcours' => 'required|string|max:500',
        'specialite' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation de l'image
    ]);

    // Stockage de l'image et récupération du chemin
    $imagePath = $request->file('image')->store('articles', 'public');

    // Création du médecin avec les données validées et l'image
    Medecin::create([
        'nom' => $validated['nom'],
        'parcours' => $validated['parcours'],
        'specialite' => $validated['specialite'],
        'image' => $imagePath, // Ajout du chemin de l'image
    ]);

    // Redirection avec message de succès
    return redirect()->route('medecin.index')->with('success', 'Médecin créé avec succès.');
}


    /**
     * Affiche les détails d'un médecin spécifique.
     */
    public function show(Medecin $medecin)
    {
        return view('medecins.show', compact('medecin')); // Vue pour un médecin spécifique
    }

    /**
     * Montre le formulaire pour modifier un médecin existant.
     */
    public function edit(Medecin $medecin)
    {
        return view('medecins.edit', compact('medecin')); // Vue du formulaire de modification
    }

    /**
     * Met à jour les données d'un médecin existant.
     */
    public function update(Request $request, Medecin $medecin)
    {
        // Validation des données
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'parcours' => 'required|string|max:500',
            'specialite' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation de l'image
        ]);
    
        // Vérifier si une nouvelle image a été téléchargée
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($medecin->image) {
                $oldImagePath = public_path('storage/' . $medecin->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);  // Supprimer l'ancienne image du disque
                }
            }
    
            // Télécharger la nouvelle image
            $imagePath = $request->file('image')->store('articles', 'public');  // Stocke l'image dans le répertoire 'public/articles'
            $validated['image'] = $imagePath;  // Ajouter le chemin de l'image à la validation
        }
    
        // Mise à jour des données
        $medecin->update($validated);
    
        return redirect()->route('medecin.index')->with('success', 'Médecin mis à jour avec succès.');
    }
    

    /**
     * Supprime un médecin.
     */
    public function destroy(Medecin $medecin)
    {
        $medecin->delete(); // Suppression du médecin
        return redirect()->route('medecin.index')->with('success', 'Médecin supprimé avec succès.');
    }



public function getmedecin()
    {
        $medecins = Medecin::all(); 
        return view('Doctors.doctors', compact('medecins'));
    }



    public function rendezVous()
    {
        $medecins = Medecin::all(); 
        return view('Doctors.doctors', compact('medecins'));
    }

}