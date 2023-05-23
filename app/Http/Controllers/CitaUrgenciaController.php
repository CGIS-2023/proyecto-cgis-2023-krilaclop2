<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Unidad;
use App\Models\Paciente;
use App\Models\Enfermero;
use App\Models\Tratamiento;
use App\Models\CitaUrgencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CitaUrgenciaController;

class CitaUrgenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = Medico::all();
        $pacientes = Paciente::all();
        $enfermeros = Enfermero::all();
        $unidads = Unidad::all();
        $cita_urgencias = CitaUrgencia::all();  


        if (Auth::user()->tipo_usuario_id == 3){
            $cita_urgencias = Auth::user()->enfermero->cita_urgencias()->paginate(21);     
        }
        elseif(Auth::user()->tipo_usuario_id == 2){
            $cita_urgencias = Auth::user()->medico->cita_urgencias()->paginate(21);   
    
        }
        elseif(Auth::user()->tipo_usuario_id == 1){
            $cita_urgencias = CitaUrgencia::all();  
        }
        return view('cita_urgencias.index',['cita_urgencias' => $cita_urgencias]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicos = Medico::all();
        $pacientes = Paciente::all();
        $enfermeros = Enfermero::all();
        $unidads = Unidad::all();
        
        return view('cita_urgencias/create', ['pacientes' => $pacientes, 'medicos' => $medicos, 'enfermeros' => $enfermeros, 'unidads' => $unidads]);
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cita_urgencias = new CitaUrgencia($request->all());
        $cita_urgencias->save();
        session()->flash('success', 'Cita creada correctamente');
        return redirect()->route('cita_urgencias.index');
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
        
        return view('/cita_urgencias/show', ['cita_urgencias' => $cita_urgencias]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicos = Medico::all();
        $pacientes = Paciente::all();
        $enfermeros = Enfermero::all();
        $cita_urgencia = CitaUrgencia::find($id);
        $unidads = Unidad::all();
        $tratamientos = Tratamiento::all();

        return view('/cita_urgencias/edit', ['cita_urgencia' => $cita_urgencia, 'tratamientos' => $tratamientos, 'pacientes' => $pacientes, 'medicos' => $medicos, 'enfermeros' => $enfermeros, 'unidads' => $unidads]);
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
        $cita = CitaUrgencia::find($id);
        $cita->fill($request->all());
        $cita->save();
        session()->flash('success', 'Cita modificada correctamente');
        return redirect()->route('cita_urgencias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cita_urgencia = CitaUrgencia::find($id);
        $cita_urgencia->delete();
        return redirect()->action([CitaUrgenciaController::class, 'index']);
    }

    public function attach_tratamiento(Request $request, CitaUrgencia $cita_urgencia)
    {
        $this->validateWithBag('attach',$request, [
            'tratamiento_id' => 'required|exists:medicos,id',
            'inicio' => 'required|date',
            'fin' => 'required|date|after:inicio',
            'comentarios' => 'nullable|string',
            'dosis' => 'required|string',
        ]);
        $cita_urgencia->tratamiento()->attach($request->medicamento_id, [
            'inicio' => $request->inicio,
            'fin' => $request->fin,
            'comentarios' => $request->comentarios,
            'dosis' => $request->dosis
        ]);
        return redirect()->route('cita_urgencias.edit', $cita_urgencia->id);
    }

    public function detach_tratamiento(CitaUrgencia $cita_urgencia, Tratamiento $tratamiento)
    {
        $cita_urgencia->tratamiento()->detach($tratamiento->id);
        return redirect()->route('cita_urgencias.edit', $cita_urgencia->id);
    }
}
