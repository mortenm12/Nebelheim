<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentAbilityAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent_ability_abilities', function (Blueprint $table) {
            $table->integer('ability_id');
            $table->integer('talent_ability_id');

            $table->primary(['ability_id', 'talent_ability_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talent_ability_abilities');
    }
}
