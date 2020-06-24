<?php

use App\Ability;
use App\XpType;
use Illuminate\Database\Seeder;

class AbilityXpTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ability::where('name', '3 HP')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Kriger XP'));
        Ability::where('name', '3 HP')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Jæger XP'));
        Ability::where('name', '3 HP')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Lyssky XP'));
        Ability::where('name', '3 HP')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Præste XP'));

        Ability::where('name', '4 HP')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Kriger XP'));
        Ability::where('name', '4 HP')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Jæger XP'));
        Ability::where('name', '4 HP')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Lyssky XP'));
        Ability::where('name', '4 HP')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Præste XP'));
    }
}
