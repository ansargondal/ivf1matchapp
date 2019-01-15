<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnMedicalProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_medical_problems', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');


            $table->string('aids', 30);
            $table->string('aids_comments', 255)->nullable();

            $table->string('herpes', 30);
            $table->string('herpes_comments', 255)->nullable();

            $table->string('gonorrhea', 30);
            $table->string('gonorrhea_comments', 255)->nullable();

            $table->string('chlamydia', 30);
            $table->string('chlamydia_comments', 255)->nullable();

            $table->string('condyloma', 30);
            $table->string('condyloma_comments', 255)->nullable();

            $table->string('syphilis', 30);
            $table->string('syphilis_comments', 255)->nullable();

            $table->string('pid', 30);
            $table->string('pid_comments', 255)->nullable();

            $table->string('hepb', 30);
            $table->string('hepb_comments', 255)->nullable();

            $table->string('hepc', 30);
            $table->string('hepc_comments', 255)->nullable();

            $table->string('tuberculosis', 30);
            $table->string('tuberculosis_comments', 255)->nullable();

            $table->string('medication_allergies', 30);
            $table->string('medication_allergies_comments', 255)->nullable();

            $table->string('latex_allergies', 30);
            $table->string('latex_allergies_comments', 255)->nullable();

            $table->string('previous_surgery', 30);
            $table->string('previous_surgery_comments', 255)->nullable();

            $table->boolean('emotional_problems');
            $table->boolean('psychologist');
            $table->boolean('anti_depressants');
            $table->text('psychological_comments');

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
        Schema::dropIfExists('dn_medical_problems');
    }
}
