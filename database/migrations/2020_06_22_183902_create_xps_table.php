<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xps', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('basemonth');
            $table->string('xp_type');
            $table->string('teacher');
            $table->string('file_path');
            $table->enum('approved', ['not consitered', 'approved', 'declined'])->default('not consitered');
            $table->dateTime('approved_time');
            $table->boolean('used')->default(false);
            $table->date('used_date')->nullable();
            $table->integer('ability_character')->nullable();
            $table->integer('character');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xps');
    }
}
