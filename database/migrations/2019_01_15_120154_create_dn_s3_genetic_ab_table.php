<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnS3GeneticAbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_s3_genetic_ab', function (Blueprint $table) {
            $table->unsignedInteger('medical_abnormality_id');


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
        Schema::dropIfExists('dn_s3_genetic_ab');
    }
}
