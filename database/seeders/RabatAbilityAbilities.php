<?php

namespace Database\Seeders;
use App\Ability;

use Illuminate\Database\Seeder;

class RabatAbilityAbilities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ability::where('name', '3 HP')->firstOrFail()->discount()->attach(Ability::where('name', 'Læse og Skrive')->firstOrFail(), ['rabat' => '1']);
    }
}
