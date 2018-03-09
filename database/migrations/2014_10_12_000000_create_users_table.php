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
            $table->string('firstname')->collation('utf8_unicode_ci');
            $table->string('lastname')->collation('utf8_unicode_ci');
            $table->string('email')->unique()->collation('utf8_unicode_ci');
            $table->string('password')->collation('utf8_unicode_ci');
            $table->integer('question1');
            $table->string('answer1')->collation('utf8_unicode_ci');
            $table->integer('question2');
            $table->string('answer2')->collation('utf8_unicode_ci');
            $table->boolean('active')->default(true);
            $table->tinyInteger('failed')->default(0);
            $table->boolean('verified')->default(false);
            $table->string('token')->nullable()->collation('utf8_unicode_ci');
            $table->string('last_logged_ip')->nullable()->collation('utf8_unicode_ci');
            $table->dateTime('last_logged_in')->nullable();
            $table->integer('created_by')->default(0);
            $table->integer('role')->default(4);
            $table->boolean('deleted')->default(false);
            $table->boolean('change_password')->default(false);
            $table->rememberToken()->collation('utf8_unicode_ci');
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
