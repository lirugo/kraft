<?php

use Illuminate\Database\Seeder;

class DistributorCompanySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'companyname' => 'companynamecenter',
            'region' => 'center',
            'regionname' => '11',
            'city' => 'city',
            'street' => 'street',
            'house' => '21',
            'housing' => '21',
            'office' => 'offce',
            'smartphone' => 'smartphone',
            'phone' => 'phone',
            'fax' => 'fax',
            'email' => 'distributor@app.com',
            'bank' => 'bank',
            'mfo' => 'mfo',
            'settlementaccount' => 'settlementaccount',
            'okpo' => 'okpo',
            'lawcity' => 'lawcity',
            'lawstreet' => '31',
            'lawhouse' => '31',
            'lawhousing' => '31',
            'lawoffice' => '31',
            'lawphone' => '+380674171332',
            'lawfax' => 'lawfax'
        ]);
        DB::table('objects')->insert([
            'companyid' => '1',
            'creatorid' => '3',
            'rmid' => '5',
            'name' => 'name',
            //'country' => 'country',
            'region' => '21',
            'regionname' => 'center',
            'city' => 'city',
            'street' => 'street',
            'house' => '21',
            //'postcode' => 'postcode',
            //'lat' => 'lat',
            //'lon' => 'lon',
            'sworks' => '21',
            'customer' => 'customer',
            'customername' => 'customername',
            'customersurname' => 'customersurname',
            'customerpatronymic' => 'customerpatronymic',
            'customerphone' => 'customerphone',
            'generalbuilder' => 'generalbuilder',
        ]);
    }
}
