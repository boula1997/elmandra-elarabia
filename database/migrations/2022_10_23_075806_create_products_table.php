<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->float('price')->nullable();
            $table->string('kind')->nullable();
            $table->string('suspensionType')->nullable();
            $table->bigInteger('axelsNumber')->nullable();
            $table->string('gearBox')->nullable();
            $table->string('configuration')->nullable();
            $table->string('engineCapacity')->nullable();
            $table->double('mileAge')->nullable();
            $table->string('number')->nullable();
            // $table->date('manYear')->nullable();
            // new
            $table->string('promotions')->nullable();
            $table->string('emission_code')->nullable();
            $table->string('fuel_type')->nullable();
            $table->boolean('damaged')->nullable();
            // $table->boolean('dutch_trucks')->nullable();
            $table->boolean('used_car')->default(0);
            // new
            $table->string('model_year')->nullable();
            $table->string('model')->nullable();
            // $table->string('driving_type')->nullable();
            $table->string('engine')->nullable();
            $table->string('wheelbase')->nullable();
            $table->string('cab')->nullable();
            $table->string('steering')->nullable();
            $table->string('transmission')->nullable();
            $table->string('rear_axles')->nullable();
            $table->string('frame')->nullable();
            $table->string('gcw')->nullable();
            $table->string('fuel_tanker')->nullable();
            $table->string('tires')->nullable();
            $table->string('battery')->nullable();
            $table->string('oversize')->nullable();
            $table->string('color')->nullable();

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
