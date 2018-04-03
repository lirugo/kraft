<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'title' => 'Внимание! Акция для Дистрибьюторов.',
            'body' => 'Покупаешь один ЛЕД, второй ЛЕД в подарок',
            'created_at' => '2018-04-02',
        ]);
    }
}
