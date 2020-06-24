<?php

use App\Ability;
use Illuminate\Database\Seeder;

class AbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $abilities = [
            ['id' => 1, 'name' => '3 HP', 'descr_short' => 'I stedet for 2 HP, har du 3 HP og kan således holde til lidt mere.', 'descr_long' => 'Passiv', 'descr_without' => 'Så har du kun 2 HP.', 'cost' => 5, 'equipment' => 'Ingen'],
            ['id' => 2, 'name' => '4 HP', 'descr_short' => 'I stedet for 3 HP, har du 4 HP og kan således holde til lidt mere.', 'descr_long' => 'Passiv.', 'descr_without' => 'Så har du kun 3 HP eller færre.', 'cost' => 6, 'equipment' => 'Ingen'],


        ];


        foreach($abilities as $ability)
        {
            Ability::create($ability);
        }
    }
}
