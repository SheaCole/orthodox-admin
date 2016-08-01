<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToPeople extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('people', function($table) {
            $table->string('slug')->after('last_name');
        });
    }

    public function down()
    {
        Schema::table('people', function($table) {
            $table->dropColumn('slug');
        });
    }
}
