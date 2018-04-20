<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDiscountInCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function($table) {
            $table->integer('discount_tprofile')->after('social5')->default(0);
            $table->integer('discount_grilyato')->after('discount_tprofile')->default(0);
            $table->integer('discount_cube')->after('discount_grilyato')->default(0);
            $table->integer('discount_led')->after('discount_cube')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function(Blueprint $table) {
            $table->dropColumn(['discount_tprofile','discount_grilyato','discount_cube','discount_led']);
        });
    }
}
