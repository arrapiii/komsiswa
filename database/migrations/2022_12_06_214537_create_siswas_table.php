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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('kelas',['10', '11', '12']);
            $table->enum('jurusan',['TJKT', 'Animasi', 'PPLG', 'BRC', 'TE']);
            $table->bigInteger('nis');
            $table->enum('jeniskelamin',['Laki-laki', 'Perempuan']);
            $table->string('alamat');
            $table->bigInteger('notelp');
            $table->string('email');
            $table->string('password');
            $table->string('walas');
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
        Schema::dropIfExists('siswas');
    }
};
