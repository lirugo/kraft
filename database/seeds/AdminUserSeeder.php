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
            'phone' => '+38 067 417 13 32',
            'email' => 'admin@app.com',
            'password' => bcrypt('password'),
            'active' => true,
        ]);
    }
}
