<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnS3CancerAbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_s3_cancer_ab', function (Blueprint $table) {
            $table->unsignedInteger('medical_abnormality_id');


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
        Schema::dropIfExists('dn_s3_cancer_ab');
    }
}
