<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnS3ChromosomalAbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_s3_chromosomal_ab', function (Blueprint $table) {

            $table->unsignedInteger('medical_abnormality_id');

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
        Schema::dropIfExists('dn_s3_chromosomal_ab');
    }
}
