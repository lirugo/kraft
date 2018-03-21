<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorCodeTProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_code_t_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendor_code');
            $table->string('model')->nullable();
            $table->integer('profile_thickness')->nullable();
            $table->string('profile');
            $table->integer('color');
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
        Schema::dropIfExists('vendor_code_t_profiles');
    }
}
