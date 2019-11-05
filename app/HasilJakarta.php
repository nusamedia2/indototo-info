<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilJakarta extends Model
{
    protected $table = "hasil_jakartas";

    protected $fillable = ['hari', 'tanggal', 'nomor'];
}
