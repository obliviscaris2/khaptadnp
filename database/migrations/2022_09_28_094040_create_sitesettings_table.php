<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitesettings', function (Blueprint $table) {
            $table->id();
            $table->string('gov_name')->nullable();
            $table->string('min_name')->nullable();
            $table->string('dep_name')->nullable();
            $table->string('title');
            $table->bigInteger('phone');
            $table->string('address');
            $table->string('email');
            $table->bigInteger('fax');
            $table->string('main_logo');
            $table->string('side_logo')->nullable();
            $table->string('face_link')->nullable();
            $table->string('insta_link')->nullable();
            $table->string('twitter')->nullable();
            $table->longText('google_maps')->nullable();
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
        Schema::dropIfExists('sitesettings');
    }
};
