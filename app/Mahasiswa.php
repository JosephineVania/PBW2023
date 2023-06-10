<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //untuk membaca data
    protected $table = 'mahasiswa';
    
    //untuk manipulasi data
    protected $fillable =[
        'nim',
        'nama',
        'gender',
        'prodi',
        'minat'
    ];
}
