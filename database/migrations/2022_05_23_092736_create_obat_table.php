<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()    
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('unit', ['Botol', 'Box', 'Pack', 'Piece', 'Pot', 'Sachet', 'Strip', 'Suppositoria', 'Tablet', 'Test Kit', 'Tube', 'Unit']);
            $table->string('price');
            $table->string('image');
            $table->integer('id_jenis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat');
    }
}
