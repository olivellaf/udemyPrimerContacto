<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldFruits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Update fruits table
        /*
        Schema::table('fruits', function(Blueprint $table ) {
           $table->string('country')->after('season'); // we add a new column
           $table->renameColumn('name', 'name2'); // rename column -- https://laravel.com/docs/8.x/migrations#renaming-and-dropping-tables
        });
        */

        // We also can create a query statement
        DB::statement('
            CREATE TABLE testingsql(
                id int(255) auto_increment not null,
                publication int(255),
                PRIMARY KEY(id)
            );
        ');
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
