<?php

namespace App\Http\Controllers;

use App\Ability;
use App\Category;
use App\Character;
use App\User;
use App\Xp;
use App\XpType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $characters = Auth::user()->characters;
        return view('home', [
            'characters' => $characters
        ]);
    }

    public function getCharacter($id)
    {
        $character = Character::findOrFail($id);
        return view('character', [
            'character' => $character
        ]);
    }

    public function newCharacter()
    {
        $categories = Category::all();
        return view('newcharacter', [
            'categories' => $categories
        ]);
    }

    public function postCharacter(Request $request)
    {
        $character = new Character();
        $character->category = $request->input('category');
        $character->name = $request->input('name');
        $character->race = $request->input('race');
        $character->religion = $request->input('religion');
        $character->culture = $request->input('culture');
        $character->start_time = date('Y-m-d');
        $character->user_id = Auth::user()->id;
        $character->save();
        return $this->index();
    }

    public function findAbility($id, $error='')
    {
        $character = Character::findOrFail($id);
        $abilities = Ability::all();
        $categories = Category::all();
        return view('findAbility', [
            'character' => $character,
            'abilities' => $abilities,
            'categories' => $categories
        ]);
    }

    public function ability($id)
    {
        $ability = Ability::findOrFail($id);
        return view('ability', [
            'ability' => $ability
        ]);
    }

    public function xp($id, $error='')
    {
        $xpTypes = XpType::all();
        $character = Character::findOrFail($id);
        $month = date('m');
        $year = date('Y');
        return view('xp', [
            'character' => $character,
            'xpTypes' => $xpTypes,
            'month' => $month,
            'year' => $year,
            'error' => $error
        ]);
    }

    public function postXp(Request $request)
    {
        $id = $request->input('id');

        if($request->input('month') != 'Døgn')
        {
            $count = Xp::where('base_month', $request->input('year') . '/' . $request->input('month'))->where('character_id', $id)->count();
        }
        else
        {
            $count = 0;
        }

        $startDate = strtotime(Character::findOrFail($id)->start_time);

        if($request->input('month') == 'Døgn' && $request->input('year') < date('Y', $startDate))
        {
            return $this->xp($id, 'Du kan ikke indberette XP fra før din start dato.');
        }
        else if( ($request->input('year') < date('Y', $startDate)))
        {
            return $this->xp($id, 'Du kan ikke indberette XP fra før din start dato.');
        }
        else if( ($request->input('year') == date('Y', $startDate) && $request->input('month') != 'Døgn' && $request->input('month') < date('n', $startDate)))
        {
            return $this->xp($id, 'Du kan ikke indberette XP fra før din start dato.');
        }
        else if( $request->input('year') > date('Y'))
        {
            return $this->xp($id, 'Du kan ikke indberette XP fra fremtiden.');
        }
        else if( $request->input('year') == date('Y') && $request->input('month') != 'Døgn' && $request->input('month') > date('n'))
        {
            return $this->xp($id, 'Du kan ikke indberette XP fra fremtiden.');
        }
        else if($count == 0)
        {
            $xp = new Xp();
            $xp->character_id = $id;
            $xp->xp_type = $request->input('xp_type');
            $xp->teacher = $request->input('teacher');
            $xp->base_month = $request->input('year') . '/' . $request->input('month');
            $xp->save();
            return $this->getCharacter($id);
        }
        else
        {
            return $this->xp($id, 'Du har allerede et XP fra det år og den måned.');
        }
    }

    public function postAbility(Request $request, $id)
    {    
        DB::beginTransaction();    
        try{

            $characterId = $id;
            $ability = Ability::findOrFail($request->input('abilityId'));
            
            $character = Character::findOrFail($characterId);
            $cost = $ability->cost - $ability->rabat($character);
            if($ability->canBeBougt($character))
            {
                $ability->characters()->attach($character);

                foreach($ability->xp_types as $xpTypes )
                {
                    $used = $request->input(str_replace(' ', '_',$xpTypes->xp_type));

                    $cost -= $used;
                    $xps = $character->getXpsNotUsedNotDeclined()->whereIn('xp_type', [$xpTypes->xp_type]);

                    for($i = 0; $i < $used; $i++)
                    {
                        $xp = $xps->first();

                        $xp->used = true;
                        $xp->ability_character = 1;
                        $xp->used_date = date("Y-m-d");
                        $xp->save();
                        $xps = $xps->slice(1);
                    }
                }
                DB::commit();
                return $this->getCharacter($id);
            }
            else
            {
                return $this->findAbility($characterId, "Der er noget galt, det ser ud som om du ikke har ret til at købe evnen.");
            }
        }
        catch (Exception $e)
        {
            DB::rollBack();
            throw $e;
        }
    }
}
