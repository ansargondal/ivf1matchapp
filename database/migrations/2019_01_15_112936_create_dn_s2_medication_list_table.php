<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnS2MedicationListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_s2_medication_list', function (Blueprint $table) {
            $table->unsignedInteger('medical_history_id');

            $table->string('prescription', 30)->nullable();
            $table->string('how_often', 30)->nullable();
            $table->string('reason', 255)->nullable();

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
        Schema::dropIfExists('dn_s2_medication_list');
    }
}
