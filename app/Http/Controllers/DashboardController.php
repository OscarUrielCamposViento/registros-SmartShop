<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //return view('Registro.Registrosindex');
        return view('dashboard.index');
    }
}
