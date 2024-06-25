<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DossierPartie;
use App\Models\Dossier;
use Illuminate\Support\Str;
use App\Models\Modele;
use App\Models\Marque;
use App\Models\Partie;
use Carbon\Carbon;
use DB;


class DashboardController extends Controller
{
    public function dossiers()
    {
        return view('dossiers');
    }

    public function addDossierIndex()
    {
        return view('add_dossier');
    }

    public function store1(Request $request)
    {

        dd($request->all());
        // Validate incoming request data
        $validatedData = $request->validate([
            'data.Machine.num_imma' => 'required|string|max:255',
            'data.Machine.num_imma_ante' => 'nullable|string|max:255',
            'data.Machine.date_mc' => 'nullable|date',
            'data.Machine.date_mc_maroc' => 'nullable|date',
            'data.Machine.v_usage' => 'required|string|max:255',
            'data.Machine.name' => 'required|string|max:255',
            'data.Machine.adresse' => 'required|string|max:255',
            'data.Machine.fin_valide' => 'required|date',
            'data.Machine.marque' => 'required|string|max:255',
            'data.Machine.type' => 'required|string|max:255',
            'data.Machine.genre' => 'required|string|max:255',
            'data.Machine.type_carburant' => 'required|string|max:255',
            'data.Machine.n_chassis' => 'required|string|max:255',
            'data.Machine.n_cylindres' => 'nullable|string|max:255',
            'data.Machine.puissance' => 'nullable|string|max:255',
            'data.Machine.cartrecto' => 'nullable|image|max:2048', // Example validation for file upload
            'data.Machine.cartverso' => 'nullable|image|max:2048', // Example validation for file upload

            // Validation rules for dossier_partie table (if applicable)
            'data.Machine.debut_annee' => 'nullable|string|max:255',
            'data.Machine.n_fiscalite' => 'nullable|string|max:255',
            'data.Machine.cotisation' => 'nullable|string|max:255',
            'data.Machine.photo_dommage' => 'nullable|image|max:2048', // Example validation for file upload
            'data.Machine.gravite_dommage' => 'nullable|string|in:Léger,Modéré,Grave', // Example validation for select field
        ]);

        // Create Dossier entry in dossiers table
        $dossier = Dossier::create([
            'registration_number' => $validatedData['data']['Machine']['num_imma'],
            'previous_registration' => $validatedData['data']['Machine']['num_imma_ante'],
            'first_registration' => $validatedData['data']['Machine']['date_mc'],
            'MC_maroc' => $validatedData['data']['Machine']['date_mc_maroc'],
            'usage' => $validatedData['data']['Machine']['v_usage'],
            'owner' => $validatedData['data']['Machine']['name'],
            'address' => $validatedData['data']['Machine']['adresse'],
            'validity_end' => $validatedData['data']['Machine']['fin_valide'],
            'type' => $validatedData['data']['Machine']['marque'],
            'genre' => $validatedData['data']['Machine']['type'],
            'fuel_type' => $validatedData['data']['Machine']['genre'],
            'chassis_nbr' => $validatedData['data']['Machine']['type_carburant'],
            'cylinder_nbr' => $validatedData['data']['Machine']['n_chassis'],
            'fiscal_power' => $validatedData['data']['Machine']['n_cylindres'],
            // Add more fields as needed
        ]);

        // Handle file uploads for dossier (if present)
        if ($request->hasFile('data.Machine.cartrecto')) {
            $cartrectoPath = $request->file('data.Machine.cartrecto')->store('cartegrise');
            $dossier->cartegrise_recto = $cartrectoPath;
        }

        if ($request->hasFile('data.Machine.cartverso')) {
            $cartversoPath = $request->file('data.Machine.cartverso')->store('cartegrise');
            $dossier->cartegrise_verso = $cartversoPath;
        }

        // Save Dossier entry
        $dossier->save();

        // If you have dossier_partie data to store, handle it similarly
        if ($request->filled('data.Machine.debut_annee') || $request->filled('data.Machine.n_fiscalite') || $request->filled('data.Machine.cotisation')) {
            $dossierPartie = DossierPartie::create([
                'dossier_id' => $dossier->id,
                'partie_id' => 1, // Replace with appropriate partie_id if applicable
                'damage' => $validatedData['data']['Machine']['debut_annee'],
                'damage_image' => null, // Initialize to null initially
            ]);

            // Handle file upload for dossier_partie if present
            if ($request->hasFile('data.Machine.photo_dommage')) {
                $photoDommagePath = $request->file('data.Machine.photo_dommage')->store('dommages');
                $dossierPartie->damage_image = $photoDommagePath;
                $dossierPartie->save();
            }
        }

        // Redirect or respond with success message
        return redirect()->back()->with('success', 'Dossier ajouté avec succès.');
    }



    public function store(Request $request)
    {

        // dd($request->all());

        // Validate incoming request data
        $validatedData = $request->validate([
            'data.Machine.num_imma' => 'required|string|max:255',
            'data.Machine.num_imma_ante' => 'nullable|string|max:255',
            'data.Machine.date_mc' => 'required|date_format:d/m/Y',
            'data.Machine.date_mc_maroc' => 'required|date_format:d/m/Y',
            'data.Machine.v_usage' => 'required|string|max:255',
            'data.Machine.name' => 'required|string|max:255',
            'data.Machine.adresse' => 'required|string|max:255',
            'data.Machine.fin_valide' => 'required|date_format:d/m/Y',
            'data.Machine.marque' => 'required|string|max:255',
            'data.Machine.modele' => 'required|string|max:255',
            'data.Machine.type' => 'required|string|max:255',
            'data.Machine.genre' => 'required|string|max:255',
            'data.Machine.type_carburant' => 'required|string|max:255',
            'data.Machine.n_chassis' => 'required|string|max:255',
            'data.Machine.n_cylindres' => 'nullable|string|max:255',
            'data.Machine.puissance' => 'nullable|string|max:255',
            'data.Machine.cartrecto' => 'nullable|image|max:2048',
            'data.Machine.cartverso' => 'nullable|image|max:2048',
            'data.Machine.debut_annee' => 'nullable|string|max:255',
            'data.Machine.n_fiscalite' => 'nullable|string|max:255',
            'data.Machine.cotisation' => 'nullable|string|max:255',
            'data.Machine.photo_dommage' => 'nullable|image|max:2048',
            'data.Machine.gravite_dommage' => 'nullable|string|in:Léger,Modéré,Grave',
        ]);


       // dd($validatedData);

        DB::transaction(function () use ($validatedData, $request) {
            // Create and save the Model and Mark
            $model = new Modele();
            $model->name = $validatedData['data']['Machine']['modele'];
            $marqueName = $validatedData['data']['Machine']['marque'];
            $mark = Marque::firstOrCreate(['name' => $marqueName]);
            $model->marque_id = $mark->id; 
            $model->save();

            // Create and save the Dossier
            $dossier = new Dossier();
            $dossier->modele()->associate($model);
            $dossier->registration_number = $validatedData['data']['Machine']['num_imma'];
            $dossier->previous_registration = $validatedData['data']['Machine']['num_imma_ante'];
            $dossier->usage = $validatedData['data']['Machine']['v_usage'];
            $dossier->address = $validatedData['data']['Machine']['adresse'];
            $dossier->type = $validatedData['data']['Machine']['type_carburant'];
            $dossier->chassis_nbr = $validatedData['data']['Machine']['n_chassis'];
            $dossier->cylinder_nbr = $validatedData['data']['Machine']['n_cylindres'];
            $dossier->fiscal_power = $validatedData['data']['Machine']['puissance'];

            $dateString = $validatedData['data']['Machine']['date_mc'];
            $date = Carbon::createFromFormat('d/m/Y', $dateString);
            $dossier->first_registration = $date;
           // $dossier->first_registration = new Carbon($validatedData['data']['Machine']['date_mc']);
            $dateString1 = $validatedData['data']['Machine']['date_mc_maroc'];
            $date1 = Carbon::createFromFormat('d/m/Y', $dateString1);
            $dossier->MC_maroc = $date1;

           // $dossier->mc_maroc = new Carbon($validatedData['data']['Machine']['date_mc_maroc']);
            $dateString2 = $validatedData['data']['Machine']['fin_valide'];
            $date2 = Carbon::createFromFormat('d/m/Y', $dateString2);
            $dossier->validity_end = $date2;

           // $dossier->validity_end = new Carbon($validatedData['data']['Machine']['fin_valide']);
            $dossier->genre = $validatedData['data']['Machine']['genre'];
            $dossier->owner = $validatedData['data']['Machine']['name'];
            $dossier->fuel_type = $validatedData['data']['Machine']['type_carburant'];
            $dossier->save();

            // Handle file uploads for the Dossier
            if ($request->hasFile('data.Machine.cartrecto')) {
                $cartrectoPath = $request->file('data.Machine.cartrecto')->store('cartegrise');
                $dossier->cartegrise_recto = $cartrectoPath;
            }

            if ($request->hasFile('data.Machine.cartverso')) {
                $cartversoPath = $request->file('data.Machine.cartverso')->store('cartegrise');
                $dossier->cartegrise_verso = $cartversoPath;
            }

            // Save Dossier entry
            $dossier->save();

            // Handle the creation of related PartieDossier entries
            foreach ($request->all() as $key => $value) {
               // dd($request->all());
                if (strpos($key, '_report') !== false) {
                    $id = explode('_', $key)[0];
                    if ($id !== 'null' && !empty($request->input($id . '_damage'))) {
                        $originalFilename = pathinfo($request->file('frontCard_' . $id)->getClientOriginalName(), PATHINFO_FILENAME);
                        $safeFilename = Str::slug($originalFilename);
                        $newFilename = $safeFilename . '-' . uniqid() . '.' . $request->file('frontCard_' . $id)->getClientOriginalExtension();

                        $partieDossier = new DossierPartie();
                        $partieDossier->dossier()->associate($dossier);
                        $part = Partie::find($id);
                        $partieDossier->partie()->associate($part);
                        $partieDossier->damage = $request->input($id . '_damage');
                        $partieDossier->damage_image = $newFilename;

                        // Save the uploaded file
                        $request->file('frontCard_' . $id)->storeAs('dommages', $newFilename);

                        $partieDossier->save();
                    }
                }
            }
        });

        return redirect()->back()->with('success', 'Dossier ajouté avec succès.');
    }


    

}