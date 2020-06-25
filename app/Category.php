<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category';
    protected $keyType = 'string';
    public $timestamps = false;

    public function favorit_abilities()
    {
        return $this->belongsToMany('App\Ability', 'ability_categories', 'category', 'ability_id');
    }

    public function characters()
    {
        return $this->hasMany('App\Charater');
    }
}
