<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnS2SupplimentListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_s2_suppliment_list', function (Blueprint $table) {
            $table->unsignedInteger('medical_history_id');

            $table->string('non_prescription', 30)->nullable();
            $table->string('non_how_often', 30)->nullable();
            $table->string('non_reason', 255)->nullable();
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
        Schema::dropIfExists('dn_s2_suppliment_list');
    }
}
