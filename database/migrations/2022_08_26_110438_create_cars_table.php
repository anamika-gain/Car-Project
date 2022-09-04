<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('brand_id')->unsigned();
            $table->integer('model_id')->unsigned();
            $table->string('car_name');
            $table->string('image')->default('default.png');
            $table->decimal('price', $precision = 8, $scale = 2);
            $table->text('description');
            $table->foreign('brand_id')
                ->references('id')->on('brands')
                ->onDelete('cascade');
            $table->foreign('model_id')
                ->references('id')->on('car_models')
                ->onDelete('cascade');
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
        Schema::dropIfExists('cars');
    }
}
