<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobies', function (Blueprint $table) {
            $table->increments('hobie_id');
            $table->integer('user_id')->unsigned();
            $table->string('option_1',100);
            $table->string('option_2',100);
            $table->string('option_3',100);
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
        Schema::table('hobies', function (Blueprint $table) {
            $table->dropForeign('hobies_user_id_foreign');

        });
        Schema::drop('hobies');
    }
}
