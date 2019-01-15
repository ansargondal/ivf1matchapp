<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnLifestyleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_lifestyle', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');

            $table->string('exercise_routine', 15);
            $table->string('exercise_type', 50);
            $table->string('diet_type', 15);
            $table->string('diet_quality', 15);
            $table->string('diet_restrictions', 100)->nullable();
            $table->string('tobacco', 10);
            $table->string('tobacco_amount', 50)->nullable();
            $table->string('alcohol', 15);
            $table->string('alcohol_amount', 50)->nullable();
            $table->string('marijuana', 15);
            $table->string('marijuana_amount', 50)->nullable();
            $table->string('heroin', 15);
            $table->string('heroin_amount', 50)->nullable();
            $table->string('cocaine', 15);
            $table->string('cocaine_amount', 50)->nullable();

            $table->string('meth', 15);
            $table->string('meth_amount', 50)->nullable();

            $table->string('lsd', 15);
            $table->string('lsd_amount', 50)->nullable();
            $table->string('pcp', 15);
            $table->string('pcp_amount', 50)->nullable();
            $table->string('injectable_drug', 15);
            $table->string('injectable_amount', 50)->nullable();

            $table->boolean('law_trouble')->default(false);
            $table->boolean('arrested')->default(false);
            $table->string('arrest_reason', 200)->nullable();
            $table->boolean('convicted')->default(false);
            $table->string('convicted_crimes', 200)->nullable();

            $table->boolean('hour_jail')->default(false);
            $table->boolean('three_days_jail')->default(false);

            $table->string('tattoo_1', 20)->nullable();
            $table->string('tattoo_date_1', 20)->nullable();
            $table->string('tattoo_location_1', 60)->nullable();
            $table->string('sterile_used_1', 60)->nullable();

            $table->string('tattoo_2', 20)->nullable();
            $table->string('tattoo_date_2', 20)->nullable();
            $table->string('tattoo_location_2', 60)->nullable();
            $table->string('sterile_used_2', 60)->nullable();

            $table->string('tattoo_3', 20)->nullable();
            $table->string('tattoo_date_3', 20)->nullable();
            $table->string('tattoo_location_3', 60)->nullable();
            $table->string('sterile_used_3', 60)->nullable();

            $table->string('tattoo_4', 20)->nullable();
            $table->string('tattoo_date_4', 20)->nullable();
            $table->string('tattoo_location_4', 60)->nullable();
            $table->string('sterile_used_4', 60)->nullable();

            $table->string('tattoo_5', 20)->nullable();
            $table->string('tattoo_date_5', 20)->nullable();
            $table->string('tattoo_location_5', 60)->nullable();
            $table->string('sterile_used_5', 60)->nullable();


            $table->boolean('cjd')->default(false);
            $table->boolean('dementia')->default(false);
            $table->boolean('dura_mater')->default(false);
            $table->boolean('human_gh')->default(false);
            $table->boolean('cjd_family')->default(false);
            $table->boolean('visit_uk')->default(false);
            $table->boolean('military_member')->default(false);
            $table->boolean('lived_europe')->default(false);
            $table->boolean('blood_uk')->default(false);

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
        Schema::dropIfExists('dn_lifestyle');
    }
}
