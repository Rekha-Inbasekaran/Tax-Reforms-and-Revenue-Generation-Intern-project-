<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
*  `code`, `Subcode`, `Applicability`, `taxname`, `taxdescreption`, `id`, `created_at`, `updated_at`
*/


class CreateTaxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxes', function (Blueprint $table) {
			$table->integer('code');
			$table->integer('Subcode')->unique();
			$table->string('Applicability',3);
            $table->string('taxname',75);
			$table->string('taxdescreption',150);
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
        Schema::dropIfExists('taxes');
    }
}
