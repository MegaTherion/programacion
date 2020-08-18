<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Este archivo ha sido generado con el comando:  php artisan make:controller SolicitudController

class SolicitudController extends Controller
{
    public function solicitud() {
        return view('solicitud');
    }

    public function recepcionsolicitud(Request $request) {
        return view('recepcionsolicitud');
    }
}
