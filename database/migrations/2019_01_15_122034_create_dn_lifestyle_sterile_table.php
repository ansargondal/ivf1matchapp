<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnLifestyleSterileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dn_lifestyle_sterile', function (Blueprint $table) {
            $table->unsignedInteger('lifestyle_id');

            $table->string('tattoo', 20)->nullable();
            $table->string('tattoo_date', 20)->nullable();
            $table->string('tattoo_location', 150)->nullable();
            $table->boolean('sterile_used')->default(0);

            $table->foreign('lifestyle_id')
                ->references('id')->on('dn_lifestyle')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dn_lifestyle_sterile');
    }
}
