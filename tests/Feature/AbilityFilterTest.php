<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Character;
use App\Ability;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AbilityFilterTest extends TestCase
{
    use DatabaseMigrations;
    public function test4Hp()
    {
        $this->seed();

        $character = new Character();
        $character->category = "Borger";
        $character->name = "Test";
        $character->race = "Test";
        $character->religion = "Test";
        $character->culture = "Test";
        $character->start_time = "2020-01-01";
        $character->user_id = 1;
        $character->save();

        Ability::findOrFail(1)->characters()->attach($character);
        Ability::findOrFail(2)->characters()->attach($character);

        $result = $character->getAbilitesFiltered();

        $this->assertEquals([2 => "4 HP"], $result);
    }

    public function test5Hp()
    {
        $this->seed();

        $character = new Character();
        $character->category = "Borger";
        $character->name = "Test";
        $character->race = "Test";
        $character->religion = "Test";
        $character->culture = "Test";
        $character->start_time = "2020-01-01";
        $character->user_id = 1;
        $character->save();

        Ability::findOrFail(1)->characters()->attach($character);
        Ability::findOrFail(2)->characters()->attach($character);
        Ability::findOrFail(3)->characters()->attach($character);

        $result = $character->getAbilitesFiltered();

        $this->assertEquals([3 => "5 HP"], $result);
    }

    public function test4Hp5NK()
    {
        $this->seed();

        $character = new Character();
        $character->category = "Borger";
        $character->name = "Test";
        $character->race = "Test";
        $character->religion = "Test";
        $character->culture = "Test";
        $character->start_time = "2020-01-01";
        $character->user_id = 1;
        $character->save();

        Ability::findOrFail(1)->characters()->attach($character);
        Ability::findOrFail(2)->characters()->attach($character);

        Ability::findOrFail(5)->characters()->attach($character);
        Ability::findOrFail(6)->characters()->attach($character);

        $result = $character->getAbilitesFiltered();

        $this->assertEquals([2 => "4 HP", 6 => "Nævekamp 3"], $result);
    }
}
