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

    }
}
