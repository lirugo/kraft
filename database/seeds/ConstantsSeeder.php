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
            'tp3600' => 0.234,
            'tp1200' => 1.4,
            'tp600' => 1.4,
            'L3000' => 3,
            'susp' => 0.7,
            'g2400_a' => 0.696,
            'g1200_a' => 0,
            'g600_a' => 2.78,
            'g600f_a' => 2.78,
            'g600m_a' => 2.78,
            'susp_a' => 0.9,
            'L3000_a' => 3,
            'suspass_a' => 3,
            'g2400_b' => 0.696,
            'g1200_b' => 0,
            'g600_b' => 2.78,
            'g600f_b' => 2.78,
            'g600m_b' => 2.78,
            'susp_b' => 0.9,
            'L3000_b' => 3,
            'suspass_b' => 3,
            'g600tc' => 11.12,
            'count' => 1000,
            'stringer' => 0.32,
            '3600_pack' => 25,
            '2400_pack' => 25,
            '1200_pack' => 50,
            '600_pack' => 75,
            'L3000_pack' => 50,
            'susp_pack' => 100,
        ]);
    }
}
