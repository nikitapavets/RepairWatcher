<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairConnectStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_connect_statuses', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('repair_id');
	        $table->foreign('repair_id')
		        ->references('id')
		        ->on('repairs');
	        $table->integer('status_id');
	        $table->foreign('status_id')
		        ->references('id')
		        ->on('repair_statuses');
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
        Schema::dropIfExists('repair_connect_statuses');
    }
}
