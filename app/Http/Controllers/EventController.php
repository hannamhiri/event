<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {   $events = Event::all();
            return view('event.show_events')->with("events", $events);
        }
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $categories = Category::all(); 
        return view('event.create_event', compact('categories')); 


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'date_begin' => ['required'],
            'date_end' => ['required'],
            'time' => ['required'],
            'location' => ['required'],
            'id_categorie' => ['required'],
            'description' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
       
        $imagePath = $request->file('image')->store('uploads', 'public');
    
        $event = new Event();
        $event->id_user = Auth::user()->id; 
        $event->title = $request->input('title'); 
        $event->date_begin = $request->input('date_begin'); 
        $event->date_end = $request->input('date_end'); 
        $event->time = $request->input('time'); 
        $event->location = $request->input('location'); 
        $event->price = $request->input('price'); 
        $event->id_categorie = $request->input('id_categorie'); 
        $event->description = $request->input('description'); 
        $event->image = $imagePath; 
    
        
        $event->save();

        if (Auth::user()->usertype == 'admin') {
            return redirect()->route('event.index')->with('success', 'Catégorie ajoutée avec succès.');
        } else {
            
            return $this->showEventByUser();
        }        

    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $event =Event::findOrFail($id);
        $categories = Category::all(); 
        return view('event.edit_event')->with('event',$event)->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => ['required'],
            'date_begin' => ['required'],
            'date_end' => ['required'],
            'time' => ['required'],
            'location' => ['required'],
            'id_categorie' => ['required'],
            'description' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'], // L'image peut être nullable
        ]);
    
        // Vérifier si une nouvelle image est téléchargée
        if ($request->hasFile('image')) {
            if ($event->image) {
                Storage::delete('public/' . $event->image);
            }
    
            $imagePath = $request->file('image')->store('uploads', 'public');
            $event->image = $imagePath;
        }
    
        // Mise à jour des autres champs
        $event->update([
            "title" => $request->title,
            "date_begin" => $request->date_begin,
            "date_end" => $request->date_end,
            "time" => $request->time,
            "location" => $request->location,
            "price" => $request->price,
            "description" => $request->description,
            "id_categorie" => $request->id_categorie,
        ]);
    
        // Mise à jour de l'utilisateur associé à l'événement
        $event->id_user = Auth::user()->id;
        $event->save();
    
        // Redirection selon le type d'utilisateur
        if (Auth::user()->usertype == 'admin') {
            return redirect()->route('event.index')->with('success', 'Événement modifié avec succès.');
        } else {
            return $this->showEventByUser();
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        if ($event->delete()){
            return redirect()->route('event.index');
        }
        else{
            echo"error";
        }
    }

    public function showEventByUser(){
        $user_id = Auth::user()->id;  
        $events = Event::where('id_user', $user_id)->get();  

        return view('user.show_events')->with('events', $events);

    }
}
