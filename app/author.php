<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    public $timestamps = false;
    protected $fillable = ['title','body'];
    //
}
