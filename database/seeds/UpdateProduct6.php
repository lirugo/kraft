<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateProduct6 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::update('UPDATE profile_grilyatos SET vendor_code =11115702412 WHERE vendor_code =123702411512 ');
        DB::update('UPDATE profile_grilyatos SET vendor_code =11115702406 WHERE vendor_code =123702411506 ');
        DB::update('UPDATE profile_grilyatos SET vendor_code =11115702436 WHERE vendor_code =123702411536 ');
        DB::update('UPDATE profile_grilyatos SET vendor_code =11115801736 WHERE vendor_code =123801711536 ');
        DB::update('UPDATE profile_grilyatos SET vendor_code =11115801706 WHERE vendor_code =123801711506 ');
        DB::update('UPDATE profile_grilyatos SET vendor_code =11115801712 WHERE vendor_code =123801711512 ');
        DB::update('UPDATE profile_grilyatos SET vendor_code =11115900312 WHERE vendor_code =123900311512 ');
        DB::update('UPDATE profile_grilyatos SET vendor_code =11115900306 WHERE vendor_code =123900311506 ');
        DB::update('UPDATE profile_grilyatos SET vendor_code =11115900336 WHERE vendor_code =123900311536 ');
        DB::update('UPDATE profile_grilyatos SET vendor_code =11115900512 WHERE vendor_code =123900511512 ');
        DB::update('UPDATE profile_grilyatos SET vendor_code =11115900506 WHERE vendor_code =123900511506 ');
        DB::update('UPDATE profile_grilyatos SET vendor_code =11115900536 WHERE vendor_code =123900511536 ');
        DB::update('UPDATE profile_grilyatos SET vendor_code =11115900612 WHERE vendor_code =123900611512 ');
        DB::update('UPDATE profile_grilyatos SET vendor_code =11115900606 WHERE vendor_code =123900611506 ');
        DB::update('UPDATE profile_grilyatos SET vendor_code =11115900636 WHERE vendor_code =123900611536 ');
    }
}