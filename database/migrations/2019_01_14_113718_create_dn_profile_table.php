<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('age', 50);
            $table->string('height', 10);
            $table->string('weight', 30);
            $table->string('race', 50);
            $table->string('mother', 150);
            $table->string('mothers_mother', 150);
            $table->string('mothers_father', 150);
            $table->string('father', 150);
            $table->string('fathers_mother', 150);
            $table->string('fathers_father', 150);
            $table->string('religion', 200);
            $table->boolean('adopted');
            $table->boolean('weight_change');
            $table->string('amount_lost', 100)->nullable();
            $table->string('dexterity', 20);
            $table->string('bones', 20);
            $table->string('complexion', 20);
            $table->string('tan', 20);
            $table->string('skin', 20);
            $table->string('dimples', 20);
            $table->string('eye_color', 20);
            $table->string('eye_set', 10); //missing
            $table->string('eye_size', 10);
            $table->string('eye_shape', 10);
            $table->string('hair_color', 20);
            $table->string('hair_type', 20);
            $table->string('hair_texture', 20);
            $table->string('hair_fullness', 20);
            $table->boolean('baldness');
            $table->boolean('baldness_family');
            $table->boolean('graying');
            $table->string('graying_age', 80)->nullable();
            $table->string('body_facial_features', 20);
            $table->string('teeth', 20);
            $table->boolean('orthodontic_work');
            $table->string('orthodontic_age', 80)->nullable();
            $table->string('hearing', 20);
            $table->string('vision', 20);
            $table->string('vision_prescription', 255)->nullable();
            $table->boolean('glasses');

            $table->string('vision_problem', 80)->nullable();
            $table->boolean('stigmatism');
            $table->string('stigmatism_age', 80)->nullable();
            $table->boolean('donated');
            $table->string('number_of_donations', 10)->nullable();
            $table->longText('personal_message');
//            $table->boolean('photo_permission')->default(false);
            $table->boolean('knows_someone')->default(false);
            $table->boolean('rewarding')->default(false);
            $table->boolean('fascinating')->default(false);
            $table->boolean('need_money')->default(false);
            $table->text('other')->nullable();

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
        Schema::dropIfExists('dn_profile');
    }
}
