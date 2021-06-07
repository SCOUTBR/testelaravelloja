<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
          $table->increments("id");
          $table->string("logradouro", 100);
          $table->string("numero", 5)->nullable();
          $table->string("cidade", 50);
          $table->string("cep", 10);
          $table->string("complemento", 50)->nullable();
          $table->string("estado", 5);
          $table->integer("usuario_id")->unsigned();
          $table->timestamps();

          $table->foreign("usuario_id")
              ->references("id")
              ->on("usuarios")
              ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
