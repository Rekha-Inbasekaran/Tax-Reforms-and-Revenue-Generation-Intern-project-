<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('email',50)->unique();
            $table->string('username',75)->unique();
            $table->string('password',75);
			$table->string('profilecode',10);
            $table->string('activation_code',10)->nullable();
            $table->boolean('status')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('newusers');
    }
}
