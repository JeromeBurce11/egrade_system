<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHuman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('humans',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('first_name',255);
            $table->string('middle_name',255);
            $table->string('last_name',255);
            $table->string('email',255)->unique();
            $table->integer('age',11);
            $table->string('gender',255);
            $table->string('address',255);
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
        //
    }
}
