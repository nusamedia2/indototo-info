<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GambarJowo extends Model
{
    protected $table ="gambar_jowos";

    protected $fillable = ['judul', 'keterangan', 'file'];
}
