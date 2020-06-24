<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XpType extends Model
{
    protected $primaryKey = 'xp_type';
    protected $keyType = 'string';
    public $timestamps = false;
}
