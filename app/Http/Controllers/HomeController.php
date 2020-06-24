<?php

namespace App\Http\Controllers;

use App\Character;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function new()
    {
        return view('newcharacter');
    }

    public function newcharacter(Request $request)
    {
        $character = new Character();
        $character->name = $request->input('name');
        $character->race = $request->input('race');
        $character->religion = $request->input('religion');
        $character->culture = $request->input('culture');
        $character->start_time = date('Y-m-d');
        $character->user_id = Auth::user()->id;
        $character->save();
        return $this->index();
    }
}
