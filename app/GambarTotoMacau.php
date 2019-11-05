<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GambarTotoMacau extends Model
{
    protected $table ="gambar_toto_macaus";

    protected $fillable = ['judul', 'keterangan', 'file'];
}
