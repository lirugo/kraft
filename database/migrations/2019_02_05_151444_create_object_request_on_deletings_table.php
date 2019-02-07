<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectRequestOnDeletingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('object_request_on_deletings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('object_id')->unsigned();
            $table->foreign('object_id')->references('id')->on('objects')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('calc_histories', function (Blueprint $table) {
            $table->dropForeign('calc_histories_object_id_foreign');
            $table->foreign('object_id')
                ->references('id')->on('objects')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('object_request_on_deletings');
    }
}
