<?php

use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'vendor_code_1c'=>'1',
            'name'=>'east',
            'email'=>'east@app.com',
            'dateofbirth'=>'2000-01-01',
            'sex'=>'x',
            'phone'=> '+380674171332',
            'company'=>'companynamecenter',
            'password'=>bcrypt('password'),
            'active'=>true,
            'regionname'=>'east',
            'two_factor_type'=>'off'
        ] );

        DB::table('role_user')->insert([
            'role_id'=>'5',
            'user_id'=>'10',
            'user_type'=>'App\User'
        ] );

        DB::table('users')->insert([
            'vendor_code_1c'=>'1',
            'name'=>'south',
            'email'=>'south@app.com',
            'dateofbirth'=>'2000-01-01',
            'sex'=>'x',
            'phone'=> '+380674171332',
            'company'=>'companynamecenter',
            'password'=>bcrypt('password'),
            'active'=>true,
            'regionname'=>'south',
            'two_factor_type'=>'off'
        ] );

        DB::table('role_user')->insert([
            'role_id'=>'5',
            'user_id'=>'11',
            'user_type'=>'App\User'
        ] );

        DB::table('users')->insert([
            'vendor_code_1c'=>'1',
            'name'=>'west',
            'email'=>'west@app.com',
            'dateofbirth'=>'2000-01-01',
            'sex'=>'x',
            'phone'=> '+380674171332',
            'company'=>'companynamecenter',
            'password'=>bcrypt('password'),
            'active'=>true,
            'regionname'=>'west',
            'two_factor_type'=>'off'
        ] );

        DB::table('role_user')->insert([
            'role_id'=>'5',
            'user_id'=>'12',
            'user_type'=>'App\User'
        ] );
    }
}
