<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswi extends Model
{
    protected $table = 'siswis';

    protected $fillable = ['nama','kelas','hobi','sekolah','umur'];
}
