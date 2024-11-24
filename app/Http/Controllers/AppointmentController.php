<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;


use App\Models\Medecin;

class AppointmentController extends Controller
{
     // Display the appointment form with doctor details
     public function showAppointment($doctor_id)
     {
         $doctor = Medecin::findOrFail($doctor_id); // Retrieve the doctor details
         return view('appointement.appointement', compact('doctor')); // Pass doctor details to the view
     }
 
     // Handle the appointment form submission
     public function submitAppointment(Request $request, $doctor_id)
     {
         // Validate the appointment form data
         $request->validate([
             'name' => 'required|string|max:255',
             'phone' => 'required|string|max:20',
             'email' => 'required|email|max:255',
             'message' => 'required|string|max:1000',
         ]);
 
         // Create the appointment entry in the database
         Appointment::create([
             'user_id' => auth()->id(), // Assuming you're using authentication and have a logged-in user
             'doctor_id' => $doctor_id,  // ID of the selected doctor
             'name' => $request->name,
             'phone' => $request->phone,
             'email' => $request->email,
             'message' => $request->message,
         ]);
 
         // Redirect to a confirmation page or back to the appointment form with a success message
         return redirect()-redirect()->with('success', 'Rendez-vous réservé avec succès!');
     }
}


