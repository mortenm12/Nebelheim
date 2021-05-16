<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function memberType()
    {
        return $this->belongsTo('App\MemberType');
    }

    public function Abilities()
    {
        return $this->hasMany('App\Member');
    }
}
