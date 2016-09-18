<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function(Blueprint $table){

            $table->increments('id');
            $table->string('description');
            $table->string('code')->nullable();
            $table->string('token')->nullable();
            $table->string('comment')->nullable();
            $table->enum('type', array('paid', 'free'))->default('paid');
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
        Schema::drop('repairs');
    }
}
