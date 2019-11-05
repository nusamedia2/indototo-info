<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GambarJakarta extends Model
{
    protected $table ="gambar_jakartas";

    protected $fillable = ['judul', 'keterangan', 'file'];
}
