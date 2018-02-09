<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DivisionController extends Controller
{
    public function __construct()
    {
        $this->middleware('comprobar');
    }


    public function calcular(Request $request)
    {
        $dividendo = $request->input('dividiendo');
        $divisor = $request->input('divisor');
        $resultado=$dividendo/$divisor;

        $dividendo->save();
        $divisor->save();
        $resultado->save();

        return view('resultado', ['resultado' => $resultado]);


    }


}
