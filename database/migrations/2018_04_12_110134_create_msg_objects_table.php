<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsgObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msg_objects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id_from')->unsigned();
            $table->integer('user_id_to')->unsigned()->default(0);
            $table->integer('object_id')->unsigned()->default(0);
            $table->text('message');
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
        Schema::dropIfExists('msg_objects');
    }
}
