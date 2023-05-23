<?php

namespace App\Http\Controllers;

use App\Models\Unidad;
use App\Models\Enfermero;
use Illuminate\Http\Request;
use App\Http\Controllers\EnfermeroController;

class EnfermeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfermeros = Enfermero::all();
        return view ('/enfermeros/index', ['enfermeros' => $enfermeros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/enfermeros/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enfermero = new Enfermero($request->all());
        $enfermero->save();
        return redirect()->action([EnfermeroController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enfermero = Enfermero::find($id);
        return view('/enfermeros/show', ['enfermero' => $enfermero]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enfermero = Enfermero::find($id);
        $unidads = Unidad::all();
        return view('/enfermeros/edit', ['enfermero' => $enfermero, 'unidads' => $unidads]);
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
        $enfermero->fill($request->all());// los actualiza
        $enfermero->save();//se guarda
        return redirect()->action([EnfermeroController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = Enfermero::find($id);
        $medico->delete();
        return redirect()->action([EnfermeroController::class, 'index']);
    }

    public function attach_unidad(Request $request, Enfermero $enfermero)
    {
        $this->validateWithBag('attach',$request, [
            'unidad_id' => 'required|exists:unidads,id'
        ]);
        $unidad->unidades()->attach($request->input("unidad_id"));
        return redirect()->route('enfermeros.edit', $enfermero->id);
    }

    public function detach_unidad(Enfermero $enfermero, Unidad $unidad)
    {
        $enfermero->unidades()->detach($unidad->id);
        return redirect()->route('enfermeros.edit', $enfermero->id);

    }
}
