<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
// use App\Mail\ContactanosMailable; PASAN AL CONTROLADOR ContactanosController
// use Illuminate\Support\Facades\Mail; PASAN AL CONTROLADOR ContactanosController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home'); //SE LE AGREGO UN NOMBRE A LA RUTAS HOME

    // Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

    // Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

    // Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

    // Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

    // Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

    // //SE UTILIZO EL METODO PUT PARA ACTUALIZAR
    // Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

    // //METODO DELETE PARA ELIMINAR
    // Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');
    //laravel recomienda utilizar metodo PUT para actualizar y no POST

    // Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    //     if ($categoria) {
    //         return "Bienvenido al curso $curso, de la categoria $categoria";
    //     } else {
    //         return "Bienvenido al curso: $curso";
    //     }
    // });

/**  TODAS LAS RUTAS EN UNA SOLA LINEA DE CODIGO Y CAMBIANDO EL NOMBRE **/
// Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

/** METODO DE TODOS LOS ROUTES EN UNA SOLA LINEA**/
Route::resource('cursos', CursoController::class);

/** PARA NUEVO LINK NOSOTROS - NUEVO METODO "VIEW" - SOLO PARA CONTENIDO ESTATICO NO BASE DATOS, SOLO VISTA**/
Route::view('nosotros', 'nosotros')->name('nosotros');

/**  RUTA PARA MIS CORREOS ELECTRONICOS - METODO GET Y POST**/
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');

Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');