<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dossiers()
    {
        return view('dossiers');
    }

    public function store()
    {
        return view('add_dossier');
    }
}