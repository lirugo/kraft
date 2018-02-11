<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('companyid');
            $table->string('name');
            $table->string('region');
            $table->string('district');
            $table->string('city');
            $table->string('street');
            $table->string('house');

            $table->integer('sworks');
            $table->date('dateofdelivery')->nullable();
            //Customer
            $table->string('customer');
            $table->string('customername');
            $table->string('customersurname');
            $table->string('customerpatronymic');
            $table->string('customerphone');
            //GeneralBuilder
            $table->string('generalbuilder');
            $table->string('delegatebuildername')->nullable();
            $table->string('delegatebuildersurname')->nullable();
            $table->string('delegatebuilderpatronymic')->nullable();
            $table->string('delegatebuilderphone')->nullable();
            //SubBuilder
            $table->string('subbuilder')->nullable();
            $table->string('subbuildername')->nullable();
            $table->string('subbuildersurname')->nullable();
            $table->string('subbuilderpatronymic')->nullable();
            $table->string('subbuilderphone')->nullable();
            //Arch
            $table->string('arch')->nullable();
            $table->string('archname')->nullable();
            $table->string('archsurname')->nullable();
            $table->string('archpatronymic')->nullable();
            $table->string('archphone')->nullable();
            //Design
            $table->string('design')->nullable();
            $table->string('designname')->nullable();
            $table->string('designsurname')->nullable();
            $table->string('designpatronymic')->nullable();
            $table->string('designphone')->nullable();
            //Photo
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            //Comments
            $table->text('comments')->nullable();
            //Products
            $table->string('product1')->nullable();
            $table->string('product2')->nullable();
            $table->string('product3')->nullable();
            $table->string('product4')->nullable();
            $table->string('product5')->nullable();
            //Specification
            $table->integer('specificationid')->nullable();
            //Verify
            $table->boolean('verify')->default(false);
            $table->boolean('active')->default(false);
            //Timestamps
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
        Schema::dropIfExists('objects');
    }
}