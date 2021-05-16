<?php

namespace Database\Seeders;
use App\Ability;
use App\Character;
use Illuminate\Database\Seeder;

class AbilityCharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ability::where('name', '3 HP')->firstOrFail()->characters()->attach(Character::findOrFail(1));
        Ability::where('name', 'Nævekamp 2')->firstOrFail()->characters()->attach(Character::findOrFail(1));
        Ability::where('name', 'Nævekamp 3')->firstOrFail()->characters()->attach(Character::findOrFail(1));
        Ability::where('name', 'Nævekamp 4')->firstOrFail()->characters()->attach(Character::findOrFail(1));
    }
}
