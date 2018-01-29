<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMSoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_soal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_soal');
            $table->string('pertanyaan',255);
            $table->string('pilihan_1',100);
            $table->string('pilihan_2',100);
            $table->string('pilihan_3',100);
            $table->string('pilihan_4',100);
            $table->enum('dimensi', ['RO', 'AS','RD']);
            $table->timestamps();
            $table->string('updateby');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_soal');
    }
}
