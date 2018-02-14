<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('failed')->default(0);
            $table->tinyInteger('verified')->default(0);
            $table->string('last_logged_ip')->nullable();
            $table->dateTime('last_logged_in')->nullable();
            $table->integer('created_by')->default(0);
            $table->integer('role')->default(4);
            $table->tinyInteger('deleted')->default(0);
            $table->tinyInteger('change_password')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
