<?php

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
        Schema::create('akatsuki_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('Position');
            $table->string('Secret_Jutsu');
            $table->string('Parner');
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
        Schema::drop('akatsuki_tables');
    }
}
