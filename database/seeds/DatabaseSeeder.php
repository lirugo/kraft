<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(LaratrustSeeder::class);
        $this->call(RegionsSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(DistributorCompanySeed::class);
        $this->call(ConstantsSeeder::class);
        $this->call(NewsSeeder::class);
    }
}
