<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdColumnToDnS2AllergyListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dn_s2_allergy_list', function (Blueprint $table) {

            $table->increments('id')->first();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dn_s2_allergy_list', function (Blueprint $table) {

            $table->dropColumn('id');

        });
    }
}
