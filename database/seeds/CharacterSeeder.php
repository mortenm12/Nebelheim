<?php

use App\Character;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = [
            ['user_id' => 1, 'name' => 'Hansi Gynter', 'start_time' => Date('Y-m-d'), 'religion' => 'Sigmar', 'culture' => 'Kejserriget', 'race' =>'Menneske', 'category' => 'Borger'],
        ];


        foreach($characters as $char)
        {
            Character::create($char);
        }
    }
}
