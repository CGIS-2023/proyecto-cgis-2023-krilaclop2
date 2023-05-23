<?php

namespace App\Http\Controllers;

use App\Models\CitaUrgencia;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCitasCount()
    {
        $citasCount = CitaUrgencia::all()->count();
        return view('/dashboard', ['citasCount' => $citasCount]);
    }
    
}