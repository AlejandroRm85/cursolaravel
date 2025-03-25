<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function getName()
    {
        return view('welcome', ['name' => 'Alejandro']);
    }

    public function index()
    {
        $x = 20;
        $y = 30;
        return 'La suma es: ' . $this->sumar($x, $y);
    }

    public function sumar($x, $y)
    {
        return $x + $y;
    }
}
