<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'admin',
            'surname' => 'admin',
            'patronymic' => 'admin',
            'phone' => '+38 067 417 13 32',
            'email' => 'admin@app.com',
            'password' => bcrypt('password'),
            'active' => true,
        ]);

        DB::table('admins')->insert([
            'name' => 'test-admin',
            'surname' => 'test-admin',
            'patronymic' => 'test-admin',
            'phone' => '+38 000 00 00',
            'email' => 'test-admin@gmail.com',
            'password' => bcrypt('1Gfhjkm1'),
            'active' => true,
        ]);
    }
}
