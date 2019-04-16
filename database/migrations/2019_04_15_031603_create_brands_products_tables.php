<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsProductsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('brands', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();

            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

        });

        Schema::create('products', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->string('pathToImage');
            $table->timestamps();

            $table->bigInteger('brand_id')->nullable()->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
        Schema::dropIfExists('products');
    }
}
