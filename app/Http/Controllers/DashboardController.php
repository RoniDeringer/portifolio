<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function datatables()
    {
        return view('dashboard.datatables');
    }

    public function formulario()
    {
        return view('dashboard.formulario');
    }
}
