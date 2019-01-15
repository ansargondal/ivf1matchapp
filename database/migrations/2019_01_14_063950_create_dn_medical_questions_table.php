<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnMedicalQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_medical_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');

            $table->boolean('injectable_last_5')->default(false);
            $table->boolean('hemophilia')->default(false);
            $table->boolean('hepatitis_contact')->default(false);
            $table->boolean('hiv')->default(false);
            $table->boolean('hepatitis')->default(false);
            $table->boolean('prison')->default(false);
            $table->boolean('tattoo')->default(false);
            $table->boolean('smallpox_vaccine')->default(false);
            $table->boolean('smallpox_contact')->default(false);
            $table->boolean('smallpox')->default(false);
            $table->boolean('west_nile_virus')->default(false);
            $table->boolean('syphilis')->default(false);
            $table->boolean('gonorrhea')->default(false);
            $table->boolean('transfusion')->default(false);
            $table->string('transfusion_date', 15)->nullable();
            $table->boolean('donor_rejection')->default(false);
            $table->string('rejection_reason', 255)->nullable();
            $table->boolean('transplant')->default(false);
            $table->boolean('transplant_contact')->default(false);
            $table->boolean('african_countries')->default(false);
            $table->boolean('african_transfusion')->default(false);
            $table->boolean('zika_virus_1')->default(false);
            $table->boolean('zika_virus_2')->default(false);
            $table->boolean('zika_virus_3')->default(false);
            $table->boolean('zika_virus_4')->default(false);


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
        Schema::dropIfExists('dn_medical_questions');
    }
}
