<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    /** CREAMOS DOS METODOS PARA NUESTRA VISTA CONTACTANOS**/
    /** INDEX PARA MOISTRAR EL FOMULARIO */
    /** PROCESAR EL FORMULARIO Y ENVIAR EL CORREO */
    public function index(){
        return view('contactanos.index');
    }

    /** REQUEST es para recuperar datos**/
    public function store(Request $request){

        /** VALIDAR EL FORMULARIO**/
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);
        /** FIN DE VALIDACION */
        
        $correo = new ContactanosMailable($request->all());

        //DEFINIR EL CORREO A QUIENN VOY A MANDAR
        Mail::to('mplandauro@gmail.com')->send($correo);
        
        /** AGREGAMOS UN MENSAJE DE SESION CON METODO WITH**/
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }
}
