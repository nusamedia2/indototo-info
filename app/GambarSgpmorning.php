<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GambarSgpmorning extends Model
{
    protected $table ="gambar_sgpmornings";

    protected $fillable = ['judul', 'keterangan', 'file'];
}
