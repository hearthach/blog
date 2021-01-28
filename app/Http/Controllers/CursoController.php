<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso; //valido para usar el FormRequest con comando de laravel

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){
        /* VALIDAR EL FORMULARIO FORMA UNO- usar el objeto $request y metodo VALIDATE*/
        //UTIL CUANDO EL FORMULARIO ES PEQUEÑO 
        /* LUEGO SE UTILIZAR REQUeST "php artisann make:request StoreCurso */
        /* cambiamos el objeto Request por StoreCurso  */

        // $request->validate([
        //     'name'  =>  'required|max:10',
        //     'descripcion'   => "required|min:10",
        //     'categoria' =>  'required'
        // ]);

        //una vez validado el formulario, puedes seguir
        
        /* 2.CREADO PARA UTILIZAR CUANDO EL FORMULARIO TIENE POCAS INGRESOS Y VALIDADCIONES */
        // $curso = new Curso();

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // $curso->save();

        /* 3.SEGUNDA FORMA PARA VALIDAR */
        /* 3.1.EN LUGAR DE UTILIZAR TODO ESE CODIGO DE ANBAJO UTILIZAMOS MENOS */
        // $curso = Curso::created([
        //     'name'  =>  $request->name,
        //     'descripcion' => $request->descripcion,
        //     'categoria' =>  $request->categoria
        // ]);
        /* 3.2.UTILIZANDO MENOS CODIGO */

        // return $request->all(); //utilizado para verificar que devuelve

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){  //AGREGANDO METODO Curso AHORRA MENOS CODIGO
        // // Forma para recuperar Datos numero 1
        // $curso = Curso::find($id); //esto es para devolver el registro completo

        // // return $curso; //para verificar que devuelva los datos

        // //metodo para pasar variable 1
        // //compact('curso'); es igual a ['curso' => $curso]
        // return view('cursos.show', compact('curso'));

        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){ //AGREGANDO METODO Curso AHORRA MENOS CODIGO
        // Forma para recuperar Datos numero 1
        // $curso = Curso::find($id);
        // return $curso;
        // return $curso; //cambiar a otro RETURN para retornar un FORMULARIO
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        // return $request->all(); //para devolver todo los datos

        /* VALIDAR EL FORMULARIO - usar el objeto $request y metodo VALIDATE*/

        $request->validate([
            'name'  =>  'required',
            'descripcion'   => "required",
            'categoria' =>  'required'
        ]);

        //una vez validado el formulario, puedes seguir

        //PARA ACTUALIZAR
        /** COMENTADO PARA UTILIZAR ASIGNACION MASIVA **/
        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // $curso->save();
        
        // UTILIZAMOS EL NUEVO METODO COMO CONN store
        $curso->update($request->all());
        
        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index', $curso);
    }
}
