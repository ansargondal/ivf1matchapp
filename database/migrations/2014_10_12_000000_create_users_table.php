<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 20)->nullable();
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('status')->nullable()->default('new')->index();
            $table->string('cycle')->nullable()->default('Available')->index();
            $table->text('notes')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dn_education');
        Schema::dropIfExists('users');
    }
}
