<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcuacionController extends Controller
{
    public function ecuacion() {
        return view('ecuacion');
    }

    public function solucion(Request $request) {
        $a = (float)$request->input('a');
        $b = (float)$request->input('b');
        $c = (float)$request->input('c');

        $raicesimaginarias = false;
        $discriminante = $b * $b - 4 * $a * $c;
        $r1 = 0;
        $r2 = 0;
        if ($discriminante >= 0) {
            $r1 = (-$b + sqrt($discriminante)) / (2 * $a);
            $r2 = (-$b - sqrt($discriminante)) / (2 * $a);
        }
        else {
            $raicesimaginarias = true;
        }

        return view('solucion', [
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'r1' => $r1,
            'r2' => $r2,
            'raicesimaginarias'=> $raicesimaginarias,
        ]);
    }
}
