<?php

namespace Database\Seeders;
use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            ['category' => 'Borger', 'start_ability_id' => null],
            ['category' => 'Jæger', 'start_ability_id' => null],
            ['category' => 'Lyssky', 'start_ability_id' => null],
            ['category' => 'Akedemiker', 'start_ability_id' => null],
            ['category' => 'Kriger', 'start_ability_id' => 1],

        ];


        foreach($categories as $category)
        {
            Category::create($category);
        }
    }
}
