<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();

            $table->tinyInteger('age');
            $table->string('height');
            $table->string('weight');
            $table->string('race');
            $table->string('mother');
            $table->string('mothers_mother');
            $table->string('mothers_father');
            $table->string('father');
            $table->string('fathers_mother');
            $table->string('fathers_father');
            $table->string('religion');
            $table->boolean('adopted');
            $table->boolean('weight_change');
            $table->string('amount_lost');
            $table->string('dexterity');
            $table->string('bones');
            $table->string('complexion');
            $table->string('tan');
            $table->string('skin');
            $table->string('dimples');
            $table->string('eye_color');
            $table->string('eye_set');
            $table->string('eye_size');
            $table->string('eye_shape');
            $table->string('hair_color');
            $table->string('hair_type');
            $table->string('hair_texture');
            $table->string('hair_fullness');
            $table->boolean('baldness');
            $table->boolean('baldness_family');
            $table->boolean('graying');
            $table->string('graying_age');
            $table->string('body_facial_features');
            $table->string('teeth');
            $table->boolean('orthodontic_work');
            $table->string('orthodontic_age');
            $table->string('hearing');
            $table->string('vision');
            $table->string('vision_prescription');
            $table->boolean('glasses');
            $table->string('vision_problem');
            $table->string('vision_problem_mother');
            $table->boolean('stigmatism');
            $table->string('stigmatism_age');
            $table->boolean('donated');
            $table->string('number_of_donations');
            $table->longText('personal_message');
            $table->boolean('photo_permission');
            $table->boolean('knows_someone');
            $table->boolean('rewarding');
            $table->boolean('fascinating');
            $table->boolean('need_money');
            $table->text('other');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('profiles');
    }
}
