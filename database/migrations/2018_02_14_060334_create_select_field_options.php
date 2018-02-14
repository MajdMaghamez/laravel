<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectfieldOptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selectfield_options', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('groupId')->default(0);
            $table->integer('selection');
            $table->string('text');
            $table->tinyInteger('deleted')->default(0);
            $table->timestamps();

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selectfield_options');
    }
}
