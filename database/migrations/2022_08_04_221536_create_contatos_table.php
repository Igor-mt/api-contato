<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->string('tipo');
            // $table->string('pessoa_id');
            $table->foreignId('pessoa_id')->constrained('pessoas');
            $table->timestamps();
        });
    }

    // Schema::table('pessoas', function (Blueprint $table) {
    //     $table->foreignId('pessoa_id')->constrained('pessoas');
    // });

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatos');
    }
}
