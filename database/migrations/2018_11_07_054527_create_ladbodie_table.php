<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLadbodieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ladbodies', function (Blueprint $table) {
			$table->integer('Code')-> unique();
            $table->string('name',100);
            $table->string('Short_Name',25);
			$table->string('Admin_Name',100) ;
            $table->string('Off_Phone',15);
            $table->string('Officer_cell',100);
			$table->string('Officer_email',100);
			$table->string('Section_email',100);
            $table->increments('id');
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
        Schema::dropIfExists('ladbodies');
    }
}
