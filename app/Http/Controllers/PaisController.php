<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PaisController extends Controller
{
    public function index()
    {
        $paises = Pais::all();
        return view('pais.index',['paises' => $paises]);
    }

    public function create(int $id)
    {
        $paise = País::findOrfail();

    }
}
