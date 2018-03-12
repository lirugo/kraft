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
            $table->float('easy');
            $table->float('hard');
            $table->float('dollar');
            $table->float('euro');
            //EndCommon
            //TProfile
            $table->float('tp3600');
            $table->float('tp1200');
            $table->float('tp600');
            $table->float('L3000');
            $table->float('susp');
            $table->float('tp3600_price');
            $table->float('tp1200_price');
            $table->float('tp600_price');
            $table->float('L3000_price');
            $table->float('susp_price');
            $table->float('tp3600_pack');
            $table->float('tp1200_pack');
            $table->float('tp600_pack');
            $table->float('L3000_pack');
            $table->float('susp_pack');
            //EndTProfile
            //Grilyato
            //GrilyatoBefore100mm
            $table->float('g2400_a');
            $table->float('g1200_a');
            $table->float('g600_a');
            $table->float('g600f_a');
            $table->float('g600m_a');
            $table->float('susp_a');
            $table->float('L3000_a');
            $table->float('suspass_a');
            //Grilyato120-200mm
            $table->float('g2400_b');
            $table->float('g1200_b');
            $table->float('g600_b');
            $table->float('g600f_b');
            $table->float('g600m_b');
            $table->float('susp_b');
            $table->float('L3000_b');
            $table->float('suspass_b');
            //GrilyatoGLK
            $table->float('g600tc');
            //EndGrilyato
            //KraftCube
            $table->float('count');
            $table->float('stringer');
            //EndKraftCube
            //Package
            //EndPackage
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
