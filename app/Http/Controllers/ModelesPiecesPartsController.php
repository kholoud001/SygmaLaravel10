<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modele;
use App\Models\Piece;
use App\Models\Partie;

class ModelesPiecesPartsController extends Controller
{
    public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'piece_id' => 'required|exists:pieces,id',
        'min_year' => 'required|integer',
        'max_year' => 'required|integer',
    ]);

    // Get the referer URL from the request headers
    $refererUrl = $request->server->get('HTTP_REFERER');

    // Parse the URL to extract query parameters
    $queryParams = parse_url($refererUrl, PHP_URL_QUERY);
    parse_str($queryParams, $queryParameters);

    // Retrieve modele_id and part_id from query parameters
    $modele_id = $queryParameters['modele_id'] ?? null;
    $part_id = $queryParameters['part_id'] ?? null;

    // Find the relevant modele based on modele_id
    $modele = Modele::find($modele_id);

    if (!$modele) {
        return redirect()->back()->with('error', 'Modele not found.');
    }

    // Find the piece based on piece_id
    $piece = Piece::find($validatedData['piece_id']);

    if (!$piece) {
        return redirect()->back()->with('error', 'Piece not found.');
    }

    // Find the partie based on part_id (if applicable)
    $partie = Partie::find($part_id);

    // Attach the piece to the modele with pivot data
    $modele->piecesParties()->attach($piece, [
        'partie_id' => $partie ? $partie->id : null,
        'min_year' => $validatedData['min_year'],
        'max_year' => $validatedData['max_year'],
    ]);

    return redirect()->back()->with('success', 'Data inserted successfully.');
}

    
}
