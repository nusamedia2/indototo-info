<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BukuMimpi extends Model
{
    protected $table = "buku_mimpis";

    protected $fillable = ['keterangan', 'jenis_game', 'nomor'];
}
