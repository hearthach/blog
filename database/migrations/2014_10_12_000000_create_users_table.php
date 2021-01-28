<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //es INTEGER Unsigned(sinSignos) Increment
            $table->string('name'); //varchar 255caracter max
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); //para verificar correo con Fechas
            $table->string('password');
            $table->rememberToken();
            $table->timestamps(); //created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
