<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //utilizado para permitir validacion de todos lo objetor en CursoController
    //METODO NUMERO 01 -> MUIY LARGO, SI SON 50 DATOS, SERIAN 50 CARACTERES
    //fillable -> permite los campos permitidos e ignora los campos protegidos
    // protected $fillable = ['name', 'descripcion', 'categoria'];
    //METODO NUMERO 02 -> MAS CORTO
    //guarded -> permite los campos protegidos e ignora los campos permitidos
    //si en la BD no hay campo protejido, declaramos la proiedad guarded como array VACIO
    protected $guarded = [];
}
