<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnS3NeurologicAbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_s3_neurologic_ab', function (Blueprint $table) {
            $table->unsignedInteger('medical_abnormality_id');


            /***
             *  Neuralgic
             * **/

            $table->boolean('alzhemers');
            $table->boolean('alzhemers_family');
            $table->string('alzhemers_comment', 70)->nullable();

            $table->boolean('autism');
            $table->boolean('autism_family');
            $table->string('autism_comment', 70)->nullable();

            $table->boolean('cerebral_palsy');
            $table->boolean('cerebral_palsy_family');
            $table->string('cerebral_palsy_comment', 70)->nullable();

            $table->boolean('creultzfeldt');
            $table->boolean('creultzfeldt_family');
            $table->string('creultzfeldt_comment', 70)->nullable();

            $table->boolean('depression');
            $table->boolean('depression_family');
            $table->string('depression_comment', 70)->nullable();

            $table->boolean('gauchers');
            $table->boolean('gauchers_family');
            $table->string('gauchers_comment', 70)->nullable();

            $table->boolean('huntingtons');
            $table->boolean('huntingtons_family');
            $table->string('huntingtons_comment', 70)->nullable();

            $table->boolean('hydrocephalus');
            $table->boolean('hydrocephalus_family');
            $table->string('hydrocephalus_comment', 70)->nullable();

            $table->boolean('obsessive');
            $table->boolean('obsessive_family');
            $table->string('obsessive_comment', 70)->nullable();

            $table->boolean('mania');
            $table->boolean('mania_family');
            $table->string('mania_comment', 70)->nullable();

            $table->boolean('retardation');
            $table->boolean('retardation_family');
            $table->string('retardation_comment', 70)->nullable();

            $table->boolean('neurofibromatosis');
            $table->boolean('neurofibromatosis_family');
            $table->string('neurofibromatosis_comment', 70)->nullable();

            $table->boolean('schizophrenia');
            $table->boolean('schizophrenia_family');
            $table->string('schizophrenia_comment', 70)->nullable();

            $table->boolean('tourette');
            $table->boolean('tourette_family');
            $table->string('tourette_comment', 70)->nullable();

            $table->boolean('tuberous');
            $table->boolean('tuberous_family');
            $table->string('tuberous_comment', 70)->nullable();

            $table->boolean('wilsons');
            $table->boolean('wilsons_family');
            $table->string('wilsons_comment', 70)->nullable();

            $table->boolean('multiple_sclerosis');
            $table->boolean('multiple_sclerosis_family');
            $table->string('multiple_sclerosis_comment', 70)->nullable();

            $table->boolean('parkinsons');
            $table->boolean('parkinsons_family');
            $table->string('parkinsons_comment', 70)->nullable();

            $table->boolean('lougehrigs');
            $table->boolean('lougehrigs_family');
            $table->string('lougehrigs_comment', 70)->nullable();

            $table->boolean('other_neurologic');
            $table->boolean('other_neurologic_family');
            $table->string('other_neurologic_comment', 70)->nullable();

            $table->boolean('diabetes');
            $table->boolean('diabetes_family');
            $table->string('diabetes_comment', 70)->nullable();

            $table->boolean('heart_disease');
            $table->boolean('heart_disease_family');
            $table->string('heart_disease_comment', 70)->nullable();

            $table->boolean('high_bp');
            $table->boolean('high_bp_family');
            $table->string('high_bp_comment', 70)->nullable();

            $table->boolean('asthma');
            $table->boolean('asthma_family');
            $table->string('asthma_comment', 70)->nullable();

            $table->boolean('lupus');
            $table->boolean('lupus_family');
            $table->string('lupus_comment', 70)->nullable();

            $table->boolean('obesity');
            $table->boolean('obesity_family');
            $table->string('obesity_comment', 70)->nullable();

            $table->boolean('alcoholism');
            $table->boolean('alcoholism_family');
            $table->string('alcoholism_comment', 70)->nullable();

            $table->boolean('infertility');
            $table->boolean('infertility_family');
            $table->string('infertility_comment', 70)->nullable();

            $table->boolean('miscarriage');
            $table->boolean('miscarriage_family');
            $table->string('miscarriage_comment', 70)->nullable();

            $table->boolean('endometriosis');
            $table->boolean('endometriosis_family');
            $table->string('endometriosis_comment', 70)->nullable();

            $table->boolean('polycystic_ovary');
            $table->boolean('polycystic_ovary_family');
            $table->string('polycystic_ovary_comment', 70)->nullable();

            $table->boolean('uterine_fibroids');
            $table->boolean('uterine_fibroids_family');
            $table->string('uterine_fibroids_comment', 70)->nullable();

            $table->foreign('medical_abnormality_id')
                ->references('id')->on('dn_medical_abnormality')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dn_s3_neurologic_ab');
    }
}
