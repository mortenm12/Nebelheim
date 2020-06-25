<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    //
    public $timestamps = false;

    public function requerements()
    {
        return $this->belongsToMany('App\Ability', 'ability_abilities', 'ability_id', 'req_ability_id');
    }

    public function requered_in()
    {
        return $this->belongsToMany('App\Ability', 'ability_abilities', 'req_ability_id', 'ability_id');
    }

    public function favorit_category()
    {
        return $this->belongsToMany('App\Category', 'ability_categories', 'ability_id', 'category');
    }

    public function xp_types()
    {
        return $this->belongsToMany('App\XpType', 'ability_xptypes', 'ability_id', 'xp_type');
    }

    public function characters()
    {
        return $this->belongsToMany('App\Character', 'ability_characters', 'ability_id', 'character_id');
    }
}
