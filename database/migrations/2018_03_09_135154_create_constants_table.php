<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constants', function (Blueprint $table) {
            $table->increments('id');
            //Common
            $table->double('easy');
            $table->double('hard');
            $table->double('dollar');
            $table->double('euro');
            //EndCommon
            //TProfile
            $table->double('tp3600');
            $table->double('tp1200');
            $table->double('tp600');
            $table->double('L3000');
            $table->double('susp');
            $table->double('tp3600_price');
            $table->double('tp1200_price');
            $table->double('tp600_price');
            $table->double('L3000_price');
            $table->double('susp_price');
            $table->double('tp3600_pack');
            $table->double('tp1200_pack');
            $table->double('tp600_pack');
            $table->double('L3000_pack');
            $table->double('susp_pack');
            //EndTProfile
            //Grilyato
            //GrilyatoBefore100mm
            $table->double('g2400_a');
            $table->double('g1200_a');
            $table->double('g600_a');
            $table->double('g600f_a');
            $table->double('g600m_a');
            $table->double('susp_a');
            $table->double('L3000_a');
            $table->double('suspass_a');
            //Grilyato120-200mm
            $table->double('g2400_b');
            $table->double('g1200_b');
            $table->double('g600_b');
            $table->double('g600f_b');
            $table->double('g600m_b');
            $table->double('susp_b');
            $table->double('L3000_b');
            $table->double('suspass_b');
            //Price
            $table->double('g2400_price');
            $table->double('g1200_price');
            $table->double('g600_price');
            $table->double('g600f_price');
            $table->double('g600m_price');
            $table->double('gsusp_price');
            $table->double('gL3000_price');
            $table->double('gsuspass_price');
            $table->double('dowel1_price');
            $table->double('dowel2_price');
            $table->double('g600tc_price');
            //Pack
            $table->double('g3600_pack');
            $table->double('g2400_pack');
            $table->double('g1200_pack');
            $table->double('g600_pack');
            $table->double('g600f_pack');
            $table->double('g600m_pack');
            $table->double('g600tc_pack');
            $table->double('gsusp_pack');
            $table->double('gL3000_pack');
            $table->double('gsuspass_pack');
            $table->double('dowel1_pack');
            $table->double('dowel2_pack');
            //GrilyatoGLK
            $table->double('g600tc');
            //EndGrilyato
            //KraftCube
            $table->double('count');
            $table->double('stringer');
            $table->double('count_price');
            $table->double('stringer_price');
            $table->double('csusp_price');
            $table->double('count_pack');
            $table->double('stringer_pack');
            $table->double('csusp_pack');
            //EndKraftCube
            //Led
            $table->double('coefficient_led');
            $table->double('price_led');
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
        Schema::dropIfExists('constants');
    }
}
