<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('fname', 30);
            $table->string('lname', 30);
            $table->string('dob', 15);
            $table->string('home', 20)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('work', 20)->nullable();
            $table->string('street', 100);
            $table->string('city', 40);
            $table->string('state', 20);
            $table->string('zip', 10);
            $table->string('donation_for', 50)->nullable();
            $table->string('agency_name', 50)->nullable();
            $table->string('donation_date', 20)->nullable();


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
        Schema::dropIfExists('dn_contacts');
    }
}
