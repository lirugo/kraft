<?php

use Illuminate\Database\Seeder;

class ConstantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('constants')->insert([
            'easy' => 3,
            'hard' => 7,
            'dollar' => 27,
            'euro' => 32,
            //TProfile
            'tp3600' => 0.234,
            'tp1200' => 1.4,
            'tp600' => 1.4,
            'L3000' => 3,
            'susp' => 0.7,
            'tp3600_price' => 30,
            'tp1200_price' => 30,
            'tp600_price' => 30,
            'L3000_price' => 30,
            'susp_price' => 30,
            'tp3600_pack' => 25,
            'tp1200_pack' => 50,
            'tp600_pack' => 75,
            'L3000_pack' => 50,
            'susp_pack' => 100,
            //EndTProfile
            //Grilyato
            'g2400_a' => 0.696,
            'g1200_a' => 0,
            'g600_a' => 2.78,
            'g600f_a' => 2.78,
            'g600m_a' => 2.78,
            'susp_a' => 0.9,
            'L3000_a' => 3,
            'suspass_a' => 3,
            'g2400_b' => 0.348,
            'g1200_b' => 1.392,
            'g600_b' => 1.392,
            'g600f_b' => 2.78,
            'g600m_b' => 2.78,
            'susp_b' => 0.9,
            'L3000_b' => 3,
            'suspass_b' => 3,
            'g600tc' => 11.12,
            'count' => 1000,
            'stringer' => 0.32,
            //Price
            'g2400_price' => 30,
            'g1200_price' => 30,
            'g600_price' => 30,
            'g600f_price' => 30,
            'g600m_price' => 30,
            'gsusp_price' => 30,
            'gL3000_price' => 30,
            'gsuspass_price' => 30,
            'dowel1_price' => 30,
            'dowel2_price' => 30,
            'g600tc_price' => 30,
            //Pack
            'g2400_pack' => 30,
            'g1200_pack' => 30,
            'g600_pack' => 30,
            'g600f_pack' => 30,
            'g600m_pack' => 30,
            'g600tc_pack' => 30,
            'gsusp_pack' => 30,
            'gL3000_pack' => 30,
            'gsuspass_pack' => 30,
            'dowel1_pack' => 100,
            'dowel2_pack' => 100,
            //Grilyato
        ]);
    }
}
