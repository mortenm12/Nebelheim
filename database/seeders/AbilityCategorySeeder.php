<?php

namespace Database\Seeders;
use App\Ability;
use App\Category;
use Illuminate\Database\Seeder;

class AbilityCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ability::where('name', '3 HP')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Lyssky'));
        Ability::where('name', '3 HP')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Jæger'));

        Ability::where('name', '4 HP')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Kriger'));

        Ability::where('name', '5 HP')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Kriger'));

        Ability::where('name', '6 HP')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Kriger'));

        Ability::where('name', 'Nævekamp 2')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Kriger'));
        Ability::where('name', 'Nævekamp 2')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Jæger'));
        Ability::where('name', 'Nævekamp 2')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Lyssky'));
        Ability::where('name', 'Nævekamp 2')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Borger'));

        Ability::where('name', 'Nævekamp 3')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Kriger'));
        Ability::where('name', 'Nævekamp 3')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Jæger'));
        Ability::where('name', 'Nævekamp 3')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Lyssky'));
        Ability::where('name', 'Nævekamp 3')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Borger'));

        Ability::where('name', 'Nævekamp 4')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Kriger'));
        Ability::where('name', 'Nævekamp 4')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Jæger'));
        Ability::where('name', 'Nævekamp 4')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Lyssky'));
        Ability::where('name', 'Nævekamp 4')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Borger'));

        Ability::where('name', 'Nævekamp 5')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Kriger'));
        Ability::where('name', 'Nævekamp 5')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Jæger'));
        Ability::where('name', 'Nævekamp 5')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Lyssky'));
        Ability::where('name', 'Nævekamp 5')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Borger'));

        Ability::where('name', 'Nævekamp 6')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Kriger'));

        Ability::where('name', 'Nævekamp 7')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Kriger'));

        Ability::where('name', 'Nævekamp 8')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Kriger'));

        Ability::where('name', 'Nævekamp 9')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Kriger'));

        Ability::where('name', 'Nævekamp 10')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Kriger'));

        Ability::where('name', 'Troldmand Niveau 1 Ildens Orden')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Akedemiker'));

        Ability::where('name', 'Troldmand Niveau 2 Ildens Orden')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Akedemiker'));

        Ability::where('name', 'Troldmand Niveau 3 Ildens Orden')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Akedemiker'));

        Ability::where('name', 'Troldmand Niveau 4 Ildens Orden')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Akedemiker'));

        Ability::where('name', 'Troldmand Niveau 1 Den Grå Orden')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Akedemiker'));

        Ability::where('name', 'Troldmand Niveau 2 Den Grå Orden')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Akedemiker'));

        Ability::where('name', 'Troldmand Niveau 3 Den Grå Orden')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Akedemiker'));

        Ability::where('name', 'Troldmand Niveau 4 Den Grå Orden')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Akedemiker'));

        Ability::where('name', 'Dhar')->firstOrFail()->favorit_category()->attach(Category::findOrFail('Akedemiker'));

    }
}
