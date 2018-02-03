<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->date('dateofbirth')->after('email')->default(date("Y-m-d H:i:s"));
            $table->char('sex', 1)->after('dateofbirth')->default('');
            $table->string('phone')->after('sex')->default('');
            $table->string('company')->after('phone')->nullable()->default('');


            $table->boolean('verified')->after('avatar')->default(false);
            $table->boolean('active')->after('verified')->default(false);

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
            $table->dropColumn('dateofbirth');
            $table->dropColumn('sex');
            $table->dropColumn('phone');
            $table->dropColumn('company');

            $table->dropColumn('verified');
            $table->dropColumn('active');
        });
    }
}
