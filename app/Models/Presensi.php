<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;
    protected $fillable = ['mata_kuliah', 'jenis_matkul', 'topik', 'sub_topik'];
    protected $table = 'presensi';

    

}
