<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilSgpmorning extends Model
{
    protected $table = "hasil_sgpmornings";

    protected $fillable = ['hari', 'tanggal', 'nomor'];
}
