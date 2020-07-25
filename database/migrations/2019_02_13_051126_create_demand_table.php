<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
	  `ladbodiescode`, `taxscode`, `demanddate`, `demandAmount`, `id`, `created_at`, `updated_at` FROM `demands'
	 
     */
    public function up()
    {
        Schema::create('demands', function (Blueprint $table) {
			
			$table->integer('ladbodiescode');
			$table->integer('taxscode');
			$table->date('demanddate');
            
			$table->decimal('demandAmount', 11, 2);
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
        Schema::dropIfExists('demands');
    }
}
