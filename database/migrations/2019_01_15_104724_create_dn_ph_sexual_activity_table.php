<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnPhSexualActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_ph_sexual_activity', function (Blueprint $table) {
            $table->unsignedTinyInteger('id');
            $table->unsignedInteger('pregnancy_id');

            $table->boolean('delivered_baby')->default(false);
            $table->string('delivery_year')->nullable();
            $table->string('baby_gender')->nullable();
            $table->string('baby_problems')->nullable();
            $table->string('pregnancy_end')->nullable();

            $table->foreign('pregnancy_id')
                ->references('id')->on('dn_pregnancy')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dn_ph_sexual_activity');
    }
}
