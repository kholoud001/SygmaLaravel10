<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Marque;

use Illuminate\Http\Request;

class MarqueController extends Controller
{
    public function index()
    {
        $marques = Marque::orderBy('name', 'asc')->get();
        return view('marques', compact('marques'));
    }

    public function showModeles($marque_id)
{
    $marque = Marque::with('modeles')->findOrFail($marque_id);
    return response()->json($marque->modeles);
}


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Marque::create($request->all());

        return redirect()->route('marques.index')
                         ->with('success', 'Marque created successfully.');
    }

    public function update(Request $request, Marque $marque)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $marque->update($request->all());

        return redirect()->route('marques.index')
                         ->with('success', 'Marque updated successfully.');
    }

    public function destroy(Marque $marque)
    {
        $marque->delete();

        return redirect()->route('marques.index')
                         ->with('success', 'Marque deleted successfully.');
    }
}
