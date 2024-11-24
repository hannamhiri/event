<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Models\Journaling;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class JournalingController extends Controller
{
    public function create()
    {
        // Return the view for creating journal entries
        return view('journal');
    }

    public function store(Request $request)
    {
        // Validate input text
        $request->validate([
            'text' => 'required|string',  // Ensure the text is a valid string
        ]);

        // Get the input text from the request
        $text = $request->input('text');

        // Call the Flask API to analyze emotions
        //$emotion_data = $this->analyzeEmotion($text);

        // If the API returns an error, pass the error message to the view
        if (isset($emotion_data['error'])) {
            return view('result', ['error' => $emotion_data['error']]);
        }

        // Create a new journal entry
        $journal = new Journaling();
        $journal->user_id = Auth::id();  // Get the current authenticated user ID
        
        $journal->text = $text;  // Store the text in the journal entry
        $text="depressed mode";

          $journal->emotion_data = json_encode([
            "text" => "depressed mode"
        ]);
         
          
          // Store the emotion data (already JSON from the API)
        $journal->save();  // Save the journal entry to the database

        return redirect()->back();
        // Return the results to the 'result' view with the emotion data
        //return view('result', compact('emotion_data'));
    }

    public function analyzeEmotion($text)
    {
        try {
            // Send a POST request to the Flask API
            $response = Http::post('http://localhost:5000/generate', [
                'text' => $text,  // Pass the text to the Flask API
            ]);

            // Check if the response is successful
            if ($response->successful()) {
                $data = $response->json();  // Decode the JSON response from Flask
                // Ensure the response contains the 'response' key
                if (isset($data['response'])) {
                    return $data['response'];  // Return the generated response
                } else {
                    \Log::error('Flask API response does not contain "response" key');
                    return ['error' => 'Flask API response format is incorrect'];
                }
            } else {
                \Log::error('Flask API error: ' . $response->body());
                return ['error' => 'Flask API returned an error'];
            }
        } catch (\Exception $e) {
            \Log::error('Failed to connect to Flask API: ' . $e->getMessage());
            return ['error' => 'Failed to connect to Flask API'];
        }
    }
}








