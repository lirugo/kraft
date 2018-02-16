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

            $table->string('companyname');
            $table->string('region');
            $table->string('regionname');
            $table->string('city');
            $table->string('street');
            $table->integer('house');
            $table->char('housing',5);
            $table->char('office',5);
            $table->string('smartphone');
            $table->string('phone');
            $table->string('fax');
            $table->string('email')->unique();
            $table->string('bank');
            $table->string('mfo');
            $table->string('settlementaccount');
            $table->string('okpo');
            $table->string('lawcity');
            $table->string('lawstreet');
            $table->integer('lawhouse');
            $table->char('lawhousing',5);
            $table->char('lawoffice',5);
            $table->string('lawphone');
            $table->string('lawfax');
            $table->string('scandoc1')->default('scandoc1');
            $table->string('scandoc2')->default('scandoc2');
            $table->string('scandoc3')->default('scandoc3');
            $table->string('scandoc4')->default('scandoc4');
            $table->string('scandoc5')->default('scandoc5');

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
