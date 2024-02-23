<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('white_logo')->nullable();
            $table->string('tab')->nullable();
            $table->string('breadcrumb')->nullable();
            $table->text('map')->nullable();
            $table->string('image')->nullable();
            $table->text('latitude')->nullable();
            $table->text('longitude')->nullable();
            $table->double('shipping')->nullable();
            $table->double('taxes')->nullable();
            $table->boolean('used_car')->default(0);
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
        Schema::dropIfExists('settings');
    }
}
