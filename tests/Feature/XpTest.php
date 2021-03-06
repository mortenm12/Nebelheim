<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\XpType;
use App\Character;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class XpTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testNumOfXpTypes()
    {
        $this->seed();
        $count = XpType::all()->count();
        $this->assertEquals(7, $count);

    }

    public function testAttachKrigerXp()
    {
        $this->seed();

        $character = new Character();
        $character->category = "Borger";
        $character->name = "Test";
        $character->race = "Test";
        $character->religion = "Test";
        $character->culture = "Test";
        $character->start_time = date('Y-m-d');
        $character->user_id = 1;
        $character->save();

        $result = $character->attachXp("Kriger XP", "GM", date('Y'), "Døgn");

        $this->assertNull($result);

        $this->assertEquals(1, $character->xps()->count());
    }

    public function testAttachXpInFuture()
    {
        $this->seed();

        $character = new Character();
        $character->category = "Borger";
        $character->name = "Test";
        $character->race = "Test";
        $character->religion = "Test";
        $character->culture = "Test";
        $character->start_time = date('Y-m-d');
        $character->user_id = 1;
        $character->save();

        $result = $character->attachXp("Kriger XP", "GM", date('Y', strtotime("next month")), date('n', strtotime("next month")));

        $this->assertTrue(strpos($result, "fremtid")>0);

        $this->assertEquals(0, $character->xps()->count());
    }

    public function testAttachXpInPast()
    {
        $this->seed();

        $character = new Character();
        $character->category = "Borger";
        $character->name = "Test";
        $character->race = "Test";
        $character->religion = "Test";
        $character->culture = "Test";
        $character->start_time = date('Y-m-d');
        $character->user_id = 1;
        $character->save();

        $result = $character->attachXp("Kriger XP", "GM", date('Y', strtotime("last month")), date('n', strtotime("last month")));

        $this->assertTrue(strpos($result, "før")>0);

        $this->assertEquals(0, $character->xps()->count());
    }

    public function testAttach2XpFromTheSameMonth()
    {
        $this->seed();

        $character = new Character();
        $character->category = "Borger";
        $character->name = "Test";
        $character->race = "Test";
        $character->religion = "Test";
        $character->culture = "Test";
        $character->start_time = date('Y-m-d');
        $character->user_id = 1;
        $character->save();

        $result = $character->attachXp("Kriger XP", "GM", date('Y'), date('n'));

        $this->assertNull($result);

        $this->assertEquals(1, $character->xps()->count());

        $result = $character->attachXp("Kriger XP", "GM", date('Y'), date('n'));

        $this->assertTrue(strpos($result, "allerede")>0);

        $this->assertEquals(1, $character->xps()->count());
    }

    public function testAttach2XpFromDøgn()
    {
        $this->seed();

        $character = new Character();
        $character->category = "Borger";
        $character->name = "Test";
        $character->race = "Test";
        $character->religion = "Test";
        $character->culture = "Test";
        $character->start_time = date('Y-m-d');
        $character->user_id = 1;
        $character->save();

        $result = $character->attachXp("Kriger XP", "GM", date('Y'), "Døgn");

        $this->assertNull($result);

        $this->assertEquals(1, $character->xps()->count());

        $result = $character->attachXp("Kriger XP", "GM", date('Y'), "Døgn");

        $this->assertNull($result);

        $this->assertEquals(2, $character->xps()->count());
    }
}
