<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductUpdate4 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::update('UPDATE profile_grilyatos SET color = \'0001\' WHERE color = \'Дерево\'');
    }
}
