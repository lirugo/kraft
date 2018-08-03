<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProdductionFieldCalcHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('calc_histories', function (Blueprint $table) {
            $table->boolean('production')->default(false);
            $table->string('one_length')->nullable();
            $table->string('mp')->nullable();
            $table->string('count_production')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calc_histories', function (Blueprint $table) {
            $table->dropColumn('production');
            $table->dropColumn('one_length');
            $table->dropColumn('mp');
            $table->dropColumn('count_production');
        });
    }
}
