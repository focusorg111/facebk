<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsInUsertable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table)
        {
            $table->string('first_name',100)->nullable();
            $table->string('last_name',100)->nullable();
            $table->string('display_name',100)->nullable();
            $table->string('marital_status',100)->nullable();
            $table->date('date_of_birth',100)->nullable();
            $table->string('hometown',100)->nullable();
            $table->string('current_location',100)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table)
        {

            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('display_name');
            $table->dropColumn('marital_status');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('hometown');
            $table->dropColumn('current_location');


        });
    }
}
