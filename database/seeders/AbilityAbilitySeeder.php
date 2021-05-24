<?php

namespace Database\Seeders;
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
        Ability::where('name', '4 HP')->firstOrFail()->requerements()->attach(Ability::where('name', '3 HP')->firstOrFail(), ['serie' => '1']);
        Ability::where('name', '4 HP')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 4')->firstOrFail(), ['serie' => '1']);

        Ability::where('name', '5 HP')->firstOrFail()->requerements()->attach(Ability::where('name', '4 HP')->firstOrFail(), ['serie' => '1']);
        Ability::where('name', '5 HP')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 5')->firstOrFail(), ['serie' => '1']);

        Ability::where('name', '6 HP')->firstOrFail()->requerements()->attach(Ability::where('name', '5 HP')->firstOrFail(), ['serie' => '1']);
        Ability::where('name', '6 HP')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 6')->firstOrFail(), ['serie' => '1']);

        Ability::where('name', 'Nævekamp 3')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 2')->firstOrFail(), ['serie' => '1']);

        Ability::where('name', 'Nævekamp 4')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 3')->firstOrFail(), ['serie' => '1']);

        Ability::where('name', 'Nævekamp 5')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 4')->firstOrFail(), ['serie' => '1']);

        Ability::where('name', 'Nævekamp 6')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 5')->firstOrFail(), ['serie' => '1']);

        Ability::where('name', 'Nævekamp 7')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 6')->firstOrFail(), ['serie' => '1']);

        Ability::where('name', 'Nævekamp 8')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 7')->firstOrFail(), ['serie' => '1']);

        Ability::where('name', 'Nævekamp 9')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 8')->firstOrFail(), ['serie' => '1']);

        Ability::where('name', 'Nævekamp 10')->firstOrFail()->requerements()->attach(Ability::where('name', 'Nævekamp 9')->firstOrFail(), ['serie' => '1']);

        Ability::where('name', 'Troldmand Niveau 1 Ildens Orden')->firstOrFail()->requerements()->attach(Ability::where('name', 'Læse og Skrive')->firstOrFail(), ['serie' => '1']);
        Ability::where('name', 'Troldmand Niveau 1 Ildens Orden')->firstOrFail()->requerements()->attach(Ability::where('name', 'Troldmand Niveau 1 Den Grå Orden')->firstOrFail(), ['serie' => '-1']);
        Ability::where('name', 'Troldmand Niveau 2 Ildens Orden')->firstOrFail()->requerements()->attach(Ability::where('name', 'Troldmand Niveau 1 Ildens Orden')->firstOrFail(), ['serie' => '1']);
        Ability::where('name', 'Troldmand Niveau 3 Ildens Orden')->firstOrFail()->requerements()->attach(Ability::where('name', 'Troldmand Niveau 2 Ildens Orden')->firstOrFail(), ['serie' => '1']);
        Ability::where('name', 'Troldmand Niveau 4 Ildens Orden')->firstOrFail()->requerements()->attach(Ability::where('name', 'Troldmand Niveau 3 Ildens Orden')->firstOrFail(), ['serie' => '1']);
    
        Ability::where('name', 'Troldmand Niveau 1 Den Grå Orden')->firstOrFail()->requerements()->attach(Ability::where('name', 'Læse og Skrive')->firstOrFail(), ['serie' => '1']);
        Ability::where('name', 'Troldmand Niveau 1 Den Grå Orden')->firstOrFail()->requerements()->attach(Ability::where('name', 'Troldmand Niveau 1 Ildens Orden')->firstOrFail(), ['serie' => '-1']);
        Ability::where('name', 'Troldmand Niveau 2 Den Grå Orden')->firstOrFail()->requerements()->attach(Ability::where('name', 'Troldmand Niveau 1 Den Grå Orden')->firstOrFail(), ['serie' => '1']);
        Ability::where('name', 'Troldmand Niveau 3 Den Grå Orden')->firstOrFail()->requerements()->attach(Ability::where('name', 'Troldmand Niveau 2 Den Grå Orden')->firstOrFail(), ['serie' => '1']);
        Ability::where('name', 'Troldmand Niveau 4 Den Grå Orden')->firstOrFail()->requerements()->attach(Ability::where('name', 'Troldmand Niveau 3 Den Grå Orden')->firstOrFail(), ['serie' => '1']);
    
        Ability::where('name', 'Dhar')->firstOrFail()->requerements()->attach(Ability::where('name', 'Troldmand Niveau 3 Ildens Orden')->firstOrFail(), ['serie' => '1']);
        Ability::where('name', 'Dhar')->firstOrFail()->requerements()->attach(Ability::where('name', 'Troldmand Niveau 3 Den Grå Orden')->firstOrFail(), ['serie' => '2']);
    }
}
