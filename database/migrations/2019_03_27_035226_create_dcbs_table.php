<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDcbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dcbs', function (Blueprint $table) {
			$table->char('sessionID', 32) ;
			$table->char('TaxDesc', 75);
			
			$table->decimal('DemPrevFinYear', 12, 2);
			$table->decimal('ColPrevFinYear', 12, 2);
			$table->decimal('ArrCollThisMon', 12, 2);
			$table->decimal('CurrDemFinYear', 12, 2);
			$table->decimal('DemRaisThisMon', 12, 2);
			$table->decimal('CurrcolThisMon', 12, 2);
			
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
        Schema::dropIfExists('dcbs');
    }
}
