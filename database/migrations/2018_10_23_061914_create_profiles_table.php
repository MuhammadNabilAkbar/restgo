<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->nullable()->default(null);
            $table->string('nama_restaurant')->nullable()->default(null);
            $table->string('akreditasi')->nullable()->default(null);
            $table->string('jenis_restaurant')->nullable()->default(null);
            $table->string('alamat')->nullable()->default(null);
            $table->string('no_telp')->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->string('waktu_buka')->nullable()->default(null);
            $table->string('waktu_tutup')->nullable()->default(null);
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
        Schema::dropIfExists('profiles');
    }
}
