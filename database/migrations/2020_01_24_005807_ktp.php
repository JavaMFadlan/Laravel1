<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ktp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ktps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('np');
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->string('status');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('golongan_darah');
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
        Schema::dropIfExists('ktps');
    }
}