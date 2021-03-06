<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('companyname')->unique();
            $table->string('region');
            $table->string('regionname');
            $table->string('city');
            $table->string('street');
            $table->integer('house');
            $table->char('housing',5)->nullable();
            $table->char('office',5)->nullable();
            $table->string('smartphone')->nullable();
            $table->string('phone');
            $table->string('fax')->nullable();
            $table->string('email')->unique();
            $table->string('bank');
            $table->string('mfo');
            $table->string('settlementaccount');
            $table->string('okpo');
            $table->string('lawcity');
            $table->string('lawstreet');
            $table->integer('lawhouse');
            $table->char('lawhousing',5)->nullable();
            $table->char('lawoffice',5)->nullable();
            $table->string('lawphone');
            $table->string('lawfax')->nullable();
            $table->string('scandoc1')->default('scandoc.png');
            $table->string('scandoc2')->default('scandoc.png');
            $table->string('scandoc3')->default('scandoc.png');
            $table->string('scandoc4')->default('scandoc.png');
            $table->string('scandoc5')->default('scandoc.png');
            $table->string('site')->nullable();
            $table->string('social1')->nullable();
            $table->string('social2')->nullable();
            $table->string('social3')->nullable();
            $table->string('social4')->nullable();
            $table->string('social5')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
