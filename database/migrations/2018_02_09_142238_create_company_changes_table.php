<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyChangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_changes', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('done')->default(false);
            $table->integer('company_id')->unsigned();
            $table->integer('count')->unsigned();
            $table->string('companyname');
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
            $table->string('email');
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
            $table->string('scandoc1')->default('scandoc1.jpg');
            $table->string('scandoc2')->default('scandoc2.jpg');
            $table->string('scandoc3')->default('scandoc3.jpg');
            $table->string('scandoc4')->default('scandoc4.jpg');
            $table->string('scandoc5')->default('scandoc5.jpg');
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
        Schema::dropIfExists('company_changes');
    }
}
