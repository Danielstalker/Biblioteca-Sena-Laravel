<?php

namespace App\Http\Controllers;

use App\Models\Product; // Asegúrate de importar el modelo Product

class HomeController extends Controller
{
    public function index()
    {
        return view("app.frontend.index");
    }
}
