<?php

use App\Ability;
use Illuminate\Database\Seeder;

class AbilityAbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ability::where('name', '4 HP')->firstOrFail()->requerements()->attach(Ability::where('name', '3 HP')->firstOrFail());

    }
}
