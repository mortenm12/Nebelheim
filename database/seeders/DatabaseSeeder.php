<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
            UserSeeder::class,
            XpTypeSeeder::class,
            CategorySeeder::class,
            MemberTypeSeeder::class,
            MemberSeeder::class,
            AbilitySeeder::class,
            AbilityCategorySeeder::class,
            AbilityXpTypeSeeder::class,
            AbilityAbilitySeeder::class,
            CharacterSeeder::class,
            XpSeeder::class,
            AbilityCharacterSeeder::class,
         ]);
    }
}
