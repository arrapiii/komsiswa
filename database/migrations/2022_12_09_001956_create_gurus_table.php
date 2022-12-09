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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('namaguru');
            $table->bigInteger('nip');
            $table->string('matpel');
            $table->string('tgllahir');
            $table->string('tempatlahir');
            $table->enum('jeniskelamin', ['Laki-laki', 'Perempuan']);
            $table->bigInteger('notelp');
            $table->string('agama');
            $table->string('email');
            $table->string('password');
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
        Schema::dropIfExists('gurus');
    }
};
