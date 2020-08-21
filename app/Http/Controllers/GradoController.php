<?php

namespace App\Http\Controllers;

use App\Models\Grado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GradoController extends Controller
{
    public function index()
    {
        $grados = Grado::all();
        return view('grado.index', compact($grados));
    }

    public function create(Request $request)
    {
        if($request->ajax()){
           $grado = new Grado;
           $grado->nombre = $request->get('nombre');
           $grado->seccion = $request->get('seccion');
           $grado->save(); 
        }
        
    }

    public function edit($id)
    {
        $grado = Grado::whereId($id);
        return $grado;
    }
}
