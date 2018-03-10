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
            $table->integer('object_id')->unsigned()->nullable();
            $table->foreign('object_id')->references('id')->on('objects');
            $table->string('type');
            //TProfile
            $table->float('tp3600')->nullable();
            $table->float('tp1200')->nullable();
            $table->float('tp600')->nullable();
            $table->float('L3000')->nullable();
            $table->float('susp')->nullable();

            //CommonPriceByOne
            $table->float('tp3600_priceByOne')->nullable();
            $table->float('tp1200_priceByOne')->nullable();
            $table->float('tp600_priceByOne')->nullable();
            $table->float('L3000_priceByOne')->nullable();
            $table->float('susp_priceByOne')->nullable();

            //CommonCountPackage
            $table->float('tp3600_package')->nullable();
            $table->float('tp1200_package')->nullable();
            $table->float('tp600_package')->nullable();
            $table->float('L3000_package')->nullable();
            $table->float('susp_package')->nullable();

            //CommonPrice
            $table->float('tp3600_price')->nullable();
            $table->float('tp1200_price')->nullable();
            $table->float('tp600_price')->nullable();
            $table->float('L3000_price')->nullable();
            $table->float('susp_price')->nullable();
            $table->float('sum')->nullable();

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
