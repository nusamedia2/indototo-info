<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GambarSingapore extends Model
{
    protected $table ="gambar_singapores";

    protected $fillable = ['judul', 'keterangan', 'file'];
}
