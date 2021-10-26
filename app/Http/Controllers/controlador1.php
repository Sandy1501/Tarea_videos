<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class controlador1 extends Controller
{
    public function index(){

        $agendas = Agenda::orderBy('id', 'desc')->paginate();




        return view ('datos.index', compact('datos'));
    }

    public function create(){
        return view ('datos.create');
    }

    public function store(Request $request){
        $datos = new DatosPersonales();

        $datos->nombre_completo = $request->nombre_completo;
        $datos->telefono = $request->telefono;
        $datos->email = $request->email;

        $datos->save();
        return redirect()->route('datos.show', $datos->id);
    }

    public function show(Agenda $datos){

        return view ('datos.show', compact('datos'));
    }
    public function edit(Agenda $datos){
        return view('datos.edit', compact('datos'));

    }
    public function update(Request $request, Agenda $datos){
        $datos->nombre_completo = $request->nombre_completo;
        $datos->telefono = $request->telefono;
        $datos->email = $request->email;

        $datos->save();
        return redirect()->route('datos.show', $datos->id);
    }
}
