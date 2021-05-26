<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            // START - News Items, Laravel8 CRUD. 13.05.2021 - jpm //
            $table->string('codigo',10);
            $table->string('descripcion',50);
            $table->integer('cantidad');
            $table->decimal('precio',8,2);
            // END - News Items, Laravel8 CRUD. 13.05.2021 - jpm //
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
        Schema::dropIfExists('articulos');
    }
}
