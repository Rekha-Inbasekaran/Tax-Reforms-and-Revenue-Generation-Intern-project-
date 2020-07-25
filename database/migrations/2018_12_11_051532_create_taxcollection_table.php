<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxcollectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxcollections', function (Blueprint $table) {
			$table->integer('ladbodiescode');
			$table->integer('taxscode');
            //$table->string('collectionmonth',2);
			//$table->string('collectionyear',4);
			$table->date('collectiondate');
			$table->decimal('collectionamount', 11, 2);
			$table->decimal('arrearcollection', 11, 2);

            $table->increments('id');
            $table->timestamps();
			
			$table->foreign('ladbodiescode')->references('code')->on('ladbodies');
			$table->foreign('taxscode')->references('Subcode')->on('taxes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxcollections');
    }
}
