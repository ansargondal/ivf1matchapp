<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnSexualHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_sexual_history', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('martial_status', 15);
            $table->string('living_arrangement', 60);
            $table->string('partners_1_month', 25);
            $table->string('partners_6_months', 25);
            $table->string('partners_5_years', 25);
            $table->boolean('q1')->default(false);
            $table->boolean('q2')->default(false);
            $table->boolean('q3')->default(false);
            $table->boolean('q4')->default(false);
            $table->boolean('q5')->default(false);
            $table->boolean('q6')->default(false);
            $table->boolean('q7')->default(false);
            $table->boolean('q8')->default(false);
            $table->string('orientation', 200);
            $table->boolean('c_vaginal')->default(false);
            $table->boolean('c_oral')->default(false);
            $table->boolean('c_anal')->default(false);
            $table->boolean('c_oral_received')->default(false);
            $table->boolean('c_group')->default(false);
            $table->boolean('p_vaginal')->default(false);
            $table->boolean('p_oral')->default(false);
            $table->boolean('p_anal')->default(false);
            $table->boolean('p_oral_received')->default(false);
            $table->boolean('p_group')->default(false);

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dn_sexual_history');
    }
}
