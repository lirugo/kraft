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
            $table->string('companyid');
            $table->string('companyname');

            $table->string('city')->nullable();
            $table->string('street')->nullable();
            $table->integer('house')->nullable();
            $table->char('housing',5)->nullable();
            $table->char('office',5)->nullable();
            $table->string('smartphone')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();

            $table->string('bank')->nullable();
            $table->string('mfo')->nullable();
            $table->string('settlementaccount')->nullable();
            $table->string('okpo')->nullable();

            $table->string('lawcity')->nullable();
            $table->string('lawstreet')->nullable();
            $table->integer('lawhouse')->nullable();
            $table->char('lawhousing',5)->nullable();
            $table->char('lawoffice',5)->nullable();
            $table->string('lawphone')->nullable();
            $table->string('lawfax')->nullable();
            $table->string('scandoc1')->nullable();
            $table->string('scandoc2')->nullable();
            $table->string('scandoc3')->nullable();
            $table->string('scandoc4')->nullable();
            $table->string('scandoc5')->nullable();

            $table->boolean('verifiedchange')->default(false);

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
