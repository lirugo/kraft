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
            $table->string('difficult')->nullable();
            //NEW
            //TProfile
            $table->string('tprofile_3600_vendor')->nullable();
            $table->string('tprofile_3600_model')->nullable();
            $table->string('tprofile_3600_name')->nullable();
            $table->string('tprofile_3600_width')->nullable();
            $table->string('tprofile_3600_lenght')->nullable();
            $table->string('tprofile_3600_color')->nullable();
            $table->string('tprofile_3600_count')->nullable();
            $table->string('tprofile_3600_price')->nullable();
            $table->string('tprofile_3600_pack')->nullable();
            $table->string('tprofile_3600_price_all')->nullable();

            $table->string('tprofile_1200_vendor')->nullable();
            $table->string('tprofile_1200_model')->nullable();
            $table->string('tprofile_1200_name')->nullable();
            $table->string('tprofile_1200_width')->nullable();
            $table->string('tprofile_1200_lenght')->nullable();
            $table->string('tprofile_1200_color')->nullable();
            $table->string('tprofile_1200_count')->nullable();
            $table->string('tprofile_1200_price')->nullable();
            $table->string('tprofile_1200_pack')->nullable();
            $table->string('tprofile_1200_price_all')->nullable();

            $table->string('tprofile_600_vendor')->nullable();
            $table->string('tprofile_600_model')->nullable();
            $table->string('tprofile_600_name')->nullable();
            $table->string('tprofile_600_width')->nullable();
            $table->string('tprofile_600_lenght')->nullable();
            $table->string('tprofile_600_color')->nullable();
            $table->string('tprofile_600_count')->nullable();
            $table->string('tprofile_600_price')->nullable();
            $table->string('tprofile_600_pack')->nullable();
            $table->string('tprofile_600_price_all')->nullable();

            $table->string('tprofile_susp_vendor')->nullable();
            $table->string('tprofile_susp_model')->nullable();
            $table->string('tprofile_susp_name')->nullable();
            $table->string('tprofile_susp_width')->nullable();
            $table->string('tprofile_susp_lenght')->nullable();
            $table->string('tprofile_susp_color')->nullable();
            $table->string('tprofile_susp_count')->nullable();
            $table->string('tprofile_susp_price')->nullable();
            $table->string('tprofile_susp_pack')->nullable();
            $table->string('tprofile_susp_price_all')->nullable();

            $table->string('tprofile_sum_total')->nullable();
            //EndTProfile
            //ENDNEWOTHERDELETE

            //TProfile
            $table->float('tp3600')->nullable();
            $table->float('tp1200')->nullable();
            $table->float('tp600')->nullable();
            $table->float('L3000')->nullable();
            $table->float('susp')->nullable();

            //Cube
            $table->float('count_cube')->nullable();
            $table->float('stringer_cube')->nullable();
            $table->float('podves_cube')->nullable();

            //CommonPriceByOneT-Profile
            $table->float('tp3600_priceByOne')->nullable();
            $table->float('tp1200_priceByOne')->nullable();
            $table->float('tp600_priceByOne')->nullable();
            $table->float('L3000_priceByOne')->nullable();
            $table->float('susp_priceByOne')->nullable();

            //CommonPriceByOneCube
            $table->float('count_price_cube')->nullable();
            $table->float('stringer_price_cube')->nullable();
            $table->float('susp_price_cube')->nullable();

            //CommonCountPackageT-Profile
            $table->float('tp3600_package')->nullable();
            $table->float('tp1200_package')->nullable();
            $table->float('tp600_package')->nullable();
            $table->float('L3000_package')->nullable();
            $table->float('susp_package')->nullable();

            //CommonCountPackageCube
            $table->float('countc_pack_cube')->nullable();
            $table->float('stringerc_pack_cube')->nullable();
            $table->float('csuspc_pack_cube')->nullable();

            //CommonPrice
            $table->float('tp3600_price')->nullable();
            $table->float('tp1200_price')->nullable();
            $table->float('tp600_price')->nullable();
            $table->float('L3000_price')->nullable();
            $table->float('susp_price')->nullable();
            $table->float('sum')->nullable();

            //CommonPriceCube
            $table->float('countc_price_cube')->nullable();
            $table->float('stringerc_price_cube')->nullable();
            $table->float('suspc_price_cube')->nullable();
            $table->float('sum_cube')->nullable();

            //Grilyato
            $table->float('tp2400_grilyato')->nullable();
            $table->float('tp1200_grilyato')->nullable();
            $table->float('tp600_grilyato')->nullable();
            $table->float('tp600f_grilyato')->nullable();
            $table->float('tp600tc_grilyato')->nullable();
            $table->float('susp_grilyato')->nullable();
            $table->float('angles_grilyato')->nullable();
            $table->float('suspass_grilyato')->nullable();
            $table->float('dowel1_grilyato')->nullable();
            $table->float('dowel2_grilyato')->nullable();

            $table->float('tp2400_priceByOne_grilyato')->nullable();
            $table->float('tp1200_priceByOne_grilyato')->nullable();
            $table->float('tp600_priceByOne_grilyato')->nullable();
            $table->float('tp600f_priceByOne_grilyato')->nullable();
            $table->float('tp600tc_priceByOne_grilyato')->nullable();
            $table->float('susp_price_priceByOne_grilyato')->nullable();
            $table->float('angles_price_priceByOne_grilyato')->nullable();
            $table->float('gsuspass_price_priceByOne_grilyato')->nullable();
            $table->float('dowel1c_price_priceByOne_grilyato')->nullable();
            $table->float('dowel2c_price_priceByOne_grilyato')->nullable();

            $table->float('tp2400_package_grilyato')->nullable();
            $table->float('tp1200_package_grilyato')->nullable();
            $table->float('tp600_package_grilyato')->nullable();
            $table->float('tp600f_package_grilyato')->nullable();
            $table->float('tp600tc_package_grilyato')->nullable();
            $table->float('susp_package_grilyato')->nullable();
            $table->float('angles_package_grilyato')->nullable();
            $table->float('suspass_package_grilyato')->nullable();
            $table->float('dowel1_package_grilyato')->nullable();
            $table->float('dowel2_package_grilyato')->nullable();

            $table->float('tp2400_price_grilyato')->nullable();
            $table->float('tp1200_price_grilyato')->nullable();
            $table->float('tp600_price_grilyato')->nullable();
            $table->float('tp600f_price_grilyato')->nullable();
            $table->float('tp600tc_price_grilyato')->nullable();
            $table->float('susp_price_grilyato')->nullable();
            $table->float('angles_price_grilyato')->nullable();
            $table->float('suspass_price_grilyato')->nullable();
            $table->float('dowel1_price_grilyato')->nullable();
            $table->float('dowel2_price_grilyato')->nullable();
            $table->float('sum_grilyato')->nullable();

            //Led
            $table->float('count_led')->nullable();
            $table->float('sum_led')->nullable();

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
