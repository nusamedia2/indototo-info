<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilSingapore extends Model
{
    protected $table = "hasil_sihanouks";

    protected $fillable = ['hari', 'tanggal', 'nomor'];
}
