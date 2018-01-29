<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefRecordSkorJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_record_skor_jawaban', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profil_id');
            $table->integer('jawaban_1'); 
            $table->integer('jawaban_2'); 
            $table->integer('jawaban_3'); 
            $table->integer('jawaban_4'); 
            $table->integer('jawaban_5'); 
            $table->integer('jawaban_6'); 
            $table->integer('jawaban_7'); 
            $table->integer('jawaban_8'); 
            $table->integer('jawaban_9'); 
            $table->integer('jawaban_10'); 
            $table->integer('jawaban_11'); 
            $table->integer('jawaban_12'); 
            $table->integer('jawaban_13'); 
            $table->integer('jawaban_14'); 
            $table->integer('jawaban_15'); 
            $table->integer('jawaban_16'); 
            $table->integer('jawaban_17'); 
            $table->integer('jawaban_18'); 
            $table->integer('jawaban_19'); 
            $table->integer('jawaban_20'); 
            $table->integer('jawaban_21'); 
            $table->integer('jawaban_22'); 
            $table->integer('jawaban_23'); 
            $table->integer('jawaban_24'); 
            $table->integer('jawaban_25'); 
            $table->integer('jawaban_26'); 
            $table->integer('jawaban_27'); 
            $table->integer('jawaban_28'); 
            $table->integer('jawaban_29'); 
            $table->integer('jawaban_30'); 
            $table->integer('jawaban_31'); 
            $table->integer('jawaban_32'); 
            $table->integer('jawaban_33'); 
            $table->integer('jawaban_34'); 
            $table->integer('jawaban_35'); 
            $table->integer('jawaban_36'); 
            $table->integer('jawaban_37'); 
            $table->integer('jawaban_38'); 
            $table->integer('jawaban_39'); 
            $table->integer('jawaban_40'); 
            $table->integer('jawaban_41'); 
            $table->integer('jawaban_42'); 
            $table->integer('jawaban_43'); 
            $table->integer('jawaban_44'); 
            $table->integer('jawaban_45'); 
            $table->integer('jawaban_46'); 
            $table->integer('jawaban_47'); 
            $table->integer('jawaban_48'); 
            $table->integer('jawaban_49'); 
            $table->integer('jawaban_50'); 
            $table->integer('jawaban_51'); 
            $table->integer('jawaban_52'); 
            $table->integer('jawaban_53'); 
            $table->integer('jawaban_54'); 
            $table->integer('jawaban_55'); 
            $table->integer('jawaban_56'); 
            $table->integer('jawaban_57'); 
            $table->integer('jawaban_58'); 
            $table->integer('jawaban_59'); 
            $table->integer('jawaban_60');
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
        Schema::dropIfExists('ref_record_skor_jawaban');
    }
}
