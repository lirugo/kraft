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
            $table->integer('companyid')->unsigned()->nullable();
            $table->foreign('companyid')->references('id')->on('companies');
            $table->integer('creatorid');
            $table->integer('rmid')->nullable();
            $table->string('type');
            $table->string('name');
            //$table->string('country');
            $table->integer('region')->unsigned()->nullable();
            $table->string('regionname');
            $table->string('city');
            $table->string('street');
            $table->string('house');
            $table->string('housing')->nullable();
            $table->text('locationinformation')->nullable();
            //$table->string('postcode');
            //$table->string('lat');
            //$table->string('lon');

            $table->integer('sworks');
            $table->date('dateofdelivery')->nullable();
            $table->date('dateofactivate')->nullable();

            $table->integer('reporttime')->default(0);
            //Customer
            $table->string('customer');
            $table->string('customername');
            $table->string('customersurname');
            $table->string('customerpatronymic');
            $table->string('customerposition')->nullable();
            $table->string('customerphone');
            //GeneralBuilder
            $table->string('generalbuilder')->nullable();
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
            $table->string('photo4')->nullable();
            $table->string('photo5')->nullable();
            //Comments
            $table->text('comments')->nullable();
            //Products
            $table->boolean('product1')->default(false);
            $table->boolean('product2')->default(false);
            $table->boolean('product3')->default(false);
            $table->boolean('product4')->default(false);
            $table->boolean('product5')->default(false);
            //Specification
            $table->integer('specificationid')->nullable();
            //Verify
            $table->boolean('verify')->default(false);
            $table->boolean('active')->default(false);
            $table->integer('viewed')->default(0)->unsigned();
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
