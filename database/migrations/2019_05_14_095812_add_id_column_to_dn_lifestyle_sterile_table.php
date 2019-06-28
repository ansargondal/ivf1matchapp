<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdColumnToDnLifestyleSterileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dn_lifestyle_sterile', function (Blueprint $table) {
            $table->unsignedTinyInteger('id')->first();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dn_lifestyle_sterile', function (Blueprint $table) {
            $table->dropColumn('id');
        });
    }
}
