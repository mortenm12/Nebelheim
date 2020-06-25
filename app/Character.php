<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function abilities()
    {
        return $this->belongsToMany('App\Ability', 'ability_characters', 'character_id', 'ability_id');
    }
}
