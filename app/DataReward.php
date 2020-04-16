<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataReward extends Model
{
    protected $table = "datarewards";
    protected $fillable = ['reward', 'point'];
}
