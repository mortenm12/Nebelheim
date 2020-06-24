<?php

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
    }
}
