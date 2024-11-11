<?php

namespace App\Http\Controllers;
use App\Models\Persona;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        $personas = Persona::get();
        //dd($personas);
        //exit;
        return view('backend.dashboard', compact('personas'));
    }
}
//mio mio mio mio carajo