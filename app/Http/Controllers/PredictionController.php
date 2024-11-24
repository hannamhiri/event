<?php


namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;



class PredictionController extends Controller
{
 


        public function showForm()
        {
            // Affichez le formulaire pour soumettre les données
            return view('models.predict');
        }
    
        public function predict(Request $request)
        {
            $feature = $request->input('feature');
    
            // Vérifiez si la valeur est fournie et est numérique
            if (is_null($feature) || !is_numeric($feature)) {
                return redirect()->back()->with('error', 'Veuillez fournir une valeur numérique valide.');
            }
    
            try {
                // Créer un client HTTP avec Guzzle
                $client = new Client();
    
                // Envoyer la requête POST à l'API Flask
                $response = $client->post('http://127.0.0.1:5000/predict', [
                    'json' => ['feature' => [(float) $feature]]  // Envoyer la valeur convertie en float
                ]);
    
                // Décoder la réponse JSON et obtenir la prédiction
                $body = json_decode($response->getBody(), true);
                $prediction = $body['prediction'][0] ?? 'Erreur dans la réponse de l\'API';
    
                // Retourner la prédiction dans la vue
                return view('models.predict', compact('prediction'));
            } catch (RequestException $e) {
                // Capturez les erreurs de la requête Guzzle
                $error = $e->getMessage();
                return redirect()->back()->with('error', 'Erreur lors de la connexion à l\'API Flask : ' . $error);
            } catch (\Exception $e) {
                // Capturez toute autre erreur
                return redirect()->back()->with('error', 'Une erreur inattendue est survenue : ' . $e->getMessage());
            }
        }
    }
    
