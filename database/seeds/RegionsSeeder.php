<?php

use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
           'region_id' => '11',
           'regionname_ru' => 'Житомирская',
        ]);
        DB::table('regions')->insert([
            'region_id' => '12',
            'regionname_ru' => 'Киевская',
        ]);
        DB::table('regions')->insert([
            'region_id' => '13',
            'regionname_ru' => 'Черниговская',
        ]);

        DB::table('regions')->insert([
            'region_id' => '21',
            'regionname_ru' => 'Днепровская',
        ]);
        DB::table('regions')->insert([
            'region_id' => '22',
            'regionname_ru' => 'Донецкая',
        ]);
        DB::table('regions')->insert([
            'region_id' => '23',
            'regionname_ru' => 'Запорожская',
        ]);
        DB::table('regions')->insert([
            'region_id' => '24',
            'regionname_ru' => 'Луганская',
        ]);
        DB::table('regions')->insert([
            'region_id' => '25',
            'regionname_ru' => 'Полтавская',
        ]);
        DB::table('regions')->insert([
            'region_id' => '26',
            'regionname_ru' => 'Сумская',
        ]);
        DB::table('regions')->insert([
            'region_id' => '27',
            'regionname_ru' => 'Харьковская',
        ]);


        DB::table('regions')->insert([
            'region_id' => '31',
            'regionname_ru' => 'Винницкая',
        ]);
        DB::table('regions')->insert([
            'region_id' => '32',
            'regionname_ru' => 'Кропивницкая',
        ]);
        DB::table('regions')->insert([
            'region_id' => '33',
            'regionname_ru' => 'Николаевская',
        ]);
        DB::table('regions')->insert([
            'region_id' => '34',
            'regionname_ru' => 'Одесская',
        ]);
        DB::table('regions')->insert([
            'region_id' => '35',
            'regionname_ru' => 'Херсонская',
        ]);
        DB::table('regions')->insert([
            'region_id' => '36',
            'regionname_ru' => 'Черкасская',
        ]);

        DB::table('regions')->insert([
            'region_id' => '41',
            'regionname_ru' => 'Волынская',
        ]);
        DB::table('regions')->insert([
            'region_id' => '42',
            'regionname_ru' => 'Закарпатская',
        ]);
        DB::table('regions')->insert([
            'region_id' => '43',
            'regionname_ru' => 'Ивано-Франковская',
        ]);
        DB::table('regions')->insert([
            'region_id' => '44',
            'regionname_ru' => 'Львовская',
        ]);
        DB::table('regions')->insert([
            'region_id' => '45',
            'regionname_ru' => 'Ровенская',
        ]);
        DB::table('regions')->insert([
            'region_id' => '46',
            'regionname_ru' => 'Тернопольская',
        ]);
        DB::table('regions')->insert([
            'region_id' => '47',
            'regionname_ru' => 'Хмельницкая',
        ]);
        DB::table('regions')->insert([
            'region_id' => '48',
            'regionname_ru' => 'Черновецкая',
        ]);
    }
}
