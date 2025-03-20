<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // On pourra y passer les stats plus tard : ventes du jour, stock faible, etc.
        return view('dashboard');
    }
}
