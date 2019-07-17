<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $table = 'Sekolahs';

    protected $fillable = ['nama_murid','kelas_murid','eskul_murid','jurusan_murid','guru'];



 
}
