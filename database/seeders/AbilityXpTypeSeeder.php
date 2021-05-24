<?php

namespace Database\Seeders;
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

        Ability::where('name', '5 HP')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Kriger XP'));

        Ability::where('name', '6 HP')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Kriger XP'));

        Ability::where('name', 'Nævekamp 2')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Kriger XP'));
        Ability::where('name', 'Nævekamp 2')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Jæger XP'));
        Ability::where('name', 'Nævekamp 2')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Lyssky XP'));
        Ability::where('name', 'Nævekamp 2')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Borger XP'));
        Ability::where('name', 'Nævekamp 2')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Præste XP'));

        Ability::where('name', 'Nævekamp 3')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Kriger XP'));
        Ability::where('name', 'Nævekamp 3')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Jæger XP'));
        Ability::where('name', 'Nævekamp 3')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Lyssky XP'));
        Ability::where('name', 'Nævekamp 3')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Borger XP'));
        Ability::where('name', 'Nævekamp 3')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Præste XP'));

        Ability::where('name', 'Nævekamp 4')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Kriger XP'));
        Ability::where('name', 'Nævekamp 4')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Jæger XP'));
        Ability::where('name', 'Nævekamp 4')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Lyssky XP'));
        Ability::where('name', 'Nævekamp 4')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Borger XP'));
        Ability::where('name', 'Nævekamp 4')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Præste XP'));

        Ability::where('name', 'Nævekamp 5')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Kriger XP'));
        Ability::where('name', 'Nævekamp 5')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Jæger XP'));
        Ability::where('name', 'Nævekamp 5')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Lyssky XP'));
        Ability::where('name', 'Nævekamp 5')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Borger XP'));
        Ability::where('name', 'Nævekamp 5')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Præste XP'));

        Ability::where('name', 'Nævekamp 6')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Kriger XP'));

        Ability::where('name', 'Nævekamp 7')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Kriger XP'));

        Ability::where('name', 'Nævekamp 8')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Kriger XP'));

        Ability::where('name', 'Nævekamp 9')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Kriger XP'));

        Ability::where('name', 'Nævekamp 10')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Kriger XP'));

        Ability::where('name', 'Læse og Skrive')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Troldmands XP'));
        Ability::where('name', 'Læse og Skrive')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Borger XP'));
        Ability::where('name', 'Læse og Skrive')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Præste XP'));

        Ability::where('name', 'Dhar')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Troldmands XP'));

        Ability::where('name', 'Troldmand Niveau 1 Ildens Orden')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Troldmands XP'));
        Ability::where('name', 'Troldmand Niveau 2 Ildens Orden')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Troldmands XP'));
        Ability::where('name', 'Troldmand Niveau 3 Ildens Orden')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Troldmands XP'));
        Ability::where('name', 'Troldmand Niveau 4 Ildens Orden')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Troldmands XP'));

        Ability::where('name', 'Troldmand Niveau 1 Den Grå Orden')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Troldmands XP'));
        Ability::where('name', 'Troldmand Niveau 2 Den Grå Orden')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Troldmands XP'));
        Ability::where('name', 'Troldmand Niveau 3 Den Grå Orden')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Troldmands XP'));
        Ability::where('name', 'Troldmand Niveau 4 Den Grå Orden')->firstOrFail()->xp_types()->attach(XpType::findOrFail('Troldmands XP'));

    }
}
