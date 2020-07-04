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
        return $this->belongsToMany('App\Character', 'ability_characters', 'ability_id', 'character_id')->withTimestamps();
    }

    public function isRequirementsMeet(Character $character)
    {
        foreach($this->requerements as $req)
        {
            if(!$character->abilities->contains($req)){
                return false;
            }
        }
        return true;
    }

    public function alreadyBought(Character $character)
    {
        return $character->abilities->contains($this);
    }

    public function useFullXp(Character $character)
    {
        $usefullXp = 0;

        foreach($character->getXpByType() as $xpByType=>$number)
        {
            if($this->xp_types->contains($xpByType) || $xpByType === 'Baby XP')
            {
                $usefullXp = $usefullXp + $number;
            }
        }
        return $usefullXp;
    }

    public function rabat($character)
    {
        $favoritAbility = 0;
        $niceCloth = 1;

        if($this->favorit_category->contains($character->category))
        {
            $favoritAbility = 2;
        }

        return $niceCloth + $favoritAbility;
    }

    public function canBeBougt(Character $character, $extraXp = 0)
    {
        if($this->alreadyBought($character) || $this->name === "S.V. Krudtvåben")
        {
            return false;
        }

        if(!$this->isRequirementsMeet($character))
        {
            return false;
        }

        return ($this->useFullXp($character) + $extraXp) >= $this->cost - $this->rabat($character);
    }
}
