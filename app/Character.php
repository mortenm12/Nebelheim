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

    public function xps()
    {
        return $this->hasMany('App\Xp');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function getXpsNotUsedNotDeclined()
    {
        $xps = $this->xps;
        return $xps->filter(function($item)
        {
            return !($item->approved === 'declined');
        })
        ->filter(function($item)
        {
            return !$item->used;
        });
    }

    public function getXpByType()
    {
        $result = [];
        $xp_types = XpType::all();
        foreach($xp_types as $xp_type)
        {
            $result[$xp_type->xp_type] = 0;
        }

        $xps = $this->getXpsNotUsedNotDeclined();
        foreach($xps as $xp)
        {
            $result[$xp->xp_type] = $result[$xp->xp_type] + 1;
        }

        return $result;
    }
}
