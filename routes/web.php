<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\OperacionesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [CursoController::class, 'getName'])->name('home');

Route::get('/hola', function () {
    return route('hola');
})->name('hola');

Route::get('/suma', [CursoController::class, 'index'])->name('plus');

Route::get('/suma/{x}/{y}', function ($x, $y) {
    return 'La suma es: ' . $x + $y;
})->where(['x' => '[0-9]+', 'y' => '[0-9]+'])->name('suma');

Route::get('/nombre/{name?}', function ($name = 'Juan') {
    return 'Mi nombre es: ' . $name;
})->where('name', '[A-Za-z]+');

Route::get('/edad/{age?}', function ($age = 18) {
    return 'Mi edad es: ' . $age;
});

Route::redirect('/sumar', '/cursolaravel/public/suma');

Route::get('/verificar', function (Request $request) {
    if ($request->route()->named() == 'verificar') {
        return 'ok';
    } else {
        return 'no existe';
    }
})->name('verificar');

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });

    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
    
});

Route::get('/sumar/{num1}/{num2}', [OperacionesController::class, 'sumar'])->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

Route::get('/restar/{num1}/{num2}', [OperacionesController::class, 'restar'])->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

Route::get('/multiplicar/{num1}/{num2}', [OperacionesController::class, 'multiplicar'])->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

Route::get('/dividir/{num1}/{num2}', [OperacionesController::class, 'dividir'])->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);