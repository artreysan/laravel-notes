<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();//INTEGRATE UNSIGNED INCREMENT;
            $table->string('name'); // VARCHAR; <= 255
            $table->string('email')->unique(); //->unique no repite el correo
            $table->timestamp('email_verified_at')->nullable(); //->nullable puede estar vacio
            $table->string('password');
            $table->json('data_pdf');
            $table->json('options');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users'); //Elimina la tabla users
    }
};
