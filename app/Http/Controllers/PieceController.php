<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Piece;


class PieceController extends Controller
{
    public function index(Request $request)
    {
        $modeleId = $request->query('modele_id');
        $partId = $request->query('part_id');
    
        $pieces = Piece::all(); 
    
        return view("pieces", compact('modeleId', 'partId', 'pieces'));
    }

    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|max:2048', 
            'prix_reparation' => 'required|string|max:255',
            'prix_remplacement' => 'required|string|max:255',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $this->handleImage($image); 
            $validatedData['image'] = $imagePath;
        }

        // Create a new piece record
        Piece::create($validatedData);

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Piece added successfully!');
    }

   
    protected function handleImage($image)
    {
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/images/Pieces'), $name_gen); 
        $imagePath = 'assets/images/Pieces/' . $name_gen; 
        return $imagePath;
    }
}
