<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome.blade.php'); // ovdje možete koristiti ime Blade predloška koji želite prikazati
    }
}
