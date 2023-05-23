<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\InformeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnfermeroController;
use App\Http\Controllers\TratamientoController;
use App\Http\Controllers\CitaUrgenciaController;
use App\Http\Controllers\AdministrativoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/pacientes', PacienteController::class);
Route::resource('/medicos', MedicoController::class);
Route::resource('/enfermeros', EnfermeroController::class);
Route::resource('/administrativos', AdministrativoController::class);
Route::resource('/cita_urgencias', CitaUrgenciaController::class);
Route::resource('/informes', InformeController::class);
Route::resource('/unidades', UnidadController::class);
Route::resource('/tratamientos', TratamientoController::class);

Route::get('/dashboard', [DashboardController::class, 'getCitasCount'])->name('dashboard');
Route::get('/search', [PacienteController::class, 'search']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::post('/enfermeros/{enfermero}/attach_unidad', [EnfermeroController::class, 'attach_unidad'])->name('enfermeros.attach_unidad');
Route::delete('/enfermeros/{enfermero}/detach_unidad/{unidad}', [EnfermeroController::class, 'detach_unidad'])->name('enfermeros.detach_unidad');

Route::post('/cita_urgencias/{cita_urgencia}/attach-tratamiento', [CitaUrgenciaController::class, 'attach_tratamiento'])
->name('cita_urgencias.attachTratamiento');

Route::delete('/cita_urgencias/{cita_urgencia}/detach-tratamiento/{tratamiento}', [CitaUrgenciaController::class, 'detach_tratamiento'])
->name('cita_urgencias.detachTratamiento');