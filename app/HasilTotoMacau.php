<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilTotoMacau extends Model
{
    protected $table = "hasil_toto_macaus";

    protected $fillable = ['hari', 'tanggal', 'nomor'];
}
