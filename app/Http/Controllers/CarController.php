<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        // Logic untuk menampilkan mobil
        return view('cars.index');
    }
}
