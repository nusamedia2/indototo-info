<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilJowo extends Model
{
    protected $table = "hasil_jowos";

    protected $fillable = ['hari', 'tanggal', 'nomor'];
}
