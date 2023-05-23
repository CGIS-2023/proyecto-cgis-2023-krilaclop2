<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Informe;
use App\Models\Paciente;
use App\Models\Enfermero;
use App\Models\CitaUrgencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informes = Informe::all();

        if (Auth::user()->tipo_usuario_id == 2){
                $informes = Auth::user()->medico->informes()->paginate(21); 
            }
        elseif(Auth::user()->tipo_usuario_id == 1){
                $informes = Informe::all();
            }
        return view('informes.index',['informes' => $informes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $medicos = Medico::all();
        $pacientes = Paciente::all();

        if(Auth::user()->tipo_usuario_id == 2){
            return view('informes/create', ['medico' => Auth::user()->medico, 'pacientes' => $pacientes]);
        }
        return view('informes/create', ['pacientes' => $pacientes, 'medicos' => $medicos]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $medicos = Medico::all();
        $pacientes = Paciente::all();
        $enfermeros = Enfermero::all();
        $cita_urgencias = CitaUrgencia::find($id);
        $informes = Informe::find($id);
        
        return view('/informes/show', ['informes' => $informes, 'pacientes' => $pacientes, 'medicos' => $medicos, 'enfermeros' => $enfermeros, 'cita_urgencias'=> $cita_urgencias]);
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
    public function destroy($id)
    {
        //
    }
}
