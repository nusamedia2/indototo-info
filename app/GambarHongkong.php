<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GambarHongkong extends Model
{
    protected $table ="gambar_hongkongs";

    protected $fillable = ['judul', 'keterangan', 'file'];
}
