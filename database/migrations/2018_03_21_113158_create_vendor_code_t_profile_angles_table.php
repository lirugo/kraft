<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorCodeTProfileAnglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_code_t_profile_angles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendor_code')->unique();
            $table->integer('price')->nullable();
            $table->string('model')->nullable();
            $table->integer('profile_thickness')->nullable();
            $table->string('profile')->nullable();
            $table->integer('color')->nullable();
            $table->text('description');
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
        Schema::dropIfExists('vendor_code_t_profile_angles');
    }
}
