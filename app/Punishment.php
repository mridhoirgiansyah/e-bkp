<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Punishment extends Model
{
    protected $table = "punishments";

    protected $fillable = ['nis','nama', 'rombel', 'rayon', 'punishment','point', 'tanggal', 'saksi'];
}

