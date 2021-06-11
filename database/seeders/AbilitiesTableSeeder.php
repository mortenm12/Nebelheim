<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AbilitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abilities')->delete();
        
        \DB::table('abilities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => '3 HP',
                'descr_short' => 'I stedet for 2 HP, har du 3 HP og kan således holde til lidt mere.',
                'descr_long' => 'Passiv',
                'descr_without' => 'Så har du kun 2 HP.',
                'cost' => 5,
                'equipment' => 'Ingen',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => '4 HP',
                'descr_short' => 'I stedet for 3 HP, har du 4 HP og kan således holde til lidt mere.',
                'descr_long' => 'Passiv.',
                'descr_without' => 'Så har du kun 3 HP eller færre.',
                'cost' => 6,
                'equipment' => 'Ingen',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => '5 HP',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 7,
                'equipment' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => '6 HP',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 8,
                'equipment' => '',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Nævekamp 2',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 4,
                'equipment' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Nævekamp 3',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 4,
                'equipment' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Nævekamp 4',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 4,
                'equipment' => '',
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Nævekamp 5',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 4,
                'equipment' => '',
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Nævekamp 6',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 4,
                'equipment' => '',
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Nævekamp 7',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 4,
                'equipment' => '',
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Nævekamp 8',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 4,
                'equipment' => '',
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Nævekamp 9',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 4,
                'equipment' => '',
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Nævekamp 10',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 4,
                'equipment' => '',
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Troldmand Niveau 1 Ildens Orden',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 4,
                'equipment' => '',
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Troldmand Niveau 2 Ildens Orden',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 11,
                'equipment' => '',
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Troldmand Niveau 3 Ildens Orden',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 13,
                'equipment' => '',
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Troldmand Niveau 4 Ildens Orden',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 16,
                'equipment' => '',
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Dhar',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 5,
                'equipment' => '',
            ),
            18 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Troldmand Niveau 1 Den Grå Orden',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 4,
                'equipment' => '',
            ),
            19 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Troldmand Niveau 2 Den Grå Orden',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 11,
                'equipment' => '',
            ),
            20 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Troldmand Niveau 3 Den Grå Orden',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 13,
                'equipment' => '',
            ),
            21 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Troldmand Niveau 4 Den Grå Orden',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 16,
                'equipment' => '',
            ),
            22 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Læse og Skrive',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 3,
                'equipment' => '',
            ),
            23 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'Bonk',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 3,
                'equipment' => '',
            ),
            24 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'name' => 'SV. Bue',
                'descr_short' => '',
                'descr_long' => '',
                'descr_without' => '',
                'cost' => 3,
                'equipment' => '',
            ),
        ));
        
        
    }
}