<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPunishment extends Model
{
    protected $table = "datapunishments";
    protected $fillable = ['punishment', 'point'];
}
