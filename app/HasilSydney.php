<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilSydney extends Model
{
    protected $table = "hasil_sydeys";

    protected $fillable = ['hari', 'tanggal', 'nomor'];
}
