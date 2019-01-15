<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnMedicalHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_medical_history', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');

            $table->boolean('vaccinated')->default(false);
            $table->string('vaccinated_for', 255);

            $table->string('problem_1', 30)->nullable();
            $table->string('age_1', 10)->nullable();
            $table->string('comment_1', 255)->nullable();

            $table->string('problem_2', 30)->nullable();
            $table->string('age_2', 10)->nullable();
            $table->string('comment_2', 255)->nullable();

            $table->string('problem_3', 30)->nullable();
            $table->string('age_3', 10)->nullable();
            $table->string('comment_3', 255)->nullable();

            $table->string('problem_4', 30)->nullable();
            $table->string('age_4', 10)->nullable();
            $table->string('comment_4', 255)->nullable();

            $table->string('problem_5', 30)->nullable();
            $table->string('age_5', 10)->nullable();
            $table->string('comment_5', 255)->nullable();

            $table->string('surgery_type_1', 30)->nullable();
            $table->string('surgery_date_1', 30)->nullable();
            $table->string('complications_1', 255)->nullable();

            $table->string('surgery_type_2', 30)->nullable();
            $table->string('surgery_date_2', 30)->nullable();
            $table->string('complications_2', 255)->nullable();

            $table->string('surgery_type_3', 30)->nullable();
            $table->string('surgery_date_3', 30)->nullable();
            $table->string('complications_3', 255)->nullable();


            $table->string('surgery_type_4', 30)->nullable();
            $table->string('surgery_date_4', 30)->nullable();
            $table->string('complications_4', 255)->nullable();

            $table->string('surgery_type_5', 30)->nullable();
            $table->string('surgery_date_5', 30)->nullable();
            $table->string('complications_5', 255)->nullable();

            $table->string('prescription_1', 30)->nullable();
            $table->string('how_often_1', 30)->nullable();
            $table->string('reason_1', 255)->nullable();

            $table->string('prescription_2', 30)->nullable();
            $table->string('how_often_2', 30)->nullable();
            $table->string('reason_2', 255)->nullable();

            $table->string('prescription_3', 30)->nullable();
            $table->string('how_often_3', 30)->nullable();
            $table->string('reason_3', 255)->nullable();

            $table->string('prescription_4', 30)->nullable();
            $table->string('how_often_4', 30)->nullable();
            $table->string('reason_4', 255)->nullable();

            $table->string('prescription_5', 30)->nullable();
            $table->string('how_often_5', 30)->nullable();
            $table->string('reason_5', 255)->nullable();

            $table->string('non_prescription_1', 30)->nullable();
            $table->string('non_how_often_1', 30)->nullable();
            $table->string('non_reason_1', 255)->nullable();

            $table->string('non_prescription_2', 30)->nullable();
            $table->string('non_how_often_2', 30)->nullable();
            $table->string('non_reason_2', 255)->nullable();

            $table->string('non_prescription_3', 30)->nullable();
            $table->string('non_how_often_3', 30)->nullable();
            $table->string('non_reason_3', 255)->nullable();

            $table->string('non_prescription_4', 30)->nullable();
            $table->string('non_how_often_4', 30)->nullable();
            $table->string('non_reason_4', 255)->nullable();

            $table->string('non_prescription_5', 30)->nullable();
            $table->string('non_how_often_5', 30)->nullable();
            $table->string('non_reason_5', 255)->nullable();


            $table->string('allergy_1', 30)->nullable();
            $table->string('reaction_1', 255)->nullable();

            $table->string('allergy_2', 30)->nullable();
            $table->string('reaction_2', 255)->nullable();

            $table->string('allergy_3', 30)->nullable();
            $table->string('reaction_3', 255)->nullable();

            $table->string('allergy_4', 30)->nullable();
            $table->string('reaction_4', 255)->nullable();

            $table->string('allergy_5', 30)->nullable();
            $table->string('reaction_5', 255)->nullable();


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
        Schema::dropIfExists('dn_medical_history');
    }
}
