<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table='usections';
    protected $fillable = [
        'undersection',
    ];
}
