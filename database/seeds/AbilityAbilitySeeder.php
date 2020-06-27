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
        Ability::where('name', '4 HP')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 4')->firstOrFail());

        Ability::where('name', '5 HP')->firstOrFail()->requerements()->attach(Ability::where('name', '4 HP')->firstOrFail());
        Ability::where('name', '5 HP')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 5')->firstOrFail());

        Ability::where('name', '6 HP')->firstOrFail()->requerements()->attach(Ability::where('name', '5 HP')->firstOrFail());
        Ability::where('name', '6 HP')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 6')->firstOrFail());

        Ability::where('name', 'Nævekamp 3')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 2')->firstOrFail());

        Ability::where('name', 'Nævekamp 4')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 3')->firstOrFail());

        Ability::where('name', 'Nævekamp 5')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 4')->firstOrFail());

        Ability::where('name', 'Nævekamp 6')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 5')->firstOrFail());

        Ability::where('name', 'Nævekamp 7')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 6')->firstOrFail());

        Ability::where('name', 'Nævekamp 8')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 7')->firstOrFail());

        Ability::where('name', 'Nævekamp 9')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 8')->firstOrFail());

        Ability::where('name', 'Nævekamp 10')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 9')->firstOrFail());

    }
}
