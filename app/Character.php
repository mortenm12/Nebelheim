<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Character extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function abilities()
    {
        return $this->belongsToMany('App\Ability', 'ability_characters', 'character_id', 'ability_id')->withTimestamps();
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

    public function attachXp($xpType, $teacher, $year, $month)
    {
        
        if($month != 'Døgn')
        {
            $count = Xp::where('base_month', $year . '/' . $month)->where('character_id', $this->id)->count();
        }
        else
        {
            $count = 0;
        }

        $startDate = strToTime($this->start_time);

        if($month == 'Døgn' && $year < date('Y', $startDate))
        {
            return 'Du kan ikke indberette XP fra før din start dato.';
        }
        else if( ($year < date('Y', $startDate)))
        {
            return  'Du kan ikke indberette XP fra før din start dato.';
        }
        else if( ($year == date('Y', $startDate) && $month != 'Døgn' && $month < date('n', $startDate)))
        {
            return 'Du kan ikke indberette XP fra før din start dato.';
        }
        else if( $year > date('Y'))
        {
            return 'Du kan ikke indberette XP fra fremtiden.';
        }
        else if( $year == date('Y') && $month != 'Døgn' && $month > date('n'))
        {
            return 'Du kan ikke indberette XP fra fremtiden.';
        }
        else if($count == 0)
        {
            $xp = new Xp();
            $xp->character_id = $this->id;
            $xp->xp_type = $xpType;
            $xp->teacher = $teacher;
            $xp->base_month = $year . '/' . $month;
            $xp->save();
            return ;
        }
        else
        {
            return 'Du har allerede et XP fra det år og den måned.';
        }
    }

    public function attachAbility($ability, $xpsUsed)
    {
        DB::beginTransaction();    
        try{
            $cost = $ability->cost - $ability->rabat($this);
            if($ability->canBeBougt($this))
            {
                $ability->characters()->attach($this);
                $types = $ability->xp_types->transform(function($item, $key){
                    return $item->xp_type;
                });
                $types->push("Baby XP");

                foreach($types as $xpTypes )
                {
                    $used = $xpsUsed[$xpTypes];

                    $cost -= $used;
                    $xps = $this->getXpsNotUsedNotDeclined()->whereIn('xp_type', [$xpTypes]);

                    for($i = 0; $i < $used; $i++)
                    {
                        $xp = $xps->first();
                        if($xp == null)
                        {
                            DB::rollBack();
                            return  "Der er noget galt, det ser ud som om du ikke har ret til at købe evnen.1";
                        }

                        $xp->used = true;
                        $xp->ability_character = 1;
                        $xp->used_date = date("Y-m-d");
                        $xp->save();
                        $xps = $xps->slice(1);
                    }
                }
                if($cost == 0)
                {
                    DB::commit();
                    return;
                }
                else
                {
                    DB::rollBack();
                    return  "Der er noget galt, det ser ud som om du ikke har ret til at købe evnen.2";
                }
                
            }
            else
            {
                return  "Der er noget galt, det ser ud som om du ikke har ret til at købe evnen.3";
            }
        }
        catch (Exception $e)
        {
            DB::rollBack();
            return  "Der er noget galt, det ser ud som om du ikke har ret til at købe evnen.4";
        }
    }
}
