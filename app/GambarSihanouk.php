<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GambarSihanouk extends Model
{
    protected $table ="gambar_sihanouks";

    protected $fillable = ['judul', 'keterangan', 'file'];
}
