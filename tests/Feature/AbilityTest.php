<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Character;
use App\Ability;
use App\Xp;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AbilityTest extends TestCase
{
    use DatabaseMigrations;

    public function testAttachAbility()
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

        $character->attachXp("Kriger XP", "GM", "2020", "1");
        $character->attachXp("Kriger XP", "GM", "2020", "2");
        $character->attachXp("Kriger XP", "GM", "2020", "3");
        $character->attachXp("Kriger XP", "GM", "2020", "4");
        $character->attachXp("Kriger XP", "GM", "2020", "5");

        $this->assertEquals(5, $character->getXpsNotUsedNotDeclined()->count());
        $this->assertEquals(0, $character->abilities()->count());

        $ability = Ability::findOrFail(1);
        $result = $character->attachAbility($ability, ["Kriger XP" => 4, "Jæger XP" => 0, "Lyssky XP" => 0, "Præste XP" => 0, "Baby XP" => 0]);

        $this->assertEquals($result, null);

        $this->assertEquals(1, $character->abilities()->count());
        $this->assertEquals(1, $character->getXpsNotUsedNotDeclined()->count());
    }

    public function testAttachAbilityBabyXp()
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

        $character->attachXp("Kriger XP", "GM", "2020", "1");
        $character->attachXp("Kriger XP", "GM", "2020", "2");
        $character->attachXp("Kriger XP", "GM", "2020", "3");
        $character->attachXp("Baby XP", "GM", "2020", "4");

        $this->assertEquals(4, $character->getXpsNotUsedNotDeclined()->count());
        $this->assertEquals(0, $character->abilities()->count());

        $ability = Ability::findOrFail(1);

        $result = $character->attachAbility($ability, ["Kriger XP" => 3, "Jæger XP" => 0, "Lyssky XP" => 0, "Præste XP" => 0, "Baby XP" => 1]);

        $this->assertEquals($result, null);

        
        $this->assertEquals(1, $character->abilities()->count());
        $this->assertEquals(0, $character->getXpsNotUsedNotDeclined()->count());
    }

    public function testAttachAbilityFakeXp()
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

        $character->attachXp("Kriger XP", "GM", "2020", "1");
        $character->attachXp("Kriger XP", "GM", "2020", "2");
        $character->attachXp("Kriger XP", "GM", "2020", "3");
        $character->attachXp("Kriger XP", "GM", "2020", "4");

        $this->assertEquals(4, $character->getXpsNotUsedNotDeclined()->count());
        $this->assertEquals(0, $character->abilities()->count());

        $ability = Ability::findOrFail(1);
        $result = $character->attachAbility($ability, ["Kriger XP" => 3, "Jæger XP" => 1, "Lyssky XP" => 0, "Præste XP" => 0, "Baby XP" => 0]);

        $this->assertTrue(strpos($result, "galt")>0);

        $this->assertEquals(0, $character->abilities()->count());
        $this->assertEquals(4, $character->getXpsNotUsedNotDeclined()->count());
    }

    public function testAttachAbilityTwoTypesXp()
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

        $character->attachXp("Kriger XP", "GM", "2020", "1");
        $character->attachXp("Kriger XP", "GM", "2020", "2");
        $character->attachXp("Kriger XP", "GM", "2020", "3");
        $character->attachXp("Jæger XP", "GM", "2020", "4");

        $this->assertEquals(4, $character->getXpsNotUsedNotDeclined()->count());
        $this->assertEquals(0, $character->abilities()->count());

        $ability = Ability::findOrFail(1);
        $result = $character->attachAbility($ability, ["Kriger XP" => 3, "Jæger XP" => 1, "Lyssky XP" => 0, "Præste XP" => 0, "Baby XP" => 0]);

        $this->assertEquals($result, null);

        $this->assertEquals(1, $character->abilities()->count());
        $this->assertEquals(0, $character->getXpsNotUsedNotDeclined()->count());
    }

    public function testAttachAbilityLessXp()
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

        $character->attachXp("Kriger XP", "GM", "2020", "1");
        $character->attachXp("Kriger XP", "GM", "2020", "2");
        $character->attachXp("Kriger XP", "GM", "2020", "3");

        $this->assertEquals(3, $character->getXpsNotUsedNotDeclined()->count());
        $this->assertEquals(0, $character->abilities()->count());

        $ability = Ability::findOrFail(1);
        $result = $character->attachAbility($ability, ["Kriger XP" => 4, "Jæger XP" => 0, "Lyssky XP" => 0, "Præste XP" => 0, "Baby XP" => 0]);

        $this->assertTrue(strpos($result, "galt")>0);
        
        $this->assertEquals(0, $character->abilities()->count());
        $this->assertEquals(3, $character->getXpsNotUsedNotDeclined()->count());
    }

    public function testAbilityDate()
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

        $character->abilities()->attach(Ability::findOrFail(1));

        $this->assertEquals(date("Y-m-d"), $character->getAbilityDate(1));
    }

    public function testRequirements()
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

        $character->attachXp("Kriger XP", "GM", "2020", "1");
        $character->attachXp("Kriger XP", "GM", "2020", "2");
        $character->attachXp("Kriger XP", "GM", "2020", "3");
        $character->attachXp("Kriger XP", "GM", "2020", "4");
        $character->attachXp("Kriger XP", "GM", "2020", "5");

        $this->assertEquals(5, $character->getXpsNotUsedNotDeclined()->count());
        $this->assertEquals(0, $character->abilities()->count());

        $ability = Ability::findOrFail(2);
        $result = $character->attachAbility($ability, ["Kriger XP" => 5, "Jæger XP" => 0, "Lyssky XP" => 0, "Præste XP" => 0, "Baby XP" => 0]);

        $this->assertTrue(strpos($result, "galt")>0);

        $this->assertEquals(0, $character->abilities()->count());
        $this->assertEquals(5, $character->getXpsNotUsedNotDeclined()->count());
    }

}
