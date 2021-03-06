<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomeFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('region')->nullable();
            $table->string('regionname')->after('region')->nullable();
            $table->string('site')->nullable();
            $table->string('city')->nullable();
            $table->string('social1')->nullable();
            $table->string('social2')->nullable();
            $table->string('social3')->nullable();
            $table->string('social4')->nullable();
            $table->string('social5')->nullable();
            $table->string('work_user')->nullable();
            $table->string('companyname')->nullable();
            $table->string('companycity')->nullable();
            $table->string('companysite')->nullable();
            $table->text('comments')->nullable();
            $table->string('workexperience')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropIfExists('region');
            $table->dropIfExists('regionname');
            $table->dropIfExists('site');
            $table->dropIfExists('city');
            $table->dropIfExists('social1');
            $table->dropIfExists('social2');
            $table->dropIfExists('social3');
            $table->dropIfExists('social4');
            $table->dropIfExists('social5');
            $table->dropIfExists('work_user');
            $table->dropIfExists('companyname');
            $table->dropIfExists('companycity');
            $table->dropIfExists('companysite');
            $table->dropIfExists('comments');
            $table->dropIfExists('workexperience');
        });
    }
}
