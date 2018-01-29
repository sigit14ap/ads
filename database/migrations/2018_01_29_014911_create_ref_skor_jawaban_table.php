<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefSkorJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_skor_jawaban', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jawaban');
            $table->integer('skor');
            $table->integer('soal_id');
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
        Schema::dropIfExists('ref_skor_jawaban');
    }
}
