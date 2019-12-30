<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\consulta;
use App\tratamiento;
use App\enfermedad;
use App\User;
use App\doctores;
use App\examenes;
use Illuminate\Support\Facades\Auth;
use Redirect;

class consultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $consultas = consulta::orderBy('id_trabajador', 'asc')->get();
        $consultax = consulta::orderBy('id_trabajador', 'asc')->first();
        $x=$consultax->nombre;
        $y=1;
        $x = Auth::user()->name;
        $doc= doctores::all();

        foreach ($doc as $doc1) {
        

        $x1="administrador";
        $x2="doctor";

            if ($x == $doc1->nombre) {
               
            
            if ($doc1->rol == $x1 ||  $doc1->rol == $x2) {
                return view('consultas.index',compact('consultas', 'x', 'y'));
            } } 
            else {
                $z="false";
            }
        }
        if($z=="false"){
            return view('noacceso');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $plan_tratamientox = tratamiento::all();
        $enfermedadx = enfermedad::all();
        $consultas=consulta::orderBy('created_at', 'desc')->first();
       
        $x = Auth::user()->name;
        $user1=Auth::user();
        $doc= doctores::all();

        foreach ($doc as $doc1) {
        
            $x1="administrador";
            $x2="doctor";

            if ($x == $doc1->nombre) {
               
            
            if ($doc1->rol == $x1 ||  $doc1->rol == $x2) {
                return view('consultas.create',compact('enfermedadx', 'plan_tratamientox', 'consultas', 'user1'));        
            } }
            else {
                $z="false";
            }
        }
        if($z=="false"){
            return view('noacceso');
        }
        
        
    }

    public function recipe()
    {


        $consultas = consulta::orderBy('created_at', 'desc')->first();

        
        $xx = tratamiento::where('nombre', $consultas->plan_tratamiento)->first();
        
        return view('consultas.recipe',compact('consultas', 'xx'));        
    }

    public function reposo()
    {

        
        $codigos=consulta::orderBy('created_at', 'desc')->first();
        $consultas=$codigos;
        
        return view('consultas.reposo',compact('consultas'));        
    }

    public function examen()
    {

        
        $consultas=consulta::orderBy('created_at', 'desc')->first();
        
        
        return view('consultas.examen',compact('consultas'));        
    }

    public function impresion()
    {
        $consulta = consulta::orderBy('created_at', 'desc')->first();
        return view('consultas.impresion',compact('consulta'));
    }

     public function gestion()
    {
        $plan_tratamientox = tratamiento::all();
        $enfermedadx = enfermedad::all();
        $consultas=consulta::orderBy('created_at', 'desc')->first();

        $consulta=consulta::orderBy('created_at', 'desc')->first();
        
       


        return view('consultas.gestion',compact('enfermedadx', 'plan_tratamientox', 'consultas', 'consulta'));
        
    }

    

    public function store(Request $request)
    {
       
        
        consulta::create([
            'motivo' => $request['motivo'],
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'situacion_actual' => $request['situacion_actual'],
            'plan_tratamiento' => $request['plan_tratamiento'],
            'plan_tratamiento1' => $request['plan_tratamiento1'],
            'plan_tratamiento2' => $request['plan_tratamiento2'],
            'plan_tratamiento3' => $request['plan_tratamiento3'],
            'plan_tratamiento4' => $request['plan_tratamiento4'],
            'plan_tratamiento5' => $request['plan_tratamiento5'],
            'plan_tratamiento6' => $request['plan_tratamiento6'],
            'plan_tratamiento7' => $request['plan_tratamiento7'],
            'plan_tratamiento8' => $request['plan_tratamiento8'],
            'hallazgo' => $request['hallazgo'],
            'id_trabajador' => $request['id_trabajador'],
            'impresiones' => $request['impresiones'],
            'impresiones2' => $request['impresiones2'],
            'impresiones3' => $request['impresiones3'],
            'antecedentes' => $request['antecedentes'],
            'ta' => $request['ta'],
            'mm' => $request['mm'],
            'fc' => $request['fc'],
            'rp' => $request['rp'],
            'peso' => $request['peso'],
            'imc' => $request['imc'],
            'talla' => $request['talla'],
            'sugerencias' => $request['sugerencias'],
            'cedula' => $request['cedula'],
            'edad' => $request['edad'],
            'reposo_ini' => $request['reposo_ini'],
            'reposo_fin' => $request['reposo_fin'],
            'referido' => $request['referido'],
            'tipo_consulta' => $request['tipo_consulta'],
            'dias' => $request['dias'],
            'motivo2' => $request['motivo2'],
            'doctor'=> $request['doctor'],
            

        ]);
        
       
        // return $request->All();
       return Redirect::to('/consultas/gestion');

    }

    public function show($id)
    {
        $consultas = consulta::where('id_trabajador', $id)->get();
       

        $exa=examenes::where('consulta')->get();

       
    return view('consultas.show', compact('consultas', 'exa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detalles($id)
    {
        $consulta = consulta::where('id', $id)->get();


    return view('consultas.impresion', compact('consulta'));
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
    public function destroy($id)
    {
        //
    }


    







}
