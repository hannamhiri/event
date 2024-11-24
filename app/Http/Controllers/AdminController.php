<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator; 

use Illuminate\Http\Request;
class AdminController extends Controller
{

  
  


    public function listadmin()
    {
        $users = User::where('usertype', 'admin')->paginate(10); // 10 utilisateurs par page
    
        return view('admin.listadmin', [
            'listadmin' => $users,
        ]);
    }
    public function addAdmin(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email', // Unicité de l'email
            'password' => 'required|string|confirmed|min:8',
          
        ]);
    
        // Gestion de l'image de profil
    
        // Création de l'utilisateur
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
            
            'usertype' => 'admin', 
        ]);
    
        return redirect()->back()->with('success', 'Administrateur ajouté avec succès !');
    }
    public function showProfile()
    {
        $user = Auth::user();
        return view('admin.profiladmin', compact('user', ));
    }
    
     public function update(Request $request, $id)
{
    $request->validate([
        'fullName' => 'required|string|max:255',
       
        'email' => 'required|email|max:255',
    ]);

    $user = User::findOrFail($id);

 

    $user->name = $request->fullName;

    $user->email = $request->email;
    $user->save();

    return redirect()->back()->with('success', 'Profile updated successfully!');
}

public function changePassword(Request $request)
    {
        // Validate the input fields
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
            'renew_password' => 'required|same:new_password',
        ]);

        // Check if the current password matches
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        // Update the password
        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Redirect back with a success message
        return back()->with('success', 'Password successfully changed');
    }
    public function destroy($id)
    {
        $user = User::find($id);
        
        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'Utilisateur supprimé avec succès !');
        }
    
        return redirect()->back()->withErrors(['error' => 'Utilisateur introuvable.']);
    }
}