<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateProduct7 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO profile_grilyatos(vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (11124900706,0,\'Fortis\',\'T24\',\'9007\',600,25,24,\'Профіль KRAFT Fortis T-24 600*25*24мм RAL 9007\',14.85,NULL,NULL)');
        DB::insert('INSERT INTO profile_grilyatos(vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (11124900736,0,\'Fortis\',\'T24\',\'9007\',3600,38,24,\'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 9007\',89.06,NULL,NULL)');
        DB::insert('INSERT INTO profile_grilyatos(vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (11124900712,0,\'Fortis\',\'T24\',\'9007\',1200,25,24,\'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 9007\',29.70,NULL,NULL)');
    }
}
