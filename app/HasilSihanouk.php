<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilSihanouk extends Model
{
    protected $table = "hasil_sihanouks";

    protected $fillable = ['hari', 'tanggal', 'nomor'];
}
