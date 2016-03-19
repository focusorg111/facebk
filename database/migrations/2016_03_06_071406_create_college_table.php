<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college', function (Blueprint $table) {
            $table->increments('college_id');
            $table->integer('user_id')->unsigned();
            $table->string('college_name',100);
            $table->tinyInteger('passing_year');
            $table->string('course',100);
            $table->timestamps();

            $table->foreign('user_id')
                ->references('user_id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college', function (Blueprint $table) {
            $table->dropForeign('college_user_id_foreign');

        });
                Schema::drop('college');

    }
}
