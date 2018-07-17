<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileGrilyatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_grilyatos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendor_code')->unique();
            $table->string('cells')->nullable();
            $table->string('type')->nullable();
            $table->string('speciality')->nullable();
            $table->string('color')->nullable();
            $table->string('length')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 6,2)->nullable();
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
        Schema::dropIfExists('profile_grilyatos');
    }
}
