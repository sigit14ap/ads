<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_soal extends Model
{
	public $table="m_soal";
    protected $fillable = [
        'no_soal', 'pertanyaan', 'pilihan_1', 'pilihan_2', 'pilihan_3', 'pilihan_4', 'dimensi', 'updateby'
    ];
}
