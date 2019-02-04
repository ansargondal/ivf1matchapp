<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnEductionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_education', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->boolean('attended_school')->default(false);
            $table->boolean('graduated_school')->nullable()->default(false);
            $table->boolean('attended_college')->default(false);
            $table->boolean('attending_college')->nullable()->default(false);
            $table->string('college_major', 70)->nullable()->nullable();
            $table->boolean('have_graduate_degree')->nullable()->default(false);
            $table->string('graduate_degree', 70)->nullable();
            $table->boolean('have_post_graduate_degree')->nullable()->default(false);
            $table->string('post_graduate_degree', 70)->nullable();
            $table->boolean('have_other')->nullable()->default(false);
            $table->string('other', 70)->nullable()->nullable();
            $table->string('num_languages', 20)->nullable();
            $table->string('languages', 200)->nullable();
            $table->string('musical_talent', 200)->nullable();
            $table->string('art_talent', 200)->nullable();
            $table->string('athletic_talent', 200)->nullable();
            $table->string('hobbies', 200)->nullable();
            $table->tinyInteger('occupation_type')->nullable()->default(3);
            $table->string('occupation', 60)->nullable();


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
        Schema::dropIfExists('dn_eduction');
    }
}
