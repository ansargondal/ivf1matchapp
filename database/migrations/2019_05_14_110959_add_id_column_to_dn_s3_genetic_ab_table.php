<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdColumnToDnS3GeneticAbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dn_s3_genetic_ab', function (Blueprint $table) {

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
        Schema::table('dn_s3_genetic_ab', function (Blueprint $table) {

            $table->dropColumn('id');


        });
    }
}
