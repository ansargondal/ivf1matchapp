<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDnS2AllergyListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_s2_allergy_list', function (Blueprint $table) {
            $table->unsignedInteger('medical_history_id');

            $table->string('allergy', 30)->nullable();
            $table->string('reaction', 255)->nullable();

            $table->foreign('medical_history_id')
                ->references('id')->on('dn_medical_history')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dn_s2_allergy_list');
    }
}
