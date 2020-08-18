<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Este archivo ha sido generado con el comando:  php artisan make:controller SolicitudController

class SolicitudController extends Controller
{

    private $nombreEmpresa = 'TUXNIR';

    public function solicitud() {
        return view('solicitud');
    }

    public function recepcionsolicitud(Request $request) {
        return view('recepcionsolicitud', [
            'empresa'=>$this->nombreEmpresa,
            'nombre'=>$request->input('nombrecompleto'),
            'material'=>$request->input('material'),
            'cantidad'=>$request->input('cantidad'),
        ]);
    }
}
