<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Auth;
use App\doctores;

class DoctoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $doctores = doctores::all();

        $x = Auth::user()->name;
        $user1=Auth::user();
        $doc= doctores::all();

       

        foreach ($doc as $doc1) {
        $xx="administrador";

            if ($x == $doc1->nombre) {
               
            
            if ($doc1->rol == $xx) {
          return view('doctores.index',compact('doctores', 'xx'));
            } }
            else {

                $z="false";

            }
        }
        if($z=="false"){
            return view('noacceso',compact('doctores', 'xx'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('doctores.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        doctores::create([
            
            'nombre' => $request['nombre'],
            'usuario' => $request['usuario'],
            'rol' => $request['rol'],
            
        ]);

        // return $request->All();
        return Redirect::to('/doctores');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $trabajadores= doctores::findOrFail($request->category_id);
        $trabajadores->delete();
       

        return back()->with('successMsg','Registro Eliminado');
    }
}