<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateProduct8 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::update('UPDATE profile_grilyatos SET price = 822.70 WHERE vendor_code = 15601123015 ');
        DB::update('UPDATE profile_grilyatos SET price = 822.70 WHERE vendor_code = 15601063015 ');
        DB::update('UPDATE profile_grilyatos SET price = 822.70 WHERE vendor_code = 15601063024 ');
        DB::update('UPDATE profile_grilyatos SET price = 822.70 WHERE vendor_code = 15601123024 ');
//        DB::insert('INSERT INTO profile_grilyatos(vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (15601123015,0,\'KRAFT LED\',\'T\',\'0\',1200,15,0,\'Набір освітлення KRAFT LED-T-15 1200 мм 30 Вт\', 822.70,NULL,NULL)');
//        DB::insert('INSERT INTO profile_grilyatos(vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (15601063015,0,\'KRAFT LED\',\'T\',\'0\',600,15,0,\'Набір освітлення KRAFT LED-T-15 600 мм 30 Вт\',822.70,NULL,NULL)');
//        DB::insert('INSERT INTO profile_grilyatos(vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (15601063024,0,\'KRAFT LED\',\'T\',\'0\',600,24,0,\'Набір освітлення KRAFT LED-T-24  600 мм 30 Вт\',822.70,NULL,NULL)');
//        DB::insert('INSERT INTO profile_grilyatos(vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (15601123024,0,\'KRAFT LED\',\'T\',\'0\',1200,24,0,\'Набір освітлення KRAFT LED-T-24 1200 мм 30 Вт\',822.70,NULL,NULL)');

        DB::insert('INSERT INTO profile_grilyatos(vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (15603123024,0,\'KRAFT LED\',\'KUB\',\'0\',1200,35,0,\'Світильник KRAFT LED KUB 35*105*1200 мм 30 Вт\',972.00,NULL,NULL)');
//        DB::insert('INSERT INTO profile_grilyatos(vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (15603123024,0,\'KRAFT LED\',\'KUB\',\'0\',1800,35,0,\'Світильник KRAFT LED KUB 35*105*1800 мм 30 Вт RAL 9005\',1380.00,NULL,NULL)');
        DB::insert('INSERT INTO profile_grilyatos(vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (15603246024,0,\'KRAFT LED\',\'KUB\',\'0\',2400,35,0,\'Світильник KRAFT LED KUB 35*105*2400 мм 60 Вт\',1944.00,NULL,NULL)');

        DB::update('UPDATE profile_grilyatos SET price = 822.70 WHERE vendor_code = 15602123024 ');
        DB::update('UPDATE profile_grilyatos SET price = 822.70 WHERE vendor_code = 15602063015 ');
        DB::update('UPDATE profile_grilyatos SET price = 822.70 WHERE vendor_code = 15602123015 ');
        DB::update('UPDATE profile_grilyatos SET price = 822.70 WHERE vendor_code = 15602063024 ');
//        DB::insert('INSERT INTO profile_grilyatos(vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (15602123024,0,\'KRAFT LED\',\'G\',\'0\',1200,24,0,\'Набір освітлення KRAFT LED-G-24 1200 мм 30 Вт\',822.70,NULL,NULL)');
//        DB::insert('INSERT INTO profile_grilyatos(vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (15602063015,0,\'KRAFT LED\',\'G\',\'0\',600,15,0,\'Набір освітлення KRAFT LED-G-15  600 мм 30 Вт\',822.70,NULL,NULL)');
//        DB::insert('INSERT INTO profile_grilyatos(vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (15602123015,0,\'KRAFT LED\',\'G\',\'0\',1200,15,0,\'Набір освітлення KRAFT LED-G-15  1200 мм 30 Вт\',822.70,NULL,NULL)');
//        DB::insert('INSERT INTO profile_grilyatos(vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (15602063024,0,\'KRAFT LED\',\'G\',\'0\',600,24,0,\'Набір освітлення KRAFT LED-G-24  600 мм 30 Вт\',822.70,NULL,NULL)');
    }
}
