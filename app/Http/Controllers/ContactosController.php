<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactos;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $contactos=Contactos::orderBy('id')->paginate(10);
            return view('panelContactos',compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['nombre'=>'required', 'rut'=>'required','telefono'=>'required','direccion'=>'required']);
        $contactos = new Contactos;
        $contactos->nombre=$request->nombre;
        $contactos->rut=$request->rut;
        $contactos->telefono=$request->telefono;
        $contactos->direccion=$request->direccion;
        $contactos->save();
        return redirect('/gracias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactos=Contactos::find($id);
        return view('panelContactos', compact('contactos'));
    }

}
