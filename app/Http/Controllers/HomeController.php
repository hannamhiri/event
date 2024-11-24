<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    
    public function index (){
        if (Auth::id()){
            $usertype=Auth()->user()->usertype;

            if ($usertype == 'user'){
                return view ('accueil');
            }
            else if  ($usertype == 'admin'){
               
        return view('admin.home');
    }
    }
}

   
    public function deleteUser($id)
    {
     $user = User::find($id);
     $user->delete();

        return redirect()->back()->with('success', 'Utilisateur supprimé avec succès.');
    }
    public function blockUser($id)
    {
        $user = User::find($id);
        $user->is_blocked = 1;
        $user->save();

        return redirect()->back()->with('success', 'Utilisateur bloqué avec succès.');
    }
    public function unblockUser($id)
    {
         $user = User::find($id);
        $user->is_blocked = 0;
        $user->save();

        return redirect()->back()->with('success', 'Utilisateur débloqué avec succès.');
    }

    public function createAdmin (){
        return view('admin.users.create_user');
    }
    
    public function addAdmin(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);
    
        // Créer l'admin
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'usertype' => "admin"
        ]);
    
        // Rediriger vers la liste des utilisateurs avec un message de succès
        return redirect()->route('users.list')->with('success', 'Admin crée avec succès!');
    }
    
    
    public function updatePseudoName(Request $request)
    {
        // Validate the pseudo input
        $request->validate([
            'pseudoName' => 'required|string|max:255',
        ]);
    
        // Retrieve the authenticated user
        $user = Auth::user();
    
        // Update the 'name' column with the new pseudo name from the request
        $user->name = $request->pseudoName;
    
        // Save the updated user instance
        $user->save();
    
        // Redirect to the 'listusers' page after updating with a success message
        return redirect()->route('listusers')->with('success', 'Pseudo name updated successfully!');
    }
    
    
    public function getUsers()
    {
        // Retrieve all users where the roleType is 'user'
        $users = User::where('usertype', 'user')->get();
    
        // Return the users (you can return to a view or JSON response)
        return view('listusers', compact('users')); // or return response()->json($users);
    }
    
}
