<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mission;

class MissionController extends Controller
{
    // Lister toutes les missions
    public function index()
    {
        $missions = Mission::all();
        return view('Missions.listMissionsAdmin', compact('missions'));
    }

    // Ajouter une nouvelle mission
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $mission = new Mission();
        $mission->nom = $request->nom;
        $mission->description = $request->description;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $mission->image = $path; 
           
                        $mission->image = $path;
        }

        $mission->save();

        return redirect()->back()->with('success', 'Activité ajoutée avec succès.');
    }

    // Mettre à jour une mission existante
    public function update(Request $request, $id)
    {
      

        $mission = Mission::findOrFail($id);
        $mission->nom = $request->nom;
        $mission->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $mission->image = $imagePath;
        }

        $mission->save();

        return redirect()->back()->with('success', 'Activité mise à jour avec succès.');
    }

    // Supprimer une mission
    public function destroy($id)
    {
        $mission = Mission::findOrFail($id);

        $mission->delete();

        return redirect()->back()->with('success', 'Activité supprimée avec succès.');
    }


    public function showMissions()
{
    $missions = Mission::all();  // Fetch all missions from the database
    return view('Activites.activites', compact('missions'));  // Pass data to the view
}

// Controller Method
public function valider($id) {
    $mission = Mission::find($id);
    $mission->lus = 1; // Set lu to 1 for today
    $mission->save();

    return redirect()->back();
}

}