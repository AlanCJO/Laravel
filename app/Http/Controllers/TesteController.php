<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2 = 0) { 
        // echo "A soma de $p1 + $p2 é: ".($p1+$p2);

        // passando parâmetros para a view por array associativo
        /*
        return view('site.teste', [
            'p1' => $p1,
            'p2' => $p2
        ]);
        */

        // pela função nativa compact - Este é o mais comumente usado
        return view('site.teste', compact('p1', 'p2'));

        // pelo método with()
        // return view('site.teste')->with('p1', $p1)->with('p2', $p2);
    
    }
}
