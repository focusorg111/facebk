<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('employee_id');
            $table->integer('user_id')->unsigned();
            $table->string('current_employee',100);
            $table->tinyInteger('working_since');
            $table->string('designation',100);
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
        Schema::table('employee', function (Blueprint $table) {
            $table->dropForeign('employee_user_id_foreign');

        });
        Schema::drop('employee');
    }
}
