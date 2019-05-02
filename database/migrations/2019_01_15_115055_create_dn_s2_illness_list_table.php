<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnS2IllnessListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_s2_illness_list', function (Blueprint $table) {
            $table->unsignedInteger('medical_history_id');
            $table->string('problem', 100)->nullable();
            $table->string('age', 20)->nullable();
            $table->text('comment')->nullable();

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
        Schema::dropIfExists('dn_s2_illness_list');
    }
}
