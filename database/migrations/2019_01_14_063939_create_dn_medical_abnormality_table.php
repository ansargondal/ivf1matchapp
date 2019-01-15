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


            /***
             * chromosomal Abnormalities
             * **/
            $table->boolean('downs');
            $table->boolean('downs_family');
            $table->string('downs_comment', 70)->nullable();

            $table->boolean('fragile_x');
            $table->boolean('fragile_x_family');
            $table->string('fragile_x_comment', 70)->nullable();

            $table->boolean('turner');
            $table->boolean('turner_family');
            $table->string('turner_comment', 70)->nullable();

            $table->boolean('klinefelter');
            $table->boolean('klinefelter_family');
            $table->string('klinefelter_comment', 70)->nullable();

            $table->boolean('other_abnormality');
            $table->boolean('other_abnormality_family');
            $table->string('other_abnormality_comment', 70)->nullable();

            /***
             *  Genetic Abnormalities
             * **/
            $table->boolean('alpha_1');
            $table->boolean('alpha_1_family');
            $table->string('alpha_1_comment', 70)->nullable();

            $table->boolean('bloom');
            $table->boolean('bloom_family');
            $table->string('bloom_comment', 70)->nullable();

            $table->boolean('canavan');
            $table->boolean('canavan_family');
            $table->string('canavan_comment', 70)->nullable();

            $table->boolean('cystic_fibrosis');
            $table->boolean('cystic_fibrosis_family');
            $table->string('cystic_fibrosis_comment', 70)->nullable();

            $table->boolean('fabry');
            $table->boolean('fabry_family');
            $table->string('fabry_comment', 70)->nullable();

            $table->boolean('factor_v');
            $table->boolean('factor_v_family');
            $table->string('factor_v_comment', 70)->nullable();

            $table->boolean('familial_dis');
            $table->boolean('familial_dis_family');
            $table->string('familial_dis_comment', 70)->nullable();

            $table->boolean('familial_med');
            $table->boolean('familial_med_family');
            $table->string('familial_med_comment', 70)->nullable();

            $table->boolean('fanconi');
            $table->boolean('fanconi_family');
            $table->string('fanconi_comment', 70)->nullable();

            $table->boolean('hemophilia');
            $table->boolean('hemophilia_family');
            $table->string('hemophilia_comment', 70, 70)->nullable();

            $table->boolean('marfan');
            $table->boolean('marfan_family');
            $table->string('marfan_comment')->nullable();

            $table->boolean('mucolipidosis4');
            $table->boolean('mucolipidosis4_family');
            $table->string('mucolipidosis4_comment', 70, 70)->nullable();

            $table->boolean('niemann_pick');
            $table->boolean('niemann_pick_family');
            $table->string('niemann_pick_comment', 70, 70)->nullable();

            $table->boolean('sickle_cell');
            $table->boolean('sickle_cell_family');
            $table->string('sickle_cell_comment', 70, 70)->nullable();

            $table->boolean('tay_sachs');
            $table->boolean('tay_sachs_family');
            $table->string('tay_sachs_comment', 70, 70)->nullable();

            $table->boolean('thallasemia');
            $table->boolean('thallasemia_family');
            $table->string('thallasemia_comment', 70, 70)->nullable();

            $table->boolean('blindness');
            $table->boolean('blindness_family');
            $table->string('blindness_comment', 70, 70)->nullable();

            $table->boolean('color_blind');
            $table->boolean('color_blind_family');
            $table->string('color_blind_comment', 70, 70)->nullable();

            $table->boolean('deafness');
            $table->boolean('deafness_family');
            $table->string('deafness_comment', 70, 70)->nullable();

            $table->boolean('albinism');
            $table->boolean('albinism_family');
            $table->string('albinism_comment', 70)->nullable();


            $table->boolean('muscular_dystrophy');
            $table->boolean('muscular_dystrophy_family');
            $table->string('muscular_dystrophy_comment', 70)->nullable();

            $table->boolean('galactosemia');
            $table->boolean('galactosemia_family');
            $table->string('galactosemia_comment', 70)->nullable();

            $table->boolean('hurlers');
            $table->boolean('hurlers_family');
            $table->string('hurlers_comment', 70)->nullable();

            $table->boolean('other_genetic');
            $table->boolean('other_genetic_family');
            $table->string('other_genetic_comment', 70)->nullable();

            /***
             *  Cancer
             * **/

            $table->boolean('breast');
            $table->boolean('breast_family');
            $table->string('breast_comment', 70)->nullable();

            $table->boolean('colon');
            $table->boolean('colon_family');
            $table->string('colon_comment', 70)->nullable();

            $table->boolean('hnpcc');
            $table->boolean('hnpcc_family');
            $table->string('hnpcc_comment', 70)->nullable();

            $table->boolean('ovarian');
            $table->boolean('ovarian_family');
            $table->string('ovarian_comment', 70)->nullable();

            $table->boolean('other_cancer');
            $table->boolean('other_cancer_family');
            $table->string('other_cancer_comment', 70)->nullable();


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
