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
        $category = Category::findOrFail($request->input('category'));
        $name = $request->input('name');
        $race = $request->input('race');
        $religion = $request->input('religion');
        $culture = $request->input('culture');

        $character = Auth::user()->attachCharacter($category, $name, $race, $religion, $culture);

        return redirect("/character/".$character->id);
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
        $character = Character::findOrFail($id);
        $xpType = $request->input('xp_type');
        $teacher = $request->input('teacher');
        $year = $request->input('year');
        $month = $request->input('month');

        $result = $character->attachXp($xpType, $teacher, $year, $month);
        if($result == null)
        {
            return redirect("/character/".$id);
        }
        else
        {
            return $this->xp($id, $result);
        }

    }

    public function postAbility(Request $request, $id)
    {    
        
        $ability = Ability::findOrFail($request->input('abilityId'));
            
        $character = Character::findOrFail($id);
        $xps = [];
        $xps["Baby XP"] = $request->input(str_replace(' ', '_',"Baby XP"));

        foreach($ability->xp_types as $xpTypes )
        {
            $xps[$xpTypes->xp_type] = $request->input(str_replace(' ', '_',$xpTypes->xp_type));
        }

        $result = $character->attachAbility($ability, $xps);
            
        if($result == null)
        {
            return redirect("/character/".$id);
        }
        else
        {
            return $this->findAbility($Id, $result);
        }
    }
}
