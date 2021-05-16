<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberType extends Model
{
    use HasFactory;
    protected $primaryKey = 'xp_type';
    protected $keyType = 'string';
    public $timestamps = false;

    public function Members()
    {
        return $this->hasMany('App\Member');
    }

    public function Abilities()
    {
        return $this->hasMany('App\Member');
    }
}
