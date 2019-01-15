<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnPregnancyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_pregnancy', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('pregnancy_history', 50);


            $table->boolean('delivered_baby_1')->default(false);
            $table->string('delivery_year_1')->nullable();
            $table->string('baby_gender_1')->nullable();
            $table->string('baby_problems_1')->nullable();
            $table->string('pregnancy_end_1')->nullable();


            $table->boolean('delivered_baby_2')->default(false);
            $table->string('delivery_year_2')->nullable();
            $table->string('baby_gender_2')->nullable();
            $table->string('baby_problems_2')->nullable();
            $table->string('pregnancy_end_2')->nullable();


            $table->boolean('delivered_baby_3')->default(false);
            $table->string('delivery_year_3')->nullable();
            $table->string('baby_gender_3')->nullable();
            $table->string('baby_problems_3')->nullable();
            $table->string('pregnancy_end_3')->nullable();


            $table->boolean('delivered_baby_4')->default(false);
            $table->string('delivery_year_4')->nullable();
            $table->string('baby_gender_4')->nullable();
            $table->string('baby_problems_4')->nullable();
            $table->string('pregnancy_end_4')->nullable();


            $table->string('first_period', 5);
            $table->string('bleeding_begins', 5);
            $table->string('bleeding_ends', 5);
            $table->string('bleeding_lasts_from', 5);
            $table->string('bleeding_lasts_to', 5);
            $table->boolean('pelvic_exam')->default(false);
            $table->boolean('abnormal_pap')->default(false)->nullable();
            $table->string('last_pap_date', 15)->nullable();
            $table->boolean('pregnancy_issues')->default(false);
            $table->boolean('bleeding_between')->default(false);
            $table->boolean('bleeding_after')->default(false);
            $table->string('pills', 10);
            $table->string('ortho_evra', 10);
            $table->string('depo_provera', 10);
            $table->string('norplant', 10);
            $table->string('iud', 10);
            $table->string('tubal_ligation', 10);
            $table->string('condoms', 10);


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
        Schema::dropIfExists('dn_pregnancy');
    }
}
