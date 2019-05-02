<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnMedicalAbnormalityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_medical_abnormality', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');


            $table->boolean('cleft_lip');
            $table->boolean('cleft_lip_family');
            $table->string('cleft_lip_comment', 70)->nullable();

            $table->boolean('cleft_palate');
            $table->boolean('cleft_palate_family');
            $table->string('cleft_palate_comment', 70)->nullable();

            $table->boolean('hip_dislocation');
            $table->boolean('hip_dislocation_family');
            $table->string('hip_dislocation_comment',70)->nullable();

            $table->boolean('clubfoot');
            $table->boolean('clubfoot_family');
            $table->string('clubfoot_comment', 70)->nullable();

            $table->boolean('heart_defect');
            $table->boolean('heart_defect_family');
            $table->string('heart_defect_comment', 70)->nullable();

            $table->boolean('hearing_issue');
            $table->boolean('hearing_issue_family');
            $table->string('hearing_issue_comment', 70)->nullable();


            $table->boolean('spina_bifida');
            $table->boolean('spina_bifida_family');
            $table->string('spina_bifida_comment', 70)->nullable();

            $table->boolean('microcephaly');
            $table->boolean('microcephaly_family');
            $table->string('microcephaly_comment', 70)->nullable();

            $table->boolean('holoprosencephaly');
            $table->boolean('holoprosencephaly_family');
            $table->string('holoprosencephaly_comment', 70)->nullable();

            $table->boolean('death_at_birth');
            $table->boolean('death_at_birth_family');
            $table->string('death_at_birth_comment', 70)->nullable();

            $table->boolean('dwarfism');
            $table->boolean('dwarfism_family');
            $table->string('dwarfism_comment', 70)->nullable();

            $table->boolean('hypospadias');
            $table->boolean('hypospadias_family');
            $table->string('hypospadias_comment', 70)->nullable();


            //phenylketonuria
            $table->boolean('pheny');
            $table->boolean('pheny_family');
            $table->string('pheny_comment', 70)->nullable();

            //polycystic kidney
            $table->boolean('polycystic');
            $table->boolean('polycystic_family');
            $table->string('polycystic_comment', 70)->nullable();

            //pyloric stenosis
            $table->boolean('pyloric');
            $table->boolean('pyloric_family');
            $table->string('pyloric_comment', 70)->nullable();

            //other congenital
            $table->boolean('other_congenital');
            $table->boolean('other_congenital_family');
            $table->string('other_congenital_comment', 70)->nullable();



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
        Schema::dropIfExists('dn_medical_abnormality');
    }
}
