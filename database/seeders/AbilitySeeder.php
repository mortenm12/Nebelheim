<?php

namespace Database\Seeders;
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
            ['id' => 3, 'name' => '5 HP', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 7, 'equipment' => ''],
            ['id' => 4, 'name' => '6 HP', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 8, 'equipment' => ''],
            ['id' => 5, 'name' => 'Nævekamp 2', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 4, 'equipment' => ''],
            ['id' => 6, 'name' => 'Nævekamp 3', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 4, 'equipment' => ''],
            ['id' => 7, 'name' => 'Nævekamp 4', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 4, 'equipment' => ''],
            ['id' => 8, 'name' => 'Nævekamp 5', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 4, 'equipment' => ''],
            ['id' => 9, 'name' => 'Nævekamp 6', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 4, 'equipment' => ''],
            ['id' => 10, 'name' => 'Nævekamp 7', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 4, 'equipment' => ''],
            ['id' => 11, 'name' => 'Nævekamp 8', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 4, 'equipment' => ''],
            ['id' => 12, 'name' => 'Nævekamp 9', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 4, 'equipment' => ''],
            ['id' => 13, 'name' => 'Nævekamp 10', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 4, 'equipment' => ''],

            ['id' => 14, 'name' => 'Troldmand Niveau 1 Ildens Orden', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 4, 'equipment' => ''],
            ['id' => 15, 'name' => 'Troldmand Niveau 2 Ildens Orden', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 11, 'equipment' => ''],
            ['id' => 16, 'name' => 'Troldmand Niveau 3 Ildens Orden', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 13, 'equipment' => ''],
            ['id' => 17, 'name' => 'Troldmand Niveau 4 Ildens Orden', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 16, 'equipment' => ''],
            ['id' => 18, 'name' => 'Dhar', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 5, 'equipment' => ''],
            ['id' => 19, 'name' => 'Troldmand Niveau 1 Den Grå Orden', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 4, 'equipment' => ''],
            ['id' => 20, 'name' => 'Troldmand Niveau 2 Den Grå Orden', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 11, 'equipment' => ''],
            ['id' => 21, 'name' => 'Troldmand Niveau 3 Den Grå Orden', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 13, 'equipment' => ''],
            ['id' => 22, 'name' => 'Troldmand Niveau 4 Den Grå Orden', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 16, 'equipment' => ''],
            
            ['id' => 23, 'name' => 'Læse og Skrive', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => 3, 'equipment' => ''],


            //['id' => , 'name' => '', 'descr_short' => '', 'descr_long' => '', 'descr_without' => '', 'cost' => , 'equipment' => ''],
        ];


        foreach($abilities as $ability)
        {
            Ability::create($ability);
        }
    }
}
