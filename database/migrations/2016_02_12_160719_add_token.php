<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToken extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('register', function (Blueprint $table)
       {
         $table->rememberToken();

     });
       
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('register', function (Blueprint $table)
       {
         $table->droprememberToken();

     });
       
    }
}
