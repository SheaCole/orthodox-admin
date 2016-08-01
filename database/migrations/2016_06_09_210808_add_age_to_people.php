<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAgeToPeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('people', function($table) {
            $table->integer('age')->after('last_name');
        });
    }

    public function down()
    {
        Schema::table('people', function($table) {
            $table->dropColumn('age');
        });
    }
}
