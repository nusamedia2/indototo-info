<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GambarSydney extends Model
{
    protected $table ="gambar_sydneys";

    protected $fillable = ['judul', 'keterangan', 'file'];
}
