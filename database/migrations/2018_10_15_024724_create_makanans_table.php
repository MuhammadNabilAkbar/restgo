<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makanans', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nama_makanan");
            $table->enum('kategori', ['Ringan', 'Berat']);
            $table->string("level_pedas");
            $table->integer("harga");
            $table->string("deksripsi");
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
        Schema::dropIfExists('makanans');
    }
}
