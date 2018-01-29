<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaterRespondenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responden', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usia');
            $table->enum('jenis_kelamin', ['L','P']);
            $table->integer('kota_id');
            $table->integer('provinsi_id');
            $table->integer('pekerjaan_id');
            $table->integer('suku_id');
            $table->enum('status_pernikahan', ['Lajang','Menikah','Duda/Janda']);
            $table->enum('pendidikan_terakhir_id', ['SD','SMP','SMA','D1','D2','D3','D4/S1','S2','S3']);
            $table->integer('tinggal_bersama_id');
            $table->enum('penghasilan', ['1','1-3','3-5','5-10','10-20','20-30','30-50','50']);
            $table->enum('pengeluaran', ['1','1-3','3-5','5-10','10-20','20-30','30-50','50']);
            $table->string('jawaban_1',1); 
            $table->string('jawaban_2',1); 
            $table->string('jawaban_3',1); 
            $table->string('jawaban_4',1); 
            $table->string('jawaban_5',1); 
            $table->string('jawaban_6',1); 
            $table->string('jawaban_7',1); 
            $table->string('jawaban_8',1); 
            $table->string('jawaban_9',1); 
            $table->string('jawaban_10',1); 
            $table->string('jawaban_11',1); 
            $table->string('jawaban_12',1); 
            $table->string('jawaban_13',1); 
            $table->string('jawaban_14',1); 
            $table->string('jawaban_15',1); 
            $table->string('jawaban_16',1); 
            $table->string('jawaban_17',1); 
            $table->string('jawaban_18',1); 
            $table->string('jawaban_19',1); 
            $table->string('jawaban_20',1); 
            $table->string('jawaban_21',1); 
            $table->string('jawaban_22',1); 
            $table->string('jawaban_23',1); 
            $table->string('jawaban_24',1); 
            $table->string('jawaban_25',1); 
            $table->string('jawaban_26',1); 
            $table->string('jawaban_27',1); 
            $table->string('jawaban_28',1); 
            $table->string('jawaban_29',1); 
            $table->string('jawaban_30',1); 
            $table->string('jawaban_31',1); 
            $table->string('jawaban_32',1); 
            $table->string('jawaban_33',1); 
            $table->string('jawaban_34',1); 
            $table->string('jawaban_35',1); 
            $table->string('jawaban_36',1); 
            $table->string('jawaban_37',1); 
            $table->string('jawaban_38',1); 
            $table->string('jawaban_39',1); 
            $table->string('jawaban_40',1); 
            $table->string('jawaban_41',1); 
            $table->string('jawaban_42',1); 
            $table->string('jawaban_43',1); 
            $table->string('jawaban_44',1); 
            $table->string('jawaban_45',1); 
            $table->string('jawaban_46',1); 
            $table->string('jawaban_47',1); 
            $table->string('jawaban_48',1); 
            $table->string('jawaban_49',1); 
            $table->string('jawaban_50',1); 
            $table->string('jawaban_51',1); 
            $table->string('jawaban_52',1); 
            $table->string('jawaban_53',1); 
            $table->string('jawaban_54',1); 
            $table->string('jawaban_55',1); 
            $table->string('jawaban_56',1); 
            $table->string('jawaban_57',1); 
            $table->string('jawaban_58',1); 
            $table->string('jawaban_59',1); 
            $table->string('jawaban_60',1); 
            $table->double('dimensi_rd'); 
            $table->double('dimensi_as'); 
            $table->double('dimensi_ro'); 
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
        Schema::dropIfExists('responden');
    }
}
