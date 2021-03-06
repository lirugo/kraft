<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalcHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calc_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('status')->default(false);
            $table->boolean('stock')->default(false);
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('object_id')->unsigned()->nullable();
            $table->foreign('object_id')->references('id')->on('objects');

            $table->string('order_id')->nullable();
            $table->string('vendor_code')->nullable();
            $table->string('model')->nullable();
            $table->string('description')->nullable();
            $table->string('width')->nullable();
            $table->string('length')->nullable();
            $table->string('color')->nullable();
            $table->string('price')->nullable();
            $table->string('count')->nullable();

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
        Schema::dropIfExists('calc_histories');
    }
}
