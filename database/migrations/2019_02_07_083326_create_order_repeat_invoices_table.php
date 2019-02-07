<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderRepeatInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_repeat_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('object_id')->unsigned()->nullable();
            $table->foreign('object_id')->references('id')->on('objects')->onDelete('cascade');
            $table->string('order_id')->nullable();
            $table->integer('rm_id')->unsigned()->nullable();
            $table->foreign('rm_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('stock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_repeat_invoices');
    }
}
