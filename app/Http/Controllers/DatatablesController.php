<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class DatatablesController extends Controller
{
    public function index()
    {
        return view('page.datatables', ['users' => User::get()]);
    }
    public function index2()
    {
        return view('page.datatables2', ['users' => User::get()]);
    }

}
