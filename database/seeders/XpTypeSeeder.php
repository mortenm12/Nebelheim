<?php

namespace Database\Seeders;
use App\XpType;
use Illuminate\Database\Seeder;

class XpTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $types = [
            ['xp_type' => 'Borger XP'],
            ['xp_type' => 'Jæger XP'],
            ['xp_type' => 'Lyssky XP'],
            ['xp_type' => 'Kriger XP'],
            ['xp_type' => 'Præste XP'],
            ['xp_type' => 'Troldmands XP'],
            ['xp_type' => 'Baby XP'],
        ];


        foreach($types as $type)
        {
            XpType::create($type);
        }
    }
}
