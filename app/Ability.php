<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    //
    public $timestamps = false;

    public function requerements()
    {
        return $this->belongsToMany('App\Ability', 'ability_abilities', 'ability_id', 'req_ability_id')->withPivot('serie');
    }

    public function requered_in()
    {
        return $this->belongsToMany('App\Ability', 'ability_abilities', 'req_ability_id', 'ability_id');
    }

    public function talents()
    {
        return $this->belongsToMany('App\Ability', 'talent_ability_abilities', 'ability_id', 'talent_ability_id');
    }

    public function talent_in()
    {
        return $this->belongsToMany('App\Ability', 'talent_ability_abilities', 'talent_ability_id', 'ability_id');
    }

    public function discount()
    {
        return $this->belongsToMany('App\Ability', 'rabat_ability_abilities', 'ability_id', 'rabat_ability_id')->withPivot('rabat');
    }

    public function rabat_in()
    {
        return $this->belongsToMany('App\Ability', 'rabat_ability_abilities', 'rabat_ability_id', 'ability_id');
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

    public function getSeries()
    {
        $results = [];
        foreach($this->requerements as $req)
        {
            $serie = $req->pivot->serie;
            if(!in_array($serie, $results))
            {
                array_push($results, $serie);
            }
        }
        sort($results);
        return $results;
    }

    public function isNegativeRequirementsMeet(Character $character)
    {
        foreach($this->getSeries() as $serie)
        {
            if($serie < 0)
            {
                foreach($this->requirementsInSerie($serie) as $req)
                {
                    if($character->abilities->contains($req)){
                        return false;
                    }
                
                }
            }
        }
        
        return true;
    }

    public function requirementsInSerie($serie){
        $results = [];

        foreach($this->requerements as $req)
        {
            if($req->pivot->serie == $serie)
                array_push($results, $req);
        }
        return $results;
    }

    public function isPositiveRequirementsMeet(Character $character)
    {
        $isSeriesBiggerThanZero = false;
        foreach($this->getSeries() as $serie)
        {
            if($serie > 0)
            {
                $isSeriesBiggerThanZero = true;

                $result = true;
                foreach($this->requirementsInSerie($serie) as $req)
                {
                    if(!$character->abilities->contains($req))
                        $result = false;

                }
                if($result)
                    return true;
            }
        }
        return !$isSeriesBiggerThanZero;
    }

    public function isRequirementsMeet(Character $character)
    {
        return $this->isPositiveRequirementsMeet($character) && $this->isNegativeRequirementsMeet($character);
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
        $abilityRabat = 0;

        if($this->favorit_category->contains($character->category))
        {
            $favoritAbility = 2;
        }

        foreach($this->discount as $rabat_ability)
        {
            if($character->abilities->contains($rabat_ability))
            {
                $abilityRabat += $rabat_ability->pivot->rabat;
            }
        }

        return $niceCloth + $favoritAbility + $abilityRabat;
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
