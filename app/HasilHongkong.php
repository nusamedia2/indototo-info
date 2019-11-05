<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilHongkong extends Model
{
    protected $table = "hasil_hongkongs";

    protected $fillable = ['hari', 'tanggal', 'nomor'];
}
