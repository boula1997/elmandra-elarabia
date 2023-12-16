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
            $table->date('manYear')->nullable();
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
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
