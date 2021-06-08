<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRabatAbilityAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rabat_ability_abilities', function (Blueprint $table) {
            $table->integer('ability_id');
            $table->integer('rabat_ability_id');
            $table->integer('rabat');

            $table->primary(['ability_id', 'rabat_ability_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rabat_ability_abilities');
    }
}
