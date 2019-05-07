<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    protected $fillable = ['nama', 'alamat'];
}
