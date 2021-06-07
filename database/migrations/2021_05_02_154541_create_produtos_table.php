<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
          $table->increments("id");
          $table->string("nome", 100);
          $table->decimal("valor", 10,2);
          $table->string("foto", 100)->nullable();
          $table->string("descricao", 500)->nullable();
          $table->integer("cat_id")->unsigned();
          $table->timestamps();

          $table->foreign("cat_id")
              ->references("id")
              ->on("categorias")
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
        Schema::dropIfExists('produtos');
    }
}
