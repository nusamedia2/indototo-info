<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentTutorialVPN extends Model
{
    protected $table = "comment_tutorial_vpn";
    protected $fillable = ['name','comment'];
}
