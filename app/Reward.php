<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    protected $table = "rewards";

    protected $fillable = ['nis','nama', 'rombel', 'rayon', 'reward','point', 'tanggal', 'saksi'];
}
