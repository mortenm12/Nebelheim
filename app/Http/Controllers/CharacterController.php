<?php

namespace App\Http\Controllers;

use App\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    //

    public function index($id)
    {
        $character = Character::findOrFail($id);
        return view('character', [
            'character' => $character
        ]);
    }


}
