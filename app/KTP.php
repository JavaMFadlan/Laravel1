<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KTP extends Model
{
    protected $table = 'ktps';   
    protected $fillable = ['np','nama','tgl_lahir','status','jenis_kelamin','agama','golongan_darah'];
}