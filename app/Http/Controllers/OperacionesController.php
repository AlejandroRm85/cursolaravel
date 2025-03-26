<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function sumar($num1, $num2)
    {
        $resultado = $num1 + $num2;
        return view('operaciones', ['resultado' => $resultado, 'operacion' => 'suma']);
    }

    public function restar($num1, $num2)
    {
        $resultado = $num1 - $num2;
        return view('operaciones', ['resultado' => $resultado, 'operacion' => 'resta']);
    }

    public function multiplicar($num1, $num2)
    {
        $resultado = $num1 * $num2;
        return view('operaciones', ['resultado' => $resultado, 'operacion' => 'multiplicacion']);
    }

    public function dividir($num1, $num2)
    {
        $resultado = ($num2 == 0) ? 0 : $num1 / $num2;
        return view('operaciones', ['resultado' => $resultado, 'operacion' => 'division']);
    }
}
