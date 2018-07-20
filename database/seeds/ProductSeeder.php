<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 1,
            'vendor_code' => '00-00001004',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '1200',
            'color' => 9003,
            'description' => 'Профіль KRAFT Fortis HD T-24 1200*25*24мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 2,
            'vendor_code' => '00-00001003',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '3600',
            'color' => 9003,
            'description' => 'Профіль KRAFT Fortis HD T-24 3600*38*24мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 3,
            'vendor_code' => '00-00001005',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '600',
            'color' => 9003,
            'description' => 'Профіль KRAFT Fortis HD T-24 600*25*24мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 4,
            'vendor_code' => '00-00000207',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '1200',
            'color' => 7024,
            'description' => 'Профіль KRAFT Fortis T-15 1200*25*15мм RAL 7024',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 5,
            'vendor_code' => '00-00000210',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '1200',
            'color' => 8017,
            'description' => 'Профіль KRAFT Fortis T-15 1200*25*15мм RAL 8017',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 6,
            'vendor_code' => '00-00000214',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '1200',
            'color' => 9003,
            'description' => 'Профіль KRAFT Fortis T-15 1200*25*15мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 7,
            'vendor_code' => '00-00000219',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '1200',
            'color' => 9005,
            'description' => 'Профіль KRAFT Fortis T-15 1200*25*15мм RAL 9005',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 8,
            'vendor_code' => '00-00000226',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '1200',
            'color' => 9006,
            'description' => 'Профіль KRAFT Fortis T-15 1200*25*15мм RAL 9006',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 9,
            'vendor_code' => '00-00000242',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '1200',
            'color' => 9007,
            'description' => 'Профіль KRAFT Fortis T-15 1200*25*15мм RAL 9007',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 10,
            'vendor_code' => '00-00000209',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '3600',
            'color' => 7024,
            'description' => 'Профіль KRAFT Fortis T-15 3600*38*15мм RAL 7024',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 11,
            'vendor_code' => '00-00000212',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '3600',
            'color' => 8017,
            'description' => 'Профіль KRAFT Fortis T-15 3600*38*15мм RAL 8017',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 12,
            'vendor_code' => '00-00000217',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '3600',
            'color' => 9003,
            'description' => 'Профіль KRAFT Fortis T-15 3600*38*15мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 13,
            'vendor_code' => '00-00000223',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '3600',
            'color' => 9005,
            'description' => 'Профіль KRAFT Fortis T-15 3600*38*15мм RAL 9005',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 14,
            'vendor_code' => '00-00000231',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '3600',
            'color' => 9006,
            'description' => 'Профіль KRAFT Fortis T-15 3600*38*15мм RAL 9006',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 15,
            'vendor_code' => '00-00000240',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '3600',
            'color' => 9007,
            'description' => 'Профіль KRAFT Fortis T-15 3600*38*15мм RAL 9007',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 16,
            'vendor_code' => '00-00000208',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '600',
            'color' => 7024,
            'description' => 'Профіль KRAFT Fortis T-15 600*25*15мм RAL 7024',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 17,
            'vendor_code' => '00-00000211',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '600',
            'color' => 8017,
            'description' => 'Профіль KRAFT Fortis T-15 600*25*15мм RAL 8017',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 18,
            'vendor_code' => '00-00000216',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '600',
            'color' => 9003,
            'description' => 'Профіль KRAFT Fortis T-15 600*25*15мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 19,
            'vendor_code' => '00-00000221',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '600',
            'color' => 9005,
            'description' => 'Профіль KRAFT Fortis T-15 600*25*15мм RAL 9005',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 20,
            'vendor_code' => '00-00000229',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '600',
            'color' => 9006,
            'description' => 'Профіль KRAFT Fortis T-15 600*25*15мм RAL 9006',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 21,
            'vendor_code' => '00-00000241',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 15,
            'profile' => '600',
            'color' => 9007,
            'description' => 'Профіль KRAFT Fortis T-15 600*25*15мм RAL 9007',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 22,
            'vendor_code' => '00-00000152',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '1200',
            'color' => 1015,
            'description' => 'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 1015',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 23,
            'vendor_code' => '00-00000155',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '1200',
            'color' => 1033,
            'description' => 'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 1033',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 24,
            'vendor_code' => '00-00000145',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '1200',
            'color' => 7024,
            'description' => 'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 7024',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 25,
            'vendor_code' => '00-00000148',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '1200',
            'color' => 8017,
            'description' => 'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 8017',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 26,
            'vendor_code' => '00-00000134',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '1200',
            'color' => 9003,
            'description' => 'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 27,
            'vendor_code' => '00-00000136',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '1200',
            'color' => 9005,
            'description' => 'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 9005',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 28,
            'vendor_code' => '00-00000139',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '1200',
            'color' => 9006,
            'description' => 'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 9006',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 29,
            'vendor_code' => '00-00000142',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '1200',
            'color' => 9007,
            'description' => 'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 9007',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 30,
            'vendor_code' => '00-00000996',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '300',
            'color' => 9003,
            'description' => 'Профіль KRAFT Fortis T-24 300*25*24мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 31,
            'vendor_code' => '00-00001256',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '3000',
            'color' => 7024,
            'description' => 'Профіль KRAFT Fortis T-24 3000*38*24мм RAL 7024',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 32,
            'vendor_code' => '00-00000153',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '3600',
            'color' => 1015,
            'description' => 'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 1015',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 33,
            'vendor_code' => '00-00000157',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '3600',
            'color' => 1033,
            'description' => 'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 1033',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 34,
            'vendor_code' => '00-00000146',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '3600',
            'color' => 7024,
            'description' => 'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 7024',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 35,
            'vendor_code' => '00-00000149',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '3600',
            'color' => 8017,
            'description' => 'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 8017',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 36,
            'vendor_code' => '00-00000135',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '3600',
            'color' => 9003,
            'description' => 'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 37,
            'vendor_code' => '00-00000138',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '3600',
            'color' => 9005,
            'description' => 'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 9005',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 38,
            'vendor_code' => '00-00000140',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '3600',
            'color' => 9006,
            'description' => 'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 9006',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 39,
            'vendor_code' => '00-00000143',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '3600',
            'color' => 9007,
            'description' => 'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 9007',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 40,
            'vendor_code' => '00-00001257',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '5000',
            'color' => 7024,
            'description' => 'Профіль KRAFT Fortis T-24 5000*38*24мм RAL 7024',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 41,
            'vendor_code' => '00-00000154',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '600',
            'color' => 1015,
            'description' => 'Профіль KRAFT Fortis T-24 600*25*24мм RAL 1015',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 42,
            'vendor_code' => '00-00000159',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '600',
            'color' => 1033,
            'description' => 'Профіль KRAFT Fortis T-24 600*25*24мм RAL 1033',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 43,
            'vendor_code' => '00-00000147',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '600',
            'color' => 7024,
            'description' => 'Профіль KRAFT Fortis T-24 600*25*24мм RAL 7024',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 44,
            'vendor_code' => '00-00000150',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '600',
            'color' => 8017,
            'description' => 'Профіль KRAFT Fortis T-24 600*25*24мм RAL 8017',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 45,
            'vendor_code' => '00-00000131',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '600',
            'color' => 9003,
            'description' => 'Профіль KRAFT Fortis T-24 600*25*24мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 46,
            'vendor_code' => '00-00000137',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '600',
            'color' => 9005,
            'description' => 'Профіль KRAFT Fortis T-24 600*25*24мм RAL 9005',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 47,
            'vendor_code' => '00-00000141',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '600',
            'color' => 9006,
            'description' => 'Профіль KRAFT Fortis T-24 600*25*24мм RAL 9006',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 48,
            'vendor_code' => '00-00000144',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 24,
            'profile' => '600',
            'color' => 9007,
            'description' => 'Профіль KRAFT Fortis T-24 600*25*24мм RAL 9007',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 49,
            'vendor_code' => '00-00000243',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 15,
            'profile' => '1200',
            'color' => 9003,
            'description' => 'Профіль KRAFT Nova T-15 1200*25*24мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 50,
            'vendor_code' => '00-00000245',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 15,
            'profile' => '3600',
            'color' => 9003,
            'description' => 'Профіль KRAFT Nova T-15 3600*38*24мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 51,
            'vendor_code' => '00-00000244',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 15,
            'profile' => '600',
            'color' => 9003,
            'description' => 'Профіль KRAFT Nova T-15 600*25*24мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 52,
            'vendor_code' => '00-00000204',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '1200',
            'color' => 1013,
            'description' => 'Профіль KRAFT Nova T-24 1200*25*24мм RAL 1013',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 53,
            'vendor_code' => '00-00000175',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '1200',
            'color' => 7024,
            'description' => 'Профіль KRAFT Nova T-24 1200*25*24мм RAL 7024',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 54,
            'vendor_code' => '00-00001267',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '1200',
            'color' => 8017,
            'description' => 'Профіль KRAFT Nova T-24 1200*25*24мм RAL 8017',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 55,
            'vendor_code' => '00-00000192',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '1200',
            'color' => 9003,
            'description' => 'Профіль KRAFT Nova T-24 1200*25*24мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 56,
            'vendor_code' => '00-00000195',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '1200',
            'color' => 9005,
            'description' => 'Профіль KRAFT Nova T-24 1200*25*24мм RAL 9005',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 57,
            'vendor_code' => '00-00000198',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '1200',
            'color' => 9006,
            'description' => 'Профіль KRAFT Nova T-24 1200*25*24мм RAL 9006',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 58,
            'vendor_code' => '00-00000201',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '1200',
            'color' => 9007,
            'description' => 'Профіль KRAFT Nova T-24 1200*25*24мм RAL 9007',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 59,
            'vendor_code' => '00-00000998',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '300',
            'color' => 9003,
            'description' => 'Профіль KRAFT Nova T-24 300*25*24мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 60,
            'vendor_code' => '00-00000997',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '300',
            'color' => 9003,
            'description' => 'Профіль KRAFT Nova T-24 300*38*24мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 61,
            'vendor_code' => '00-00000206',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '3600',
            'color' => 1013,
            'description' => 'Профіль KRAFT Nova T-24 3600*25*24мм RAL 1013',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 62,
            'vendor_code' => '00-00000184',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '3600',
            'color' => 7024,
            'description' => 'Профіль KRAFT Nova T-24 3600*38*24мм RAL 7024',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 63,
            'vendor_code' => '00-00000190',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '3600',
            'color' => 8017,
            'description' => 'Профіль KRAFT Nova T-24 3600*38*24мм RAL 8017',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 64,
            'vendor_code' => '00-00000194',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '3600',
            'color' => 9003,
            'description' => 'Профіль KRAFT Nova T-24 3600*38*24мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 65,
            'vendor_code' => '00-00000197',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '3600',
            'color' => 9005,
            'description' => 'Профіль KRAFT Nova T-24 3600*38*24мм RAL 9005',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 66,
            'vendor_code' => '00-00000200',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '3600',
            'color' => 9006,
            'description' => 'Профіль KRAFT Nova T-24 3600*38*24мм RAL 9006',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 67,
            'vendor_code' => '00-00000203',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '3600',
            'color' => 9007,
            'description' => 'Профіль KRAFT Nova T-24 3600*38*24мм RAL 9007',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 68,
            'vendor_code' => '00-00000205',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '600',
            'color' => 1013,
            'description' => 'Профіль KRAFT Nova T-24 600*25*24мм RAL 1013',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 69,
            'vendor_code' => '00-00000188',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '600',
            'color' => 7024,
            'description' => 'Профіль KRAFT Nova T-24 600*25*24мм RAL 7024',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 70,
            'vendor_code' => '00-00000191',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '600',
            'color' => 8017,
            'description' => 'Профіль KRAFT Nova T-24 600*25*24мм RAL 8017',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 71,
            'vendor_code' => '00-00000193',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '600',
            'color' => 9003,
            'description' => 'Профіль KRAFT Nova T-24 600*25*24мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 72,
            'vendor_code' => '00-00000196',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '600',
            'color' => 9005,
            'description' => 'Профіль KRAFT Nova T-24 600*25*24мм RAL 9005',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 73,
            'vendor_code' => '00-00000199',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '600',
            'color' => 9006,
            'description' => 'Профіль KRAFT Nova T-24 600*25*24мм RAL 9006',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profiles')->insert([
            'id' => 74,
            'vendor_code' => '00-00000202',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 24,
            'profile' => '600',
            'color' => 9007,
            'description' => 'Профіль KRAFT Nova T-24 600*25*24мм RAL 9007',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        //angle
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 1,
            'vendor_code' => '00-00000888',
            'price' => '12',
            'model' => 'Fortis',
            'profile_thickness' => 0,
            'profile' => 'L',
            'color' => 9003,
            'description' => 'Профіль пристінний KRAFT Fortis L 19*24*3000 мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 2,
            'vendor_code' => '00-00001277',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'L',
            'color' => 7011,
            'description' => 'Профіль пристінний KRAFT L 19*24*3000 мм RAL 7011',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 3,
            'vendor_code' => '00-00001272',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'L',
            'color' => 7016,
            'description' => 'Профіль пристінний KRAFT L 19*24*3000 мм RAL 7016',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 4,
            'vendor_code' => '00-00000891',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'L',
            'color' => 7024,
            'description' => 'Профіль пристінний KRAFT L 19*24*3000 мм RAL 7024',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 5,
            'vendor_code' => '00-00000892',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'L',
            'color' => 8017,
            'description' => 'Профіль пристінний KRAFT L 19*24*3000 мм RAL 8017',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 6,
            'vendor_code' => '00-00000893',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'L',
            'color' => 9005,
            'description' => 'Профіль пристінний KRAFT L 19*24*3000 мм RAL 9005',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 7,
            'vendor_code' => '00-00000894',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'L',
            'color' => 9006,
            'description' => 'Профіль пристінний KRAFT L 19*24*3000 мм RAL 9006',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 8,
            'vendor_code' => '00-00000895',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'L',
            'color' => 9007,
            'description' => 'Профіль пристінний KRAFT L 19*24*3000 мм RAL 9007',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 9,
            'vendor_code' => '00-00000999',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'L',
            'color' => NULL,
            'description' => 'Профіль пристінний KRAFT L 19*24*3000 мм Дерево',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 10,
            'vendor_code' => '00-00001180',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'L',
            'color' => 1015,
            'description' => 'Профіль пристінний KRAFT L 19*24*3000мм RAL 1015',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 11,
            'vendor_code' => '00-00001182',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'L',
            'color' => 1033,
            'description' => 'Профіль пристінний KRAFT L 19*24*3000мм RAL 1033',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 12,
            'vendor_code' => '00-00001199',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'L',
            'color' => 2004,
            'description' => 'Профіль пристінний KRAFT L 19*24*3000мм RAL 2004',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 13,
            'vendor_code' => '00-00001000',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'L',
            'color' => 7021,
            'description' => 'Профіль пристінний KRAFT L 19*24*3000мм RAL 7021',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 14,
            'vendor_code' => '00-00001185',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'L',
            'color' => 7035,
            'description' => 'Профіль пристінний KRAFT L 19*24*3000мм RAL 7035',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 15,
            'vendor_code' => '00-00001297',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'L',
            'color' => 8025,
            'description' => 'Профіль пристінний KRAFT L 19*24*3000мм RAL 8025',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 16,
            'vendor_code' => '00-00000889',
            'price' => '12',
            'model' => 'Nova',
            'profile_thickness' => 0,
            'profile' => 'L',
            'color' => 9003,
            'description' => 'Профіль пристінний KRAFT Nova L 19*24*3000 мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 17,
            'vendor_code' => '00-00000890',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'W',
            'color' => 9003,
            'description' => 'Профіль пристінний KRAFT W 20*15*8*15*3000 мм RAL 9003',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 18,
            'vendor_code' => '00-00001311',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'W',
            'color' => 9005,
            'description' => 'Профіль пристінний KRAFT W 20*15*8*15*3000 мм RAL 9005',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_angles')->insert([
            'id' => 19,
            'vendor_code' => '00-00001002',
            'price' => '12',
            'model' => '',
            'profile_thickness' => 0,
            'profile' => 'W',
            'color' => 9006,
            'description' => 'Профіль пристінний KRAFT W 20*15*8*15*3000 мм RAL 9006',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        //susps
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 1,
            'vendor_code' => '00-00000864',
            'price' => '12',
            'model' => 'Дріт з вушком',
            'profile_thickness' => 0,
            'profile' => '1000',
            'color' => 0,
            'description' => 'Дріт з вушком 1000 мм',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 2,
            'vendor_code' => '00-00000850',
            'price' => '12',
            'model' => 'Дріт з вушком',
            'profile_thickness' => 0,
            'profile' => '1000',
            'color' => 0,
            'description' => 'Дріт з вушком 1000 мм чорний',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 3,
            'vendor_code' => '00-00000865',
            'price' => '12',
            'model' => 'Дріт з вушком',
            'profile_thickness' => 0,
            'profile' => '1500',
            'color' => 0,
            'description' => 'Дріт з вушком 1500 мм',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 4,
            'vendor_code' => '00-00000851',
            'price' => '12',
            'model' => 'Дріт з вушком',
            'profile_thickness' => 0,
            'profile' => '1500',
            'color' => 0,
            'description' => 'Дріт з вушком 1500 мм чорний',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 5,
            'vendor_code' => '00-00000866',
            'price' => '12',
            'model' => 'Дріт з вушком',
            'profile_thickness' => 0,
            'profile' => '2000',
            'color' => 0,
            'description' => 'Дріт з вушком 2000 мм',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 6,
            'vendor_code' => '00-00000852',
            'price' => '12',
            'model' => 'Дріт з вушком',
            'profile_thickness' => 0,
            'profile' => '2000',
            'color' => 0,
            'description' => 'Дріт з вушком 2000 мм чорний',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 7,
            'vendor_code' => '00-00000867',
            'price' => '12',
            'model' => 'Дріт з вушком',
            'profile_thickness' => 0,
            'profile' => '250',
            'color' => 0,
            'description' => 'Дріт з вушком 250 мм.',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 8,
            'vendor_code' => '00-00000853',
            'price' => '12',
            'model' => 'Дріт з вушком',
            'profile_thickness' => 0,
            'profile' => '250',
            'color' => 0,
            'description' => 'Дріт з вушком 250 мм. чорний',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 9,
            'vendor_code' => '00-00000868',
            'price' => '12',
            'model' => 'Дріт з вушком',
            'profile_thickness' => 0,
            'profile' => '2500',
            'color' => 0,
            'description' => 'Дріт з вушком 2500 мм',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 10,
            'vendor_code' => '00-00000869',
            'price' => '12',
            'model' => 'Дріт з вушком',
            'profile_thickness' => 0,
            'profile' => '3000',
            'color' => 0,
            'description' => 'Дріт з вушком 3000 мм',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 11,
            'vendor_code' => '00-00000854',
            'price' => '12',
            'model' => 'Дріт з вушком',
            'profile_thickness' => 0,
            'profile' => '3000',
            'color' => 0,
            'description' => 'Дріт з вушком 3000 мм чорний',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 12,
            'vendor_code' => '00-00000870',
            'price' => '12',
            'model' => 'Дріт з вушком',
            'profile_thickness' => 0,
            'profile' => '500',
            'color' => 0,
            'description' => 'Дріт з вушком 500 мм',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 13,
            'vendor_code' => '00-00000855',
            'price' => '12',
            'model' => 'Дріт з вушком',
            'profile_thickness' => 0,
            'profile' => '500',
            'color' => 0,
            'description' => 'Дріт з вушком 500 мм чорний',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 14,
            'vendor_code' => '00-00000871',
            'price' => '12',
            'model' => 'Дріт з вушком',
            'profile_thickness' => 0,
            'profile' => '750',
            'color' => 0,
            'description' => 'Дріт з вушком 750 мм',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 15,
            'vendor_code' => '00-00000856',
            'price' => '12',
            'model' => 'Дріт з вушком',
            'profile_thickness' => 0,
            'profile' => '750',
            'color' => 0,
            'description' => 'Дріт з вушком 750 мм чорний',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 16,
            'vendor_code' => '00-00000857',
            'price' => '12',
            'model' => 'Дріт з гаком',
            'profile_thickness' => 0,
            'profile' => '1000',
            'color' => 0,
            'description' => 'Дріт з гаком 1000 мм. чорний',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 17,
            'vendor_code' => '00-00000858',
            'price' => '12',
            'model' => 'Дріт з гаком',
            'profile_thickness' => 0,
            'profile' => '125',
            'color' => 0,
            'description' => 'Дріт з гаком 125 мм. чорний',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 18,
            'vendor_code' => '00-00000872',
            'price' => '12',
            'model' => 'Дріт з гаком',
            'profile_thickness' => 0,
            'profile' => '1500',
            'color' => 0,
            'description' => 'Дріт з гаком 1500 мм. ',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 19,
            'vendor_code' => '00-00000859',
            'price' => '12',
            'model' => 'Дріт з гаком',
            'profile_thickness' => 0,
            'profile' => '1500',
            'color' => 0,
            'description' => 'Дріт з гаком 1500 мм. чорний',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 20,
            'vendor_code' => '00-00000860',
            'price' => '12',
            'model' => 'Дріт з гаком',
            'profile_thickness' => 0,
            'profile' => '2000',
            'color' => 0,
            'description' => 'Дріт з гаком 2000 мм. чорний',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 21,
            'vendor_code' => '00-00000873',
            'price' => '12',
            'model' => 'Дріт з гаком',
            'profile_thickness' => 0,
            'profile' => '250',
            'color' => 0,
            'description' => 'Дріт з гаком 250 мм.',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 22,
            'vendor_code' => '00-00000861',
            'price' => '12',
            'model' => 'Дріт з гаком',
            'profile_thickness' => 0,
            'profile' => '250',
            'color' => 0,
            'description' => 'Дріт з гаком 250 мм. чорний',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 23,
            'vendor_code' => '00-00000862',
            'price' => '12',
            'model' => 'Дріт з гаком',
            'profile_thickness' => 0,
            'profile' => '3000',
            'color' => 0,
            'description' => 'Дріт з гаком 3000 мм чорний',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 24,
            'vendor_code' => '00-00000874',
            'price' => '12',
            'model' => 'Дріт з гаком',
            'profile_thickness' => 0,
            'profile' => '500',
            'color' => 0,
            'description' => 'Дріт з гаком 500 мм. ',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 25,
            'vendor_code' => '00-00000863',
            'price' => '12',
            'model' => 'Дріт з гаком',
            'profile_thickness' => 0,
            'profile' => '500',
            'color' => 0,
            'description' => 'Дріт з гаком 500 мм. чорний',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        DB::table('vendor_code_t_profile_susps')->insert([
            'id' => 26,
            'vendor_code' => '00-00000875',
            'price' => '12',
            'model' => 'Пружинный подвес',
            'profile_thickness' => NULL,
            'profile' => NULL,
            'color' => NULL,
            'description' => 'Пружинный подвес',
            'created_at' => NULL,
            'updated_at' => NULL
        ]);


        //PROFILE GRILYATO
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (1,123900340050206,50,\'GLK-15\',\'П\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 50 RAL 9003\',9.96,NULL,NULL);');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (2,123900340075206,75,\'GLK-15\',\'П\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 75 RAL 9003\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (3,123900340086206,86,\'GLK-15\',\'П\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 86 RAL 9003\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (4,123900340100206,100,\'GLK-15\',\'П\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 100 RAL 9003\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (5,123900340120206,120,\'GLK-15\',\'П\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 120 RAL 9003\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (6,123900340150206,150,\'GLK-15\',\'П\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 150 RAL 9003\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (7,123900340200206,200,\'GLK-15\',\'П\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 200 RAL 9003\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (8,123900540050206,50,\'GLK-15\',\'П\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 50 RAL 9005\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (9,123900540075206,75,\'GLK-15\',\'П\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 75 RAL 9005\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (10,123900540086206,86,\'GLK-15\',\'П\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 86 RAL 9005\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (11,123900540100206,100,\'GLK-15\',\'П\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 100 RAL 9005\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (12,123900540120206,120,\'GLK-15\',\'П\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 120 RAL 9005\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (13,123900540150206,150,\'GLK-15\',\'П\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 150 RAL 9005\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (14,123900540200206,200,\'GLK-15\',\'П\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 200 RAL 9005\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (15,123900640050206,50,\'GLK-15\',\'П\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 50 RAL 9006\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (16,123900640075206,75,\'GLK-15\',\'П\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 75 RAL 9006\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (17,123900640086206,86,\'GLK-15\',\'П\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 86 RAL 9006\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (18,123900640100206,100,\'GLK-15\',\'П\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 100 RAL 9006\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (19,123900640120206,120,\'GLK-15\',\'П\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 120 RAL 9006\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (20,123900640150206,150,\'GLK-15\',\'П\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 150 RAL 9006\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (21,123900640200206,200,\'GLK-15\',\'П\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 200 RAL 9006\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (22,123702440050206,50,\'GLK-15\',\'П\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 50 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (23,123702440075206,75,\'GLK-15\',\'П\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 75 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (24,123702440086206,86,\'GLK-15\',\'П\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 86 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (25,123702440100206,100,\'GLK-15\',\'П\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 100 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (26,123702440120206,120,\'GLK-15\',\'П\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 120 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (27,123702440150206,150,\'GLK-15\',\'П\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 150 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (28,123702440200206,200,\'GLK-15\',\'П\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 200 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (29,123801740050206,50,\'GLK-15\',\'П\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 50 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (30,123801740075206,75,\'GLK-15\',\'П\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 75 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (31,123801740086206,86,\'GLK-15\',\'П\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 86 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (32,123801740100206,100,\'GLK-15\',\'П\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 100 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (33,123801740120206,120,\'GLK-15\',\'П\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 120 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (34,123801740150206,150,\'GLK-15\',\'П\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 150 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (35,123801740200206,200,\'GLK-15\',\'П\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 200 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (36,123000140050206,50,\'GLK-15\',\'П\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 50 RAL Дерево\',13.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (37,123000140075206,75,\'GLK-15\',\'П\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 75 RAL Дерево\',13.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (38,123000140086206,86,\'GLK-15\',\'П\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 86 RAL Дерево\',13.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (39,123000140100206,100,\'GLK-15\',\'П\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 100 RAL Дерево\',13.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (40,123000140120206,120,\'GLK-15\',\'П\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 120 RAL Дерево\',13.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (41,123000140150206,150,\'GLK-15\',\'П\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 150 RAL Дерево\',13.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (42,123000140200206,200,\'GLK-15\',\'П\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 200 RAL Дерево\',13.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (43,123000040050206,50,\'GLK-15\',\'П\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 50 ANY RAL\',19.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (44,123000040075206,75,\'GLK-15\',\'П\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 75 ANY RAL\',19.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (45,123000040086206,86,\'GLK-15\',\'П\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 86 ANY RAL\',19.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (46,123000040100206,100,\'GLK-15\',\'П\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 100 ANY RAL\',19.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (47,123000040120206,120,\'GLK-15\',\'П\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 120 ANY RAL\',19.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (48,123000040150206,150,\'GLK-15\',\'П\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 150 ANY RAL\',19.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (49,123000040200206,200,\'GLK-15\',\'П\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "П" яч. 200 ANY RAL\',19.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (50,123900340050106,50,\'GLK-15\',\'М\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 50 RAL 9003\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (51,123900340075106,75,\'GLK-15\',\'М\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 75 RAL 9003\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (52,123900340086106,86,\'GLK-15\',\'М\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 86 RAL 9003\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (53,123900340100106,100,\'GLK-15\',\'М\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 100 RAL 9003\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (54,123900340120106,120,\'GLK-15\',\'М\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 120 RAL 9003\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (55,123900340150106,150,\'GLK-15\',\'М\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 150 RAL 9003\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (56,123900340200106,200,\'GLK-15\',\'М\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 200 RAL 9003\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (57,123900540050106,50,\'GLK-15\',\'М\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 50 RAL 9005\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (58,123900540075106,75,\'GLK-15\',\'М\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 75 RAL 9005\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (59,123900540086106,86,\'GLK-15\',\'М\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 86 RAL 9005\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (60,123900540100106,100,\'GLK-15\',\'М\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 100 RAL 9005\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (61,123900540120106,120,\'GLK-15\',\'М\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 120 RAL 9005\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (62,123900540150106,150,\'GLK-15\',\'М\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 150 RAL 9005\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (63,123900540200106,200,\'GLK-15\',\'М\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 200 RAL 9005\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (64,123900640050106,50,\'GLK-15\',\'М\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 50 RAL 9006\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (65,123900640075106,75,\'GLK-15\',\'М\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 75 RAL 9006\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (66,123900640086106,86,\'GLK-15\',\'М\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 86 RAL 9006\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (67,123900640100106,100,\'GLK-15\',\'М\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 100 RAL 9006\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (68,123900640120106,120,\'GLK-15\',\'М\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 120 RAL 9006\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (69,123900640150106,150,\'GLK-15\',\'М\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 150 RAL 9006\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (70,123900640200106,200,\'GLK-15\',\'М\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 200 RAL 9006\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (71,123702440050106,50,\'GLK-15\',\'М\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 50 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (72,123702440075106,75,\'GLK-15\',\'М\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 75 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (73,123702440086106,86,\'GLK-15\',\'М\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 86 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (74,123702440100106,100,\'GLK-15\',\'М\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 100 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (75,123702440120106,120,\'GLK-15\',\'М\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 120 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (76,123702440150106,150,\'GLK-15\',\'М\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 150 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (77,123702440200106,200,\'GLK-15\',\'М\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 200 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (78,123801740050106,50,\'GLK-15\',\'М\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 50 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (79,123801740075106,75,\'GLK-15\',\'М\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 75 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (80,123801740086106,86,\'GLK-15\',\'М\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 86 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (81,123801740100106,100,\'GLK-15\',\'М\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 100 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (82,123801740120106,120,\'GLK-15\',\'М\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 120 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (83,123801740150106,150,\'GLK-15\',\'М\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 150 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (84,123801740200106,200,\'GLK-15\',\'М\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 200 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (85,123000140050106,50,\'GLK-15\',\'М\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 50 RAL Дерево\',13.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (86,123000140075106,75,\'GLK-15\',\'М\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 75 RAL Дерево\',13.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (87,123000140086106,86,\'GLK-15\',\'М\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 86 RAL Дерево\',13.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (88,123000140100106,100,\'GLK-15\',\'М\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 100 RAL Дерево\',13.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (89,123000140120106,120,\'GLK-15\',\'М\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 120 RAL Дерево\',13.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (90,123000140150106,150,\'GLK-15\',\'М\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 150 RAL Дерево\',13.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (91,123000140200106,200,\'GLK-15\',\'М\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 200 RAL Дерево\',13.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (92,123000040050106,50,\'GLK-15\',\'М\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 50 ANY RAL\',19.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (93,123000040075106,75,\'GLK-15\',\'М\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 75 ANY RAL\',19.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (94,123000040086106,86,\'GLK-15\',\'М\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 86 ANY RAL\',19.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (95,123000040100106,100,\'GLK-15\',\'М\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 100 ANY RAL\',19.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (96,123000040120106,120,\'GLK-15\',\'М\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 120 ANY RAL\',19.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (97,123000040150106,150,\'GLK-15\',\'М\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 150 ANY RAL\',19.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (98,123000040200106,200,\'GLK-15\',\'М\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм "М" яч. 200 ANY RAL\',19.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (99,123900340050306,50,\'GLK-15\',\'торцевой\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 50 RAL 9003\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (100,123900340075306,75,\'GLK-15\',\'торцевой\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 75 RAL 9003\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (101,123900340086306,86,\'GLK-15\',\'торцевой\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 86 RAL 9003\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (102,123900340100306,100,\'GLK-15\',\'торцевой\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 100 RAL 9003\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (103,123900340120306,120,\'GLK-15\',\'торцевой\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 120 RAL 9003\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (104,123900340150306,150,\'GLK-15\',\'торцевой\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 150 RAL 9003\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (105,123900340200306,200,\'GLK-15\',\'торцевой\',\'9003\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 200 RAL 9003\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (106,123900540050306,50,\'GLK-15\',\'торцевой\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 50 RAL 9005\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (107,123900540075306,75,\'GLK-15\',\'торцевой\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 75 RAL 9005\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (108,123900540086306,86,\'GLK-15\',\'торцевой\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 86 RAL 9005\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (109,123900540100306,100,\'GLK-15\',\'торцевой\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 100 RAL 9005\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (110,123900540120306,120,\'GLK-15\',\'торцевой\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 120 RAL 9005\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (111,123900540150306,150,\'GLK-15\',\'торцевой\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 150 RAL 9005\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (112,123900540200306,200,\'GLK-15\',\'торцевой\',\'9005\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 200 RAL 9005\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (113,123900640050306,50,\'GLK-15\',\'торцевой\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 50 RAL 9006\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (114,123900640075306,75,\'GLK-15\',\'торцевой\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 75 RAL 9006\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (115,123900640086306,86,\'GLK-15\',\'торцевой\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 86 RAL 9006\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (116,123900640100306,100,\'GLK-15\',\'торцевой\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 100 RAL 9006\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (117,123900640120306,120,\'GLK-15\',\'торцевой\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 120 RAL 9006\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (118,123900640150306,150,\'GLK-15\',\'торцевой\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 150 RAL 9006\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (119,123900640200306,200,\'GLK-15\',\'торцевой\',\'9006\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 200 RAL 9006\',4.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (120,123702440050306,50,\'GLK-15\',\'торцевой\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 50 RAL 7024\',5.48,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (121,123702440075306,75,\'GLK-15\',\'торцевой\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 75 RAL 7024\',5.48,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (122,123702440086306,86,\'GLK-15\',\'торцевой\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 86 RAL 7024\',5.48,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (123,123702440100306,100,\'GLK-15\',\'торцевой\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 100 RAL 7024\',5.48,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (124,123702440120306,120,\'GLK-15\',\'торцевой\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 120 RAL 7024\',5.48,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (125,123702440150306,150,\'GLK-15\',\'торцевой\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 150 RAL 7024\',5.48,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (126,123702440200306,200,\'GLK-15\',\'торцевой\',\'7024\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 200 RAL 7024\',5.48,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (127,123801740050306,50,\'GLK-15\',\'торцевой\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 50 RAL 8017\',5.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (128,123801740075306,75,\'GLK-15\',\'торцевой\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 75 RAL 8017\',5.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (129,123801740086306,86,\'GLK-15\',\'торцевой\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 86 RAL 8017\',5.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (130,123801740100306,100,\'GLK-15\',\'торцевой\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 100 RAL 8017\',5.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (131,123801740120306,120,\'GLK-15\',\'торцевой\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 120 RAL 8017\',5.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (132,123801740150306,150,\'GLK-15\',\'торцевой\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 150 RAL 8017\',5.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (133,123801740200306,200,\'GLK-15\',\'торцевой\',\'8017\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 200 RAL 8017\',5.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (134,123000140050306,50,\'GLK-15\',\'торцевой\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 50 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (135,123000140075306,75,\'GLK-15\',\'торцевой\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 75 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (136,123000140086306,86,\'GLK-15\',\'торцевой\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 86 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (137,123000140100306,100,\'GLK-15\',\'торцевой\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 100 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (138,123000140120306,120,\'GLK-15\',\'торцевой\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 120 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (139,123000140150306,150,\'GLK-15\',\'торцевой\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 150 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (140,123000140200306,200,\'GLK-15\',\'торцевой\',\'Дерево\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 200 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (141,123000040050306,50,\'GLK-15\',\'торцевой\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 50 ANY RAL\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (142,123000040075306,75,\'GLK-15\',\'торцевой\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 75 ANY RAL\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (143,123000040086306,86,\'GLK-15\',\'торцевой\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 86 ANY RAL\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (144,123000040100306,100,\'GLK-15\',\'торцевой\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 100 ANY RAL\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (145,123000040120306,120,\'GLK-15\',\'торцевой\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 120 ANY RAL\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (146,123000040150306,150,\'GLK-15\',\'торцевой\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 150 ANY RAL\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (147,123000040200306,200,\'GLK-15\',\'торцевой\',\'ANY RAL\',600,15,40,\'Профіль Грильято GLK-15 600х40 мм торцевой яч. 200 ANY RAL\',9.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (148,15601063015,0,\'KRAFT LED\',\'T\',\'0\',600,15,0,\'Набір освітлення KRAFT LED-T-15 600 мм 30 Вт\',595.84,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (149,15601123015,0,\'KRAFT LED\',\'T\',\'0\',1200,15,0,\'Набір освітлення KRAFT LED-T-15 1200 мм 30 Вт\',595.84,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (150,15602063015,0,\'KRAFT LED\',\'G\',\'0\',600,15,0,\'Набір освітлення KRAFT LED-G-15  600 мм 30 Вт\',595.84,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (151,15602123015,0,\'KRAFT LED\',\'G\',\'0\',1200,15,0,\'Набір освітлення KRAFT LED-G-15  1200 мм 30 Вт\',595.84,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (152,15601063024,0,\'KRAFT LED\',\'T\',\'0\',600,24,0,\'Набір освітлення KRAFT LED-T 600 мм 30 Вт\',595.84,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (153,15601123024,0,\'KRAFT LED\',\'T\',\'0\',1200,24,0,\'Набір освітлення KRAFT LED-T 1200 мм 30 Вт\',595.84,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (154,15602063024,0,\'KRAFT LED\',\'G\',\'0\',600,24,0,\'Набір освітлення KRAFT LED-G  600 мм 30 Вт\',595.84,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (155,15602123024,0,\'KRAFT LED\',\'G\',\'0\',1200,24,0,\'Набір освітлення KRAFT LED-G  1200 мм 30 Вт\',595.84,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (156,122900340050106,50,\'Грильято пирамидальная\',\'М\',\'9003\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 50 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (157,122900340075106,75,\'Грильято пирамидальная\',\'М\',\'9003\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 75 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (158,122900340086106,86,\'Грильято пирамидальная\',\'М\',\'9003\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 86 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (159,122900340100106,100,\'Грильято пирамидальная\',\'М\',\'9003\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 100 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (160,122900340120106,120,\'Грильято пирамидальная\',\'М\',\'9003\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 120 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (161,122900340150106,150,\'Грильято пирамидальная\',\'М\',\'9003\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 150 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (162,122900340200106,200,\'Грильято пирамидальная\',\'М\',\'9003\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 200 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (163,122900540050106,50,\'Грильято пирамидальная\',\'М\',\'9005\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 50 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (164,122900540075106,75,\'Грильято пирамидальная\',\'М\',\'9005\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 75 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (165,122900540086106,86,\'Грильято пирамидальная\',\'М\',\'9005\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 86 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (166,122900540100106,100,\'Грильято пирамидальная\',\'М\',\'9005\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 100 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (167,122900540120106,120,\'Грильято пирамидальная\',\'М\',\'9005\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 120 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (168,122900540150106,150,\'Грильято пирамидальная\',\'М\',\'9005\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 150 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (169,122900540200106,200,\'Грильято пирамидальная\',\'М\',\'9005\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 200 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (170,122900640050106,50,\'Грильято пирамидальная\',\'М\',\'9006\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 50 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (171,122900640075106,75,\'Грильято пирамидальная\',\'М\',\'9006\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 75 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (172,122900640086106,86,\'Грильято пирамидальная\',\'М\',\'9006\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 86 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (173,122900640100106,100,\'Грильято пирамидальная\',\'М\',\'9006\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 100 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (174,122900640120106,120,\'Грильято пирамидальная\',\'М\',\'9006\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 120 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (175,122900640150106,150,\'Грильято пирамидальная\',\'М\',\'9006\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 150 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (176,122900640200106,200,\'Грильято пирамидальная\',\'М\',\'9006\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 200 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (177,122702440050106,50,\'Грильято пирамидальная\',\'М\',\'7024\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 50 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (178,122702440075106,75,\'Грильято пирамидальная\',\'М\',\'7024\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 75 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (179,122702440086106,86,\'Грильято пирамидальная\',\'М\',\'7024\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 86 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (180,122702440100106,100,\'Грильято пирамидальная\',\'М\',\'7024\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 100 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (181,122702440120106,120,\'Грильято пирамидальная\',\'М\',\'7024\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 120 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (182,122702440150106,150,\'Грильято пирамидальная\',\'М\',\'7024\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 150 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (183,122702440200106,200,\'Грильято пирамидальная\',\'М\',\'7024\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 200 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (184,122801740050106,50,\'Грильято пирамидальная\',\'М\',\'8017\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 50 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (185,122801740075106,75,\'Грильято пирамидальная\',\'М\',\'8017\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 75 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (186,122801740086106,86,\'Грильято пирамидальная\',\'М\',\'8017\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 86 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (187,122801740100106,100,\'Грильято пирамидальная\',\'М\',\'8017\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 100 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (188,122801740120106,120,\'Грильято пирамидальная\',\'М\',\'8017\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 120 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (189,122801740150106,150,\'Грильято пирамидальная\',\'М\',\'8017\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 150 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (190,122801740200106,200,\'Грильято пирамидальная\',\'М\',\'8017\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 200 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (191,122000140050106,50,\'Грильято пирамидальная\',\'М\',\'Дерево\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 50 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (192,122000140075106,75,\'Грильято пирамидальная\',\'М\',\'Дерево\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 75 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (193,122000140086106,86,\'Грильято пирамидальная\',\'М\',\'Дерево\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 86 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (194,122000140100106,100,\'Грильято пирамидальная\',\'М\',\'Дерево\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 100 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (195,122000140120106,120,\'Грильято пирамидальная\',\'М\',\'Дерево\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 120 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (196,122000140150106,150,\'Грильято пирамидальная\',\'М\',\'Дерево\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 150 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (197,122000140200106,200,\'Грильято пирамидальная\',\'М\',\'Дерево\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 200 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (198,122000040050106,50,\'Грильято пирамидальная\',\'М\',\'ANY RAL\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 50 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (199,122000040075106,75,\'Грильято пирамидальная\',\'М\',\'ANY RAL\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 75 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (200,122000040086106,86,\'Грильято пирамидальная\',\'М\',\'ANY RAL\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 86 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (201,122000040100106,100,\'Грильято пирамидальная\',\'М\',\'ANY RAL\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 100 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (202,122000040120106,120,\'Грильято пирамидальная\',\'М\',\'ANY RAL\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 120 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (203,122000040150106,150,\'Грильято пирамидальная\',\'М\',\'ANY RAL\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 150 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (204,122000040200106,200,\'Грильято пирамидальная\',\'М\',\'ANY RAL\',600,9,44,\'Профіль грильято пірамідальний 600 "М" яч. 200 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (205,122900340050206,50,\'Грильято пирамидальная\',\'П\',\'9003\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 50 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (206,122900340075206,75,\'Грильято пирамидальная\',\'П\',\'9003\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 75 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (207,122900340086206,86,\'Грильято пирамидальная\',\'П\',\'9003\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 86 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (208,122900340100206,100,\'Грильято пирамидальная\',\'П\',\'9003\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 100 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (209,122900340120206,120,\'Грильято пирамидальная\',\'П\',\'9003\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 120 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (210,122900340150206,150,\'Грильято пирамидальная\',\'П\',\'9003\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 150 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (211,122900340200206,200,\'Грильято пирамидальная\',\'П\',\'9003\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 200 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (212,122900540050206,50,\'Грильято пирамидальная\',\'П\',\'9005\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 50 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (213,122900540075206,75,\'Грильято пирамидальная\',\'П\',\'9005\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 75 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (214,122900540086206,86,\'Грильято пирамидальная\',\'П\',\'9005\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 86 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (215,122900540100206,100,\'Грильято пирамидальная\',\'П\',\'9005\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 100 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (216,122900540120206,120,\'Грильято пирамидальная\',\'П\',\'9005\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 120 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (217,122900540150206,150,\'Грильято пирамидальная\',\'П\',\'9005\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 150 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (218,122900540200206,200,\'Грильято пирамидальная\',\'П\',\'9005\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 200 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (219,122900640050206,50,\'Грильято пирамидальная\',\'П\',\'9006\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 50 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (220,122900640075206,75,\'Грильято пирамидальная\',\'П\',\'9006\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 75 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (221,122900640086206,86,\'Грильято пирамидальная\',\'П\',\'9006\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 86 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (222,122900640100206,100,\'Грильято пирамидальная\',\'П\',\'9006\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 100 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (223,122900640120206,120,\'Грильято пирамидальная\',\'П\',\'9006\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 120 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (224,122900640150206,150,\'Грильято пирамидальная\',\'П\',\'9006\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 150 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (225,122900640200206,200,\'Грильято пирамидальная\',\'П\',\'9006\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 200 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (226,122702440050206,50,\'Грильято пирамидальная\',\'П\',\'7024\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 50 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (227,122702440075206,75,\'Грильято пирамидальная\',\'П\',\'7024\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 75 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (228,122702440086206,86,\'Грильято пирамидальная\',\'П\',\'7024\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 86 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (229,122702440100206,100,\'Грильято пирамидальная\',\'П\',\'7024\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 100 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (230,122702440120206,120,\'Грильято пирамидальная\',\'П\',\'7024\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 120 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (231,122702440150206,150,\'Грильято пирамидальная\',\'П\',\'7024\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 150 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (232,122702440200206,200,\'Грильято пирамидальная\',\'П\',\'7024\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 200 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (233,122801740050206,50,\'Грильято пирамидальная\',\'П\',\'8017\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 50 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (234,122801740075206,75,\'Грильято пирамидальная\',\'П\',\'8017\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 75 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (235,122801740086206,86,\'Грильято пирамидальная\',\'П\',\'8017\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 86 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (236,122801740100206,100,\'Грильято пирамидальная\',\'П\',\'8017\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 100 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (237,122801740120206,120,\'Грильято пирамидальная\',\'П\',\'8017\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 120 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (238,122801740150206,150,\'Грильято пирамидальная\',\'П\',\'8017\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 150 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (239,122801740200206,200,\'Грильято пирамидальная\',\'П\',\'8017\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 200 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (240,122000140050206,50,\'Грильято пирамидальная\',\'П\',\'Дерево\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 50 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (241,122000140075206,75,\'Грильято пирамидальная\',\'П\',\'Дерево\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 75 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (242,122000140086206,86,\'Грильято пирамидальная\',\'П\',\'Дерево\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 86 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (243,122000140100206,100,\'Грильято пирамидальная\',\'П\',\'Дерево\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 100 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (244,122000140120206,120,\'Грильято пирамидальная\',\'П\',\'Дерево\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 120 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (245,122000140150206,150,\'Грильято пирамидальная\',\'П\',\'Дерево\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 150 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (246,122000140200206,200,\'Грильято пирамидальная\',\'П\',\'Дерево\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 200 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (247,122000040050206,50,\'Грильято пирамидальная\',\'П\',\'ANY RAL\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 50 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (248,122000040075206,75,\'Грильято пирамидальная\',\'П\',\'ANY RAL\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 75 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (249,122000040086206,86,\'Грильято пирамидальная\',\'П\',\'ANY RAL\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 86 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (250,122000040100206,100,\'Грильято пирамидальная\',\'П\',\'ANY RAL\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 100 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (251,122000040120206,120,\'Грильято пирамидальная\',\'П\',\'ANY RAL\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 120 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (252,122000040150206,150,\'Грильято пирамидальная\',\'П\',\'ANY RAL\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 150 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (253,122000040200206,200,\'Грильято пирамидальная\',\'П\',\'ANY RAL\',600,9,44,\'Профіль грильято пірамідальний 600 "П" яч. 200 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (254,12290034005006,50,\'Грильято пирамидальная\',\'повздовжний\',\'9003\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 50 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (255,12290034007506,75,\'Грильято пирамидальная\',\'повздовжний\',\'9003\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 75 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (256,12290034008606,86,\'Грильято пирамидальная\',\'повздовжний\',\'9003\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 86 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (257,12290034010006,100,\'Грильято пирамидальная\',\'повздовжний\',\'9003\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 100 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (258,12290034012006,120,\'Грильято пирамидальная\',\'повздовжний\',\'9003\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 120 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (259,12290034015006,150,\'Грильято пирамидальная\',\'повздовжний\',\'9003\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 150 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (260,12290034020006,200,\'Грильято пирамидальная\',\'повздовжний\',\'9003\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 200 RAL 9003\',9.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (261,12290054005006,50,\'Грильято пирамидальная\',\'повздовжний\',\'9005\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 50 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (262,12290054007506,75,\'Грильято пирамидальная\',\'повздовжний\',\'9005\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 75 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (263,12290054008606,86,\'Грильято пирамидальная\',\'повздовжний\',\'9005\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 86 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (264,12290054010006,100,\'Грильято пирамидальная\',\'повздовжний\',\'9005\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 100 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (265,12290054012006,120,\'Грильято пирамидальная\',\'повздовжний\',\'9005\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 120 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (266,12290054015006,150,\'Грильято пирамидальная\',\'повздовжний\',\'9005\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 150 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (267,12290054020006,200,\'Грильято пирамидальная\',\'повздовжний\',\'9005\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 200 RAL 9005\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (268,12290064005006,50,\'Грильято пирамидальная\',\'повздовжний\',\'9006\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 50 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (269,12290064007506,75,\'Грильято пирамидальная\',\'повздовжний\',\'9006\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 75 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (270,12290064008606,86,\'Грильято пирамидальная\',\'повздовжний\',\'9006\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 86 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (271,12290064010006,100,\'Грильято пирамидальная\',\'повздовжний\',\'9006\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 100 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (272,12290064012006,120,\'Грильято пирамидальная\',\'повздовжний\',\'9006\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 120 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (273,12290064015006,150,\'Грильято пирамидальная\',\'повздовжний\',\'9006\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 150 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (274,12290064020006,200,\'Грильято пирамидальная\',\'повздовжний\',\'9006\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 200 RAL 9006\',9.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (275,12270244005006,50,\'Грильято пирамидальная\',\'повздовжний\',\'7024\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 50 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (276,12270244007506,75,\'Грильято пирамидальная\',\'повздовжний\',\'7024\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 75 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (277,12270244008606,86,\'Грильято пирамидальная\',\'повздовжний\',\'7024\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 86 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (278,12270244010006,100,\'Грильято пирамидальная\',\'повздовжний\',\'7024\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 100 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (279,12270244012006,120,\'Грильято пирамидальная\',\'повздовжний\',\'7024\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 120 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (280,12270244015006,150,\'Грильято пирамидальная\',\'повздовжний\',\'7024\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 150 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (281,12270244020006,200,\'Грильято пирамидальная\',\'повздовжний\',\'7024\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 200 RAL 7024\',10.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (282,12280174005006,50,\'Грильято пирамидальная\',\'повздовжний\',\'8017\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 50 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (283,12280174007506,75,\'Грильято пирамидальная\',\'повздовжний\',\'8017\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 75 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (284,12280174008606,86,\'Грильято пирамидальная\',\'повздовжний\',\'8017\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 86 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (285,12280174010006,100,\'Грильято пирамидальная\',\'повздовжний\',\'8017\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 100 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (286,12280174012006,120,\'Грильято пирамидальная\',\'повздовжний\',\'8017\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 120 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (287,12280174015006,150,\'Грильято пирамидальная\',\'повздовжний\',\'8017\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 150 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (288,12280174020006,200,\'Грильято пирамидальная\',\'повздовжний\',\'8017\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 200 RAL 8017\',11.95,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (289,12200014005006,50,\'Грильято пирамидальная\',\'повздовжний\',\'Дерево\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 50 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (290,12200014007506,75,\'Грильято пирамидальная\',\'повздовжний\',\'Дерево\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 75 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (291,12200014008606,86,\'Грильято пирамидальная\',\'повздовжний\',\'Дерево\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 86 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (292,12200014010006,100,\'Грильято пирамидальная\',\'повздовжний\',\'Дерево\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 100 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (293,12200014012006,120,\'Грильято пирамидальная\',\'повздовжний\',\'Дерево\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 120 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (294,12200014015006,150,\'Грильято пирамидальная\',\'повздовжний\',\'Дерево\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 150 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (295,12200014020006,200,\'Грильято пирамидальная\',\'повздовжний\',\'Дерево\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 200 RAL Дерево\',12.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (296,12200004005006,50,\'Грильято пирамидальная\',\'повздовжний\',\'ANY RAL\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 50 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (297,12200004007506,75,\'Грильято пирамидальная\',\'повздовжний\',\'ANY RAL\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 75 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (298,12200004008606,86,\'Грильято пирамидальная\',\'повздовжний\',\'ANY RAL\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 86 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (299,12200004010006,100,\'Грильято пирамидальная\',\'повздовжний\',\'ANY RAL\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 100 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (300,12200004012006,120,\'Грильято пирамидальная\',\'повздовжний\',\'ANY RAL\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 120 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (301,12200004015006,150,\'Грильято пирамидальная\',\'повздовжний\',\'ANY RAL\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 150 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (302,12200004020006,200,\'Грильято пирамидальная\',\'повздовжний\',\'ANY RAL\',600,9,44,\'Профіль грильято повздовжний пірамідальний 600 мм. 200 ANY RAL\',18.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (303,12290034005024,50,\'Грильято пирамидальная\',\'повздовжний\',\'9003\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 50 RAL 9003\',37.03,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (304,12290034007524,75,\'Грильято пирамидальная\',\'повздовжний\',\'9003\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 75 RAL 9003\',37.03,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (305,12290034008624,86,\'Грильято пирамидальная\',\'повздовжний\',\'9003\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 86 RAL 9003\',37.03,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (306,12290034010024,100,\'Грильято пирамидальная\',\'повздовжний\',\'9003\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 100 RAL 9003\',37.03,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (307,12290034012024,120,\'Грильято пирамидальная\',\'повздовжний\',\'9003\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 120 RAL 9003\',37.03,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (308,12290034015024,150,\'Грильято пирамидальная\',\'повздовжний\',\'9003\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 150 RAL 9003\',37.03,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (309,12290034020024,200,\'Грильято пирамидальная\',\'повздовжний\',\'9003\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 200 RAL 9003\',37.03,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (310,12290054005024,50,\'Грильято пирамидальная\',\'повздовжний\',\'9005\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 50 RAL 9005\',37.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (311,12290054007524,75,\'Грильято пирамидальная\',\'повздовжний\',\'9005\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 75 RAL 9005\',37.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (312,12290054008624,86,\'Грильято пирамидальная\',\'повздовжний\',\'9005\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 86 RAL 9005\',37.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (313,12290054010024,100,\'Грильято пирамидальная\',\'повздовжний\',\'9005\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 100 RAL 9005\',37.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (314,12290054012024,120,\'Грильято пирамидальная\',\'повздовжний\',\'9005\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 120 RAL 9005\',37.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (315,12290054015024,150,\'Грильято пирамидальная\',\'повздовжний\',\'9005\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 150 RAL 9005\',37.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (316,12290054020024,200,\'Грильято пирамидальная\',\'повздовжний\',\'9005\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 200 RAL 9005\',37.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (317,12290064005024,50,\'Грильято пирамидальная\',\'повздовжний\',\'9006\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 50 RAL 9006\',37.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (318,12290064007524,75,\'Грильято пирамидальная\',\'повздовжний\',\'9006\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 75 RAL 9006\',37.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (319,12290064008624,86,\'Грильято пирамидальная\',\'повздовжний\',\'9006\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 86 RAL 9006\',37.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (320,12290064010024,100,\'Грильято пирамидальная\',\'повздовжний\',\'9006\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 100 RAL 9006\',37.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (321,12290064012024,120,\'Грильято пирамидальная\',\'повздовжний\',\'9006\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 120 RAL 9006\',37.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (322,12290064015024,150,\'Грильято пирамидальная\',\'повздовжний\',\'9006\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 150 RAL 9006\',37.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (323,12290064020024,200,\'Грильято пирамидальная\',\'повздовжний\',\'9006\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 200 RAL 9006\',37.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (324,12270244005024,50,\'Грильято пирамидальная\',\'повздовжний\',\'7024\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 50 RAL 7024\',43.80,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (325,12270244007524,75,\'Грильято пирамидальная\',\'повздовжний\',\'7024\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 75 RAL 7024\',43.80,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (326,12270244008624,86,\'Грильято пирамидальная\',\'повздовжний\',\'7024\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 86 RAL 7024\',43.80,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (327,12270244010024,100,\'Грильято пирамидальная\',\'повздовжний\',\'7024\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 100 RAL 7024\',43.80,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (328,12270244012024,120,\'Грильято пирамидальная\',\'повздовжний\',\'7024\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 120 RAL 7024\',43.80,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (329,12270244015024,150,\'Грильято пирамидальная\',\'повздовжний\',\'7024\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 150 RAL 7024\',43.80,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (330,12270244020024,200,\'Грильято пирамидальная\',\'повздовжний\',\'7024\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 200 RAL 7024\',43.80,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (331,12280174005024,50,\'Грильято пирамидальная\',\'повздовжний\',\'8017\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 50 RAL 8017\',47.78,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (332,12280174007524,75,\'Грильято пирамидальная\',\'повздовжний\',\'8017\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 75 RAL 8017\',47.78,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (333,12280174008624,86,\'Грильято пирамидальная\',\'повздовжний\',\'8017\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 86 RAL 8017\',47.78,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (334,12280174010024,100,\'Грильято пирамидальная\',\'повздовжний\',\'8017\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 100 RAL 8017\',47.78,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (335,12280174012024,120,\'Грильято пирамидальная\',\'повздовжний\',\'8017\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 120 RAL 8017\',47.78,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (336,12280174015024,150,\'Грильято пирамидальная\',\'повздовжний\',\'8017\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 150 RAL 8017\',47.78,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (337,12280174020024,200,\'Грильято пирамидальная\',\'повздовжний\',\'8017\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 200 RAL 8017\',47.78,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (338,12200014005024,50,\'Грильято пирамидальная\',\'повздовжний\',\'Дерево\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 50 RAL Дерево\',51.84,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (339,12200014007524,75,\'Грильято пирамидальная\',\'повздовжний\',\'Дерево\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 75 RAL Дерево\',51.84,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (340,12200014008624,86,\'Грильято пирамидальная\',\'повздовжний\',\'Дерево\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 86 RAL Дерево\',51.84,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (341,12200014010024,100,\'Грильято пирамидальная\',\'повздовжний\',\'Дерево\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 100 RAL Дерево\',51.84,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (342,12200014012024,120,\'Грильято пирамидальная\',\'повздовжний\',\'Дерево\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 120 RAL Дерево\',51.84,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (343,12200014015024,150,\'Грильято пирамидальная\',\'повздовжний\',\'Дерево\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 150 RAL Дерево\',51.84,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (344,12200014020024,200,\'Грильято пирамидальная\',\'повздовжний\',\'Дерево\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 200 RAL Дерево\',51.84,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (345,12200004005024,50,\'Грильято пирамидальная\',\'повздовжний\',\'ANY RAL\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 50 ANY RAL\',74.06,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (346,12200004007524,75,\'Грильято пирамидальная\',\'повздовжний\',\'ANY RAL\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 75 ANY RAL\',74.06,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (347,12200004008624,86,\'Грильято пирамидальная\',\'повздовжний\',\'ANY RAL\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 86 ANY RAL\',74.06,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (348,12200004010024,100,\'Грильято пирамидальная\',\'повздовжний\',\'ANY RAL\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 100 ANY RAL\',74.06,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (349,12200004012024,120,\'Грильято пирамидальная\',\'повздовжний\',\'ANY RAL\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 120 ANY RAL\',74.06,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (350,12200004015024,150,\'Грильято пирамидальная\',\'повздовжний\',\'ANY RAL\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 150 ANY RAL\',74.06,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (351,12200004020024,200,\'Грильято пирамидальная\',\'повздовжний\',\'ANY RAL\',2400,9,44,\'Профіль грильято повздовжний пірамідальний 2400 мм. 200 ANY RAL\',74.06,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (352,121900340050106,50,\'Грильято\',\'М\',\'9003\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 50 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (353,121900340075106,75,\'Грильято\',\'М\',\'9003\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 75 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (354,121900340086106,86,\'Грильято\',\'М\',\'9003\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 86 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (355,121900340100106,100,\'Грильято\',\'М\',\'9003\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 100 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (356,121900340120106,120,\'Грильято\',\'М\',\'9003\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 120 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (357,121900340150106,150,\'Грильято\',\'М\',\'9003\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 150 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (358,121900340200106,200,\'Грильято\',\'М\',\'9003\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 200 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (359,121900540050106,50,\'Грильято\',\'М\',\'9005\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 50 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (360,121900540075106,75,\'Грильято\',\'М\',\'9005\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 75 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (361,121900540086106,86,\'Грильято\',\'М\',\'9005\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 86 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (362,121900540100106,100,\'Грильято\',\'М\',\'9005\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 100 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (363,121900540120106,120,\'Грильято\',\'М\',\'9005\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 120 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (364,121900540150106,150,\'Грильято\',\'М\',\'9005\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 150 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (365,121900540200106,200,\'Грильято\',\'М\',\'9005\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 200 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (366,121900640050106,50,\'Грильято\',\'М\',\'9006\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 50 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (367,121900640075106,75,\'Грильято\',\'М\',\'9006\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 75 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (368,121900640086106,86,\'Грильято\',\'М\',\'9006\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 86 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (369,121900640100106,100,\'Грильято\',\'М\',\'9006\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 100 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (370,121900640120106,120,\'Грильято\',\'М\',\'9006\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 120 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (371,121900640150106,150,\'Грильято\',\'М\',\'9006\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 150 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (372,121900640200106,200,\'Грильято\',\'М\',\'9006\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 200 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (373,121702440050106,50,\'Грильято\',\'М\',\'7024\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 50 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (374,121702440075106,75,\'Грильято\',\'М\',\'7024\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 75 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (375,121702440086106,86,\'Грильято\',\'М\',\'7024\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 86 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (376,121702440100106,100,\'Грильято\',\'М\',\'7024\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 100 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (377,121702440120106,120,\'Грильято\',\'М\',\'7024\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 120 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (378,121702440150106,150,\'Грильято\',\'М\',\'7024\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 150 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (379,121702440200106,200,\'Грильято\',\'М\',\'7024\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 200 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (380,121801740050106,50,\'Грильято\',\'М\',\'8017\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 50 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (381,121801740075106,75,\'Грильято\',\'М\',\'8017\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 75 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (382,121801740086106,86,\'Грильято\',\'М\',\'8017\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 86 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (383,121801740100106,100,\'Грильято\',\'М\',\'8017\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 100 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (384,121801740120106,120,\'Грильято\',\'М\',\'8017\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 120 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (385,121801740150106,150,\'Грильято\',\'М\',\'8017\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 150 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (386,121801740200106,200,\'Грильято\',\'М\',\'8017\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 200 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (387,121000140050106,50,\'Грильято\',\'М\',\'Дерево\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 50 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (388,121000140075106,75,\'Грильято\',\'М\',\'Дерево\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 75 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (389,121000140086106,86,\'Грильято\',\'М\',\'Дерево\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 86 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (390,121000140100106,100,\'Грильято\',\'М\',\'Дерево\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 100 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (391,121000140120106,120,\'Грильято\',\'М\',\'Дерево\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 120 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (392,121000140150106,150,\'Грильято\',\'М\',\'Дерево\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 150 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (393,121000140200106,200,\'Грильято\',\'М\',\'Дерево\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 200 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (394,121000040050106,50,\'Грильято\',\'М\',\'ANY RAL\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 50 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (395,121000040075106,75,\'Грильято\',\'М\',\'ANY RAL\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 75 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (396,121000040086106,86,\'Грильято\',\'М\',\'ANY RAL\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 86 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (397,121000040100106,100,\'Грильято\',\'М\',\'ANY RAL\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 100 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (398,121000040120106,120,\'Грильято\',\'М\',\'ANY RAL\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 120 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (399,121000040150106,150,\'Грильято\',\'М\',\'ANY RAL\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 150 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (400,121000040200106,200,\'Грильято\',\'М\',\'ANY RAL\',600,9,40,\'Профіль Грильято 600х40 "М" яч. 200 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (401,121900340050206,50,\'Грильято\',\'П\',\'9003\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 50 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (402,121900340075206,75,\'Грильято\',\'П\',\'9003\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 75 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (403,121900340086206,86,\'Грильято\',\'П\',\'9003\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 86 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (404,121900340100206,100,\'Грильято\',\'П\',\'9003\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 100 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (405,121900340120206,120,\'Грильято\',\'П\',\'9003\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 120 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (406,121900340150206,150,\'Грильято\',\'П\',\'9003\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 150 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (407,121900340200206,200,\'Грильято\',\'П\',\'9003\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 200 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (408,121900540050206,50,\'Грильято\',\'П\',\'9005\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 50 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (409,121900540075206,75,\'Грильято\',\'П\',\'9005\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 75 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (410,121900540086206,86,\'Грильято\',\'П\',\'9005\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 86 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (411,121900540100206,100,\'Грильято\',\'П\',\'9005\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 100 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (412,121900540120206,120,\'Грильято\',\'П\',\'9005\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 120 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (413,121900540150206,150,\'Грильято\',\'П\',\'9005\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 150 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (414,121900540200206,200,\'Грильято\',\'П\',\'9005\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 200 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (415,121900640050206,50,\'Грильято\',\'П\',\'9006\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 50 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (416,121900640075206,75,\'Грильято\',\'П\',\'9006\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 75 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (417,121900640086206,86,\'Грильято\',\'П\',\'9006\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 86 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (418,121900640100206,100,\'Грильято\',\'П\',\'9006\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 100 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (419,121900640120206,120,\'Грильято\',\'П\',\'9006\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 120 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (420,121900640150206,150,\'Грильято\',\'П\',\'9006\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 150 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (421,121900640200206,200,\'Грильято\',\'П\',\'9006\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 200 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (422,121702440050206,50,\'Грильято\',\'П\',\'7024\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 50 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (423,121702440075206,75,\'Грильято\',\'П\',\'7024\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 75 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (424,121702440086206,86,\'Грильято\',\'П\',\'7024\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 86 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (425,121702440100206,100,\'Грильято\',\'П\',\'7024\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 100 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (426,121702440120206,120,\'Грильято\',\'П\',\'7024\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 120 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (427,121702440150206,150,\'Грильято\',\'П\',\'7024\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 150 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (428,121702440200206,200,\'Грильято\',\'П\',\'7024\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 200 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (429,121801740050206,50,\'Грильято\',\'П\',\'8017\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 50 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (430,121801740075206,75,\'Грильято\',\'П\',\'8017\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 75 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (431,121801740086206,86,\'Грильято\',\'П\',\'8017\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 86 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (432,121801740100206,100,\'Грильято\',\'П\',\'8017\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 100 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (433,121801740120206,120,\'Грильято\',\'П\',\'8017\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 120 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (434,121801740150206,150,\'Грильято\',\'П\',\'8017\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 150 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (435,121801740200206,200,\'Грильято\',\'П\',\'8017\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 200 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (436,121000140050206,50,\'Грильято\',\'П\',\'Дерево\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 50 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (437,121000140075206,75,\'Грильято\',\'П\',\'Дерево\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 75 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (438,121000140086206,86,\'Грильято\',\'П\',\'Дерево\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 86 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (439,121000140100206,100,\'Грильято\',\'П\',\'Дерево\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 100 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (440,121000140120206,120,\'Грильято\',\'П\',\'Дерево\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 120 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (441,121000140150206,150,\'Грильято\',\'П\',\'Дерево\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 150 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (442,121000140200206,200,\'Грильято\',\'П\',\'Дерево\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 200 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (443,121000040050206,50,\'Грильято\',\'П\',\'ANY RAL\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 50 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (444,121000040075206,75,\'Грильято\',\'П\',\'ANY RAL\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 75 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (445,121000040086206,86,\'Грильято\',\'П\',\'ANY RAL\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 86 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (446,121000040100206,100,\'Грильято\',\'П\',\'ANY RAL\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 100 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (447,121000040120206,120,\'Грильято\',\'П\',\'ANY RAL\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 120 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (448,121000040150206,150,\'Грильято\',\'П\',\'ANY RAL\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 150 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (449,121000040200206,200,\'Грильято\',\'П\',\'ANY RAL\',600,9,40,\'Профіль Грильято 600х40 "П" яч. 200 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (450,12190034005006,50,\'Грильято\',\'повздовжний\',\'9003\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 50 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (451,12190034007506,75,\'Грильято\',\'повздовжний\',\'9003\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 75 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (452,12190034008606,86,\'Грильято\',\'повздовжний\',\'9003\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 86 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (453,12190034010006,100,\'Грильято\',\'повздовжний\',\'9003\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 100 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (454,12190034012006,120,\'Грильято\',\'повздовжний\',\'9003\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 120 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (455,12190034015006,150,\'Грильято\',\'повздовжний\',\'9003\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 150 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (456,12190034020006,200,\'Грильято\',\'повздовжний\',\'9003\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 200 RAL 9003\',4.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (457,12190054005006,50,\'Грильято\',\'повздовжний\',\'9005\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 50 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (458,12190054007506,75,\'Грильято\',\'повздовжний\',\'9005\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 75 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (459,12190054008606,86,\'Грильято\',\'повздовжний\',\'9005\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 86 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (460,12190054010006,100,\'Грильято\',\'повздовжний\',\'9005\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 100 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (461,12190054012006,120,\'Грильято\',\'повздовжний\',\'9005\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 120 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (462,12190054015006,150,\'Грильято\',\'повздовжний\',\'9005\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 150 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (463,12190054020006,200,\'Грильято\',\'повздовжний\',\'9005\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 200 RAL 9005\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (464,12190064005006,50,\'Грильято\',\'повздовжний\',\'9006\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 50 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (465,12190064007506,75,\'Грильято\',\'повздовжний\',\'9006\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 75 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (466,12190064008606,86,\'Грильято\',\'повздовжний\',\'9006\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 86 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (467,12190064010006,100,\'Грильято\',\'повздовжний\',\'9006\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 100 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (468,12190064012006,120,\'Грильято\',\'повздовжний\',\'9006\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 120 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (469,12190064015006,150,\'Грильято\',\'повздовжний\',\'9006\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 150 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (470,12190064020006,200,\'Грильято\',\'повздовжний\',\'9006\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 200 RAL 9006\',5.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (471,12170244005006,50,\'Грильято\',\'повздовжний\',\'7024\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 50 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (472,12170244007506,75,\'Грильято\',\'повздовжний\',\'7024\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 75 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (473,12170244008606,86,\'Грильято\',\'повздовжний\',\'7024\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 86 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (474,12170244010006,100,\'Грильято\',\'повздовжний\',\'7024\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 100 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (475,12170244012006,120,\'Грильято\',\'повздовжний\',\'7024\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 120 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (476,12170244015006,150,\'Грильято\',\'повздовжний\',\'7024\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 150 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (477,12170244020006,200,\'Грильято\',\'повздовжний\',\'7024\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 200 RAL 7024\',5.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (478,12180174005006,50,\'Грильято\',\'повздовжний\',\'8017\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 50 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (479,12180174007506,75,\'Грильято\',\'повздовжний\',\'8017\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 75 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (480,12180174008606,86,\'Грильято\',\'повздовжний\',\'8017\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 86 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (481,12180174010006,100,\'Грильято\',\'повздовжний\',\'8017\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 100 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (482,12180174012006,120,\'Грильято\',\'повздовжний\',\'8017\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 120 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (483,12180174015006,150,\'Грильято\',\'повздовжний\',\'8017\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 150 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (484,12180174020006,200,\'Грильято\',\'повздовжний\',\'8017\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 200 RAL 8017\',6.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (485,12100014005006,50,\'Грильято\',\'повздовжний\',\'Дерево\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 50 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (486,12100014007506,75,\'Грильято\',\'повздовжний\',\'Дерево\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 75 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (487,12100014008606,86,\'Грильято\',\'повздовжний\',\'Дерево\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 86 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (488,12100014010006,100,\'Грильято\',\'повздовжний\',\'Дерево\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 100 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (489,12100014012006,120,\'Грильято\',\'повздовжний\',\'Дерево\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 120 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (490,12100014015006,150,\'Грильято\',\'повздовжний\',\'Дерево\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 150 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (491,12100014020006,200,\'Грильято\',\'повздовжний\',\'Дерево\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 200 RAL Дерево\',6.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (492,12100004005006,50,\'Грильято\',\'повздовжний\',\'ANY RAL\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 50 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (493,12100004007506,75,\'Грильято\',\'повздовжний\',\'ANY RAL\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 75 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (494,12100004008606,86,\'Грильято\',\'повздовжний\',\'ANY RAL\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 86 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (495,12100004010006,100,\'Грильято\',\'повздовжний\',\'ANY RAL\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 100 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (496,12100004012006,120,\'Грильято\',\'повздовжний\',\'ANY RAL\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 120 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (497,12100004015006,150,\'Грильято\',\'повздовжний\',\'ANY RAL\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 150 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (498,12100004020006,200,\'Грильято\',\'повздовжний\',\'ANY RAL\',600,9,40,\'Профіль Грильято повздовжний 600х40 мм. 200 ANY RAL\',9.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (499,12190034005024,50,\'Грильято\',\'повздовжний\',\'9003\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 50 RAL 9003\',19.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (500,12190034007524,75,\'Грильято\',\'повздовжний\',\'9003\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 75 RAL 9003\',19.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (501,12190034008624,86,\'Грильято\',\'повздовжний\',\'9003\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 86 RAL 9003\',19.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (502,12190034010024,100,\'Грильято\',\'повздовжний\',\'9003\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 100 RAL 9003\',19.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (503,12190034012024,120,\'Грильято\',\'повздовжний\',\'9003\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 120 RAL 9003\',19.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (504,12190034015024,150,\'Грильято\',\'повздовжний\',\'9003\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 150 RAL 9003\',19.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (505,12190034020024,200,\'Грильято\',\'повздовжний\',\'9003\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 200 RAL 9003\',19.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (506,12190054005024,50,\'Грильято\',\'повздовжний\',\'9005\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 50 RAL 9005\',20.45,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (507,12190054007524,75,\'Грильято\',\'повздовжний\',\'9005\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 75 RAL 9005\',20.45,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (508,12190054008624,86,\'Грильято\',\'повздовжний\',\'9005\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 86 RAL 9005\',20.45,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (509,12190054010024,100,\'Грильято\',\'повздовжний\',\'9005\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 100 RAL 9005\',20.45,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (510,12190054012024,120,\'Грильято\',\'повздовжний\',\'9005\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 120 RAL 9005\',20.45,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (511,12190054015024,150,\'Грильято\',\'повздовжний\',\'9005\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 150 RAL 9005\',20.45,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (512,12190054020024,200,\'Грильято\',\'повздовжний\',\'9005\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 200 RAL 9005\',20.45,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (513,12190064005024,50,\'Грильято\',\'повздовжний\',\'9006\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 50 RAL 9006\',20.45,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (514,12190064007524,75,\'Грильято\',\'повздовжний\',\'9006\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 75 RAL 9006\',20.45,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (515,12190064008624,86,\'Грильято\',\'повздовжний\',\'9006\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 86 RAL 9006\',20.45,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (516,12190064010024,100,\'Грильято\',\'повздовжний\',\'9006\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 100 RAL 9006\',20.45,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (517,12190064012024,120,\'Грильято\',\'повздовжний\',\'9006\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 120 RAL 9006\',20.45,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (518,12190064015024,150,\'Грильято\',\'повздовжний\',\'9006\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 150 RAL 9006\',20.45,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (519,12190064020024,200,\'Грильято\',\'повздовжний\',\'9006\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 200 RAL 9006\',20.45,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (520,12170244005024,50,\'Грильято\',\'повздовжний\',\'7024\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 50 RAL 7024\',23.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (521,12170244007524,75,\'Грильято\',\'повздовжний\',\'7024\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 75 RAL 7024\',23.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (522,12170244008624,86,\'Грильято\',\'повздовжний\',\'7024\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 86 RAL 7024\',23.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (523,12170244010024,100,\'Грильято\',\'повздовжний\',\'7024\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 100 RAL 7024\',23.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (524,12170244012024,120,\'Грильято\',\'повздовжний\',\'7024\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 120 RAL 7024\',23.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (525,12170244015024,150,\'Грильято\',\'повздовжний\',\'7024\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 150 RAL 7024\',23.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (526,12170244020024,200,\'Грильято\',\'повздовжний\',\'7024\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 200 RAL 7024\',23.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (527,12180174005024,50,\'Грильято\',\'повздовжний\',\'8017\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 50 RAL 8017\',25.66,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (528,12180174007524,75,\'Грильято\',\'повздовжний\',\'8017\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 75 RAL 8017\',25.66,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (529,12180174008624,86,\'Грильято\',\'повздовжний\',\'8017\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 86 RAL 8017\',25.66,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (530,12180174010024,100,\'Грильято\',\'повздовжний\',\'8017\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 100 RAL 8017\',25.66,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (531,12180174012024,120,\'Грильято\',\'повздовжний\',\'8017\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 120 RAL 8017\',25.66,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (532,12180174015024,150,\'Грильято\',\'повздовжний\',\'8017\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 150 RAL 8017\',25.66,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (533,12180174020024,200,\'Грильято\',\'повздовжний\',\'8017\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 200 RAL 8017\',25.66,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (534,12100014005024,50,\'Грильято\',\'повздовжний\',\'Дерево\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 50 RAL Дерево\',27.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (535,12100014007524,75,\'Грильято\',\'повздовжний\',\'Дерево\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 75 RAL Дерево\',27.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (536,12100014008624,86,\'Грильято\',\'повздовжний\',\'Дерево\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 86 RAL Дерево\',27.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (537,12100014010024,100,\'Грильято\',\'повздовжний\',\'Дерево\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 100 RAL Дерево\',27.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (538,12100014012024,120,\'Грильято\',\'повздовжний\',\'Дерево\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 120 RAL Дерево\',27.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (539,12100014015024,150,\'Грильято\',\'повздовжний\',\'Дерево\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 150 RAL Дерево\',27.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (540,12100014020024,200,\'Грильято\',\'повздовжний\',\'Дерево\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 200 RAL Дерево\',27.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (541,12100004005024,50,\'Грильято\',\'повздовжний\',\'ANY RAL\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 50 ANY RAL\',39.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (542,12100004007524,75,\'Грильято\',\'повздовжний\',\'ANY RAL\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 75 ANY RAL\',39.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (543,12100004008624,86,\'Грильято\',\'повздовжний\',\'ANY RAL\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 86 ANY RAL\',39.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (544,12100004010024,100,\'Грильято\',\'повздовжний\',\'ANY RAL\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 100 ANY RAL\',39.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (545,12100004012024,120,\'Грильято\',\'повздовжний\',\'ANY RAL\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 120 ANY RAL\',39.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (546,12100004015024,150,\'Грильято\',\'повздовжний\',\'ANY RAL\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 150 ANY RAL\',39.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (547,12100004020024,200,\'Грильято\',\'повздовжний\',\'ANY RAL\',2400,9,40,\'Профіль Грильято повздовжний 2400х40 мм. 200 ANY RAL\',39.96,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (548,12190034005012,50,\'Грильято\',\'повздовжний\',\'9003\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 50 RAL 9003\',9.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (549,12190034007512,75,\'Грильято\',\'повздовжний\',\'9003\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 75 RAL 9003\',9.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (550,12190034008612,86,\'Грильято\',\'повздовжний\',\'9003\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 86 RAL 9003\',9.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (551,12190034010012,100,\'Грильято\',\'повздовжний\',\'9003\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 100 RAL 9003\',9.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (552,12190034012012,120,\'Грильято\',\'повздовжний\',\'9003\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 120 RAL 9003\',9.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (553,12190034015012,150,\'Грильято\',\'повздовжний\',\'9003\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 150 RAL 9003\',9.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (554,12190034020012,200,\'Грильято\',\'повздовжний\',\'9003\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 200 RAL 9003\',9.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (555,12190054005012,50,\'Грильято\',\'повздовжний\',\'9005\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 50 RAL 9005\',10.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (556,12190054007512,75,\'Грильято\',\'повздовжний\',\'9005\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 75 RAL 9005\',10.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (557,12190054008612,86,\'Грильято\',\'повздовжний\',\'9005\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 86 RAL 9005\',10.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (558,12190054010012,100,\'Грильято\',\'повздовжний\',\'9005\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 100 RAL 9005\',10.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (559,12190054012012,120,\'Грильято\',\'повздовжний\',\'9005\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 120 RAL 9005\',10.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (560,12190054015012,150,\'Грильято\',\'повздовжний\',\'9005\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 150 RAL 9005\',10.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (561,12190054020012,200,\'Грильято\',\'повздовжний\',\'9005\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 200 RAL 9005\',10.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (562,12190064005012,50,\'Грильято\',\'повздовжний\',\'9006\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 50 RAL 9006\',10.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (563,12190064007512,75,\'Грильято\',\'повздовжний\',\'9006\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 75 RAL 9006\',10.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (564,12190064008612,86,\'Грильято\',\'повздовжний\',\'9006\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 86 RAL 9006\',10.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (565,12190064010012,100,\'Грильято\',\'повздовжний\',\'9006\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 100 RAL 9006\',10.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (566,12190064012012,120,\'Грильято\',\'повздовжний\',\'9006\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 120 RAL 9006\',10.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (567,12190064015012,150,\'Грильято\',\'повздовжний\',\'9006\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 150 RAL 9006\',10.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (568,12190064020012,200,\'Грильято\',\'повздовжний\',\'9006\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 200 RAL 9006\',10.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (569,12170244005012,50,\'Грильято\',\'повздовжний\',\'7024\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 50 RAL 7024\',11.77,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (570,12170244007512,75,\'Грильято\',\'повздовжний\',\'7024\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 75 RAL 7024\',11.77,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (571,12170244008612,86,\'Грильято\',\'повздовжний\',\'7024\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 86 RAL 7024\',11.77,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (572,12170244010012,100,\'Грильято\',\'повздовжний\',\'7024\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 100 RAL 7024\',11.77,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (573,12170244012012,120,\'Грильято\',\'повздовжний\',\'7024\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 120 RAL 7024\',11.77,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (574,12170244015012,150,\'Грильято\',\'повздовжний\',\'7024\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 150 RAL 7024\',11.77,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (575,12170244020012,200,\'Грильято\',\'повздовжний\',\'7024\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 200 RAL 7024\',11.77,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (576,12180174005012,50,\'Грильято\',\'повздовжний\',\'8017\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 50 RAL 8017\',12.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (577,12180174007512,75,\'Грильято\',\'повздовжний\',\'8017\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 75 RAL 8017\',12.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (578,12180174008612,86,\'Грильято\',\'повздовжний\',\'8017\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 86 RAL 8017\',12.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (579,12180174010012,100,\'Грильято\',\'повздовжний\',\'8017\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 100 RAL 8017\',12.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (580,12180174012012,120,\'Грильято\',\'повздовжний\',\'8017\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 120 RAL 8017\',12.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (581,12180174015012,150,\'Грильято\',\'повздовжний\',\'8017\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 150 RAL 8017\',12.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (582,12180174020012,200,\'Грильято\',\'повздовжний\',\'8017\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 200 RAL 8017\',12.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (583,12100014005012,50,\'Грильято\',\'повздовжний\',\'Дерево\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 50 RAL Дерево\',13.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (584,12100014007512,75,\'Грильято\',\'повздовжний\',\'Дерево\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 75 RAL Дерево\',13.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (585,12100014008612,86,\'Грильято\',\'повздовжний\',\'Дерево\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 86 RAL Дерево\',13.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (586,12100014010012,100,\'Грильято\',\'повздовжний\',\'Дерево\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 100 RAL Дерево\',13.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (587,12100014012012,120,\'Грильято\',\'повздовжний\',\'Дерево\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 120 RAL Дерево\',13.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (588,12100014015012,150,\'Грильято\',\'повздовжний\',\'Дерево\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 150 RAL Дерево\',13.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (589,12100014020012,200,\'Грильято\',\'повздовжний\',\'Дерево\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 200 RAL Дерево\',13.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (590,12100004005012,50,\'Грильято\',\'повздовжний\',\'ANY RAL\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 50 ANY RAL\',19.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (591,12100004007512,75,\'Грильято\',\'повздовжний\',\'ANY RAL\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 75 ANY RAL\',19.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (592,12100004008612,86,\'Грильято\',\'повздовжний\',\'ANY RAL\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 86 ANY RAL\',19.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (593,12100004010012,100,\'Грильято\',\'повздовжний\',\'ANY RAL\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 100 ANY RAL\',19.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (594,12100004012012,120,\'Грильято\',\'повздовжний\',\'ANY RAL\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 120 ANY RAL\',19.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (595,12100004015012,150,\'Грильято\',\'повздовжний\',\'ANY RAL\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 150 ANY RAL\',19.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (596,12100004020012,200,\'Грильято\',\'повздовжний\',\'ANY RAL\',1200,9,40,\'Профіль Грильято повздовжний 1200х40 мм. 200 ANY RAL\',19.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (597,160350359003,0,\'Рейка\',\'кубоподібна\',\'9003\',0,35,35,\'Рейка кубоподібна S-35,H-35 RAL 9003\',31.13,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (598,160350459003,0,\'Рейка\',\'кубоподібна\',\'9003\',0,35,45,\'Рейка кубоподібна S-35,H-45 RAL 9003\',33.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (599,160350559003,0,\'Рейка\',\'кубоподібна\',\'9003\',0,35,55,\'Рейка кубоподібна S-35,H-55 RAL 9003\',36.76,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (600,160350659003,0,\'Рейка\',\'кубоподібна\',\'9003\',0,35,65,\'Рейка кубоподібна S-35,H-65 RAL 9003\',39.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (601,160350759003,0,\'Рейка\',\'кубоподібна\',\'9003\',0,35,75,\'Рейка кубоподібна S-35,H-75 RAL 9003\',44.58,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (602,160350859003,0,\'Рейка\',\'кубоподібна\',\'9003\',0,35,85,\'Рейка кубоподібна S-35,H-85 RAL 9003\',49.14,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (603,160350959003,0,\'Рейка\',\'кубоподібна\',\'9003\',0,35,95,\'Рейка кубоподібна S-35,H-95 RAL 9003\',53.70,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (604,160351059003,0,\'Рейка\',\'кубоподібна\',\'9003\',0,35,105,\'Рейка кубоподібна S-35,H-105 RAL 9003\',59.07,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (605,160350359005,0,\'Рейка\',\'кубоподібна\',\'9005\',0,35,35,\'Рейка кубоподібна S-35,H-35 RAL 9005\',31.13,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (606,160350459005,0,\'Рейка\',\'кубоподібна\',\'9005\',0,35,45,\'Рейка кубоподібна S-35,H-45 RAL 9005\',33.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (607,160350559005,0,\'Рейка\',\'кубоподібна\',\'9005\',0,35,55,\'Рейка кубоподібна S-35,H-55 RAL 9005\',36.76,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (608,160350659005,0,\'Рейка\',\'кубоподібна\',\'9005\',0,35,65,\'Рейка кубоподібна S-35,H-65 RAL 9005\',39.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (609,160350759005,0,\'Рейка\',\'кубоподібна\',\'9005\',0,35,75,\'Рейка кубоподібна S-35,H-75 RAL 9005\',44.58,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (610,160350859005,0,\'Рейка\',\'кубоподібна\',\'9005\',0,35,85,\'Рейка кубоподібна S-35,H-85 RAL 9005\',49.14,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (611,160350959005,0,\'Рейка\',\'кубоподібна\',\'9005\',0,35,95,\'Рейка кубоподібна S-35,H-95 RAL 9005\',53.70,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (612,160351059005,0,\'Рейка\',\'кубоподібна\',\'9005\',0,35,105,\'Рейка кубоподібна S-35,H-105 RAL 9005\',59.07,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (613,160350359006,0,\'Рейка\',\'кубоподібна\',\'9006\',0,35,35,\'Рейка кубоподібна S-35,H-35 RAL 9006\',31.13,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (614,160350459006,0,\'Рейка\',\'кубоподібна\',\'9006\',0,35,45,\'Рейка кубоподібна S-35,H-45 RAL 9006\',33.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (615,160350559006,0,\'Рейка\',\'кубоподібна\',\'9006\',0,35,55,\'Рейка кубоподібна S-35,H-55 RAL 9006\',36.76,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (616,160350659006,0,\'Рейка\',\'кубоподібна\',\'9006\',0,35,65,\'Рейка кубоподібна S-35,H-65 RAL 9006\',39.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (617,160350759006,0,\'Рейка\',\'кубоподібна\',\'9006\',0,35,75,\'Рейка кубоподібна S-35,H-75 RAL 9006\',44.58,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (618,160350859006,0,\'Рейка\',\'кубоподібна\',\'9006\',0,35,85,\'Рейка кубоподібна S-35,H-85 RAL 9006\',49.14,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (619,160350959006,0,\'Рейка\',\'кубоподібна\',\'9006\',0,35,95,\'Рейка кубоподібна S-35,H-95 RAL 9006\',53.70,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (620,160351059006,0,\'Рейка\',\'кубоподібна\',\'9006\',0,35,105,\'Рейка кубоподібна S-35,H-105 RAL 9006\',59.07,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (621,160350357024,0,\'Рейка\',\'кубоподібна\',\'7024\',0,35,35,\'Рейка кубоподібна S-35,H-35 RAL 7024\',34.24,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (622,160350457024,0,\'Рейка\',\'кубоподібна\',\'7024\',0,35,45,\'Рейка кубоподібна S-35,H-45 RAL 7024\',37.21,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (623,160350557024,0,\'Рейка\',\'кубоподібна\',\'7024\',0,35,55,\'Рейка кубоподібна S-35,H-55 RAL 7024\',40.44,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (624,160350657024,0,\'Рейка\',\'кубоподібна\',\'7024\',0,35,65,\'Рейка кубоподібна S-35,H-65 RAL 7024\',43.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (625,160350757024,0,\'Рейка\',\'кубоподібна\',\'7024\',0,35,75,\'Рейка кубоподібна S-35,H-75 RAL 7024\',49.04,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (626,160350857024,0,\'Рейка\',\'кубоподібна\',\'7024\',0,35,85,\'Рейка кубоподібна S-35,H-85 RAL 7024\',54.05,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (627,160350957024,0,\'Рейка\',\'кубоподібна\',\'7024\',0,35,95,\'Рейка кубоподібна S-35,H-95 RAL 7024\',59.07,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (628,160351057024,0,\'Рейка\',\'кубоподібна\',\'7024\',0,35,105,\'Рейка кубоподібна S-35,H-105 RAL 7024\',64.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (629,160350358017,0,\'Рейка\',\'кубоподібна\',\'8017\',0,35,35,\'Рейка кубоподібна S-35,H-35 RAL 8017\',37.36,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (630,160350458017,0,\'Рейка\',\'кубоподібна\',\'8017\',0,35,45,\'Рейка кубоподібна S-35,H-45 RAL 8017\',40.60,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (631,160350558017,0,\'Рейка\',\'кубоподібна\',\'8017\',0,35,55,\'Рейка кубоподібна S-35,H-55 RAL 8017\',44.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (632,160350658017,0,\'Рейка\',\'кубоподібна\',\'8017\',0,35,65,\'Рейка кубоподібна S-35,H-65 RAL 8017\',47.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (633,160350758017,0,\'Рейка\',\'кубоподібна\',\'8017\',0,35,75,\'Рейка кубоподібна S-35,H-75 RAL 8017\',53.50,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (634,160350858017,0,\'Рейка\',\'кубоподібна\',\'8017\',0,35,85,\'Рейка кубоподібна S-35,H-85 RAL 8017\',58.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (635,160350958017,0,\'Рейка\',\'кубоподібна\',\'8017\',0,35,95,\'Рейка кубоподібна S-35,H-95 RAL 8017\',64.44,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (636,160351058017,0,\'Рейка\',\'кубоподібна\',\'8017\',0,35,105,\'Рейка кубоподібна S-35,H-105 RAL 8017\',70.88,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (637,160350350001,0,\'Рейка\',\'кубоподібна\',\'0001\',0,35,35,\'Рейка кубоподібна S-35,H-35 RAL Дерево\',43.58,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (638,160350450001,0,\'Рейка\',\'кубоподібна\',\'0001\',0,35,45,\'Рейка кубоподібна S-35,H-45 RAL Дерево\',47.36,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (639,160350550001,0,\'Рейка\',\'кубоподібна\',\'0001\',0,35,55,\'Рейка кубоподібна S-35,H-55 RAL Дерево\',51.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (640,160350650001,0,\'Рейка\',\'кубоподібна\',\'0001\',0,35,65,\'Рейка кубоподібна S-35,H-65 RAL Дерево\',55.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (641,160350750001,0,\'Рейка\',\'кубоподібна\',\'0001\',0,35,75,\'Рейка кубоподібна S-35,H-75 RAL Дерево\',62.41,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (642,160350850001,0,\'Рейка\',\'кубоподібна\',\'0001\',0,35,85,\'Рейка кубоподібна S-35,H-85 RAL Дерево\',68.80,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (643,160350950001,0,\'Рейка\',\'кубоподібна\',\'0001\',0,35,95,\'Рейка кубоподібна S-35,H-95 RAL Дерево\',75.18,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (644,160351050001,0,\'Рейка\',\'кубоподібна\',\'0001\',0,35,105,\'Рейка кубоподібна S-35,H-105 RAL Дерево\',82.70,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (645,160350350000,0,\'Рейка\',\'кубоподібна\',\'0000\',0,35,35,\'Рейка кубоподібна S-35,H-35 ANY RAL\',62.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (646,160350450000,0,\'Рейка\',\'кубоподібна\',\'0000\',0,35,45,\'Рейка кубоподібна S-35,H-45 ANY RAL\',67.66,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (647,160350550000,0,\'Рейка\',\'кубоподібна\',\'0000\',0,35,55,\'Рейка кубоподібна S-35,H-55 ANY RAL\',73.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (648,160350650000,0,\'Рейка\',\'кубоподібна\',\'0000\',0,35,65,\'Рейка кубоподібна S-35,H-65 ANY RAL\',79.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (649,160350750000,0,\'Рейка\',\'кубоподібна\',\'0000\',0,35,75,\'Рейка кубоподібна S-35,H-75 ANY RAL\',89.16,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (650,160350850000,0,\'Рейка\',\'кубоподібна\',\'0000\',0,35,85,\'Рейка кубоподібна S-35,H-85 ANY RAL\',98.28,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (651,160350950000,0,\'Рейка\',\'кубоподібна\',\'0000\',0,35,95,\'Рейка кубоподібна S-35,H-95 ANY RAL\',107.40,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (652,160351050000,0,\'Рейка\',\'кубоподібна\',\'0000\',0,35,105,\'Рейка кубоподібна S-35,H-105 ANY RAL\',118.14,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (653,160880359003,0,\'Рейка\',\'кубоподібна\',\'9003\',0,88,35,\'Рейка кубоподібна S-88,H-35 RAL9003\',40.78,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (654,160880459003,0,\'Рейка\',\'кубоподібна\',\'9003\',0,88,45,\'Рейка кубоподібна S-88,H-45 RAL9003\',44.31,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (655,160880559003,0,\'Рейка\',\'кубоподібна\',\'9003\',0,88,55,\'Рейка кубоподібна S-88,H-55 RAL9003\',48.16,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (656,160880659003,0,\'Рейка\',\'кубоподібна\',\'9003\',0,88,65,\'Рейка кубоподібна S-88,H-65 RAL9003\',52.38,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (657,160880809003,0,\'Рейка\',\'кубоподібна\',\'9003\',0,88,80,\'Рейка кубоподібна S-88,H-80 RAL9003\',64.37,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (658,160880359005,0,\'Рейка\',\'кубоподібна\',\'9005\',0,88,35,\'Рейка кубоподібна S-88,H-35 RAL9005\',40.78,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (659,160880459005,0,\'Рейка\',\'кубоподібна\',\'9005\',0,88,45,\'Рейка кубоподібна S-88,H-45 RAL9005\',44.31,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (660,160880559005,0,\'Рейка\',\'кубоподібна\',\'9005\',0,88,55,\'Рейка кубоподібна S-88,H-55 RAL9005\',48.16,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (661,160880659005,0,\'Рейка\',\'кубоподібна\',\'9005\',0,88,65,\'Рейка кубоподібна S-88,H-65 RAL9005\',52.38,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (662,160880809005,0,\'Рейка\',\'кубоподібна\',\'9005\',0,88,80,\'Рейка кубоподібна S-88,H-80 RAL9005\',64.37,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (663,160880359006,0,\'Рейка\',\'кубоподібна\',\'9006\',0,88,35,\'Рейка кубоподібна S-88,H-35 RAL9006\',40.78,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (664,160880459006,0,\'Рейка\',\'кубоподібна\',\'9006\',0,88,45,\'Рейка кубоподібна S-88,H-45 RAL9006\',44.31,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (665,160880559006,0,\'Рейка\',\'кубоподібна\',\'9006\',0,88,55,\'Рейка кубоподібна S-88,H-55 RAL9006\',48.16,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (666,160880659006,0,\'Рейка\',\'кубоподібна\',\'9006\',0,88,65,\'Рейка кубоподібна S-88,H-65 RAL9006\',52.38,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (667,160880809006,0,\'Рейка\',\'кубоподібна\',\'9006\',0,88,80,\'Рейка кубоподібна S-88,H-80 RAL9006\',64.37,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (668,160880357024,0,\'Рейка\',\'кубоподібна\',\'7024\',0,88,35,\'Рейка кубоподібна S-88,H-35 RAL 7024\',44.86,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (669,160880457024,0,\'Рейка\',\'кубоподібна\',\'7024\',0,88,45,\'Рейка кубоподібна S-88,H-45 RAL 7024\',48.74,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (670,160880557024,0,\'Рейка\',\'кубоподібна\',\'7024\',0,88,55,\'Рейка кубоподібна S-88,H-55 RAL 7024\',52.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (671,160880657024,0,\'Рейка\',\'кубоподібна\',\'7024\',0,88,65,\'Рейка кубоподібна S-88,H-65 RAL 7024\',57.62,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (672,160880807024,0,\'Рейка\',\'кубоподібна\',\'7024\',0,88,80,\'Рейка кубоподібна S-88,H-80 RAL 7024\',70.81,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (673,160880358017,0,\'Рейка\',\'кубоподібна\',\'8017\',0,88,35,\'Рейка кубоподібна S-88,H-35 RAL 8017\',48.94,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (674,160880458017,0,\'Рейка\',\'кубоподібна\',\'8017\',0,88,45,\'Рейка кубоподібна S-88,H-45 RAL 8017\',53.17,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (675,160880558017,0,\'Рейка\',\'кубоподібна\',\'8017\',0,88,55,\'Рейка кубоподібна S-88,H-55 RAL 8017\',57.79,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (676,160880658017,0,\'Рейка\',\'кубоподібна\',\'8017\',0,88,65,\'Рейка кубоподібна S-88,H-65 RAL 8017\',62.86,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (677,160880808017,0,\'Рейка\',\'кубоподібна\',\'8017\',0,88,80,\'Рейка кубоподібна S-88,H-80 RAL 8017\',77.24,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (678,160880350001,0,\'Рейка\',\'кубоподібна\',\'Дерево\',0,88,35,\'Рейка кубоподібна S-88,H-35 RAL Дерево\',57.02,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (679,160880450001,0,\'Рейка\',\'кубоподібна\',\'Дерево\',0,88,45,\'Рейка кубоподібна S-88,H-45 RAL Дерево\',62.03,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (680,160880550001,0,\'Рейка\',\'кубоподібна\',\'Дерево\',0,88,55,\'Рейка кубоподібна S-88,H-55 RAL Дерево\',67.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (681,160880650001,0,\'Рейка\',\'кубоподібна\',\'Дерево\',0,88,65,\'Рейка кубоподібна S-88,H-65 RAL Дерево\',73.33,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (682,160880800001,0,\'Рейка\',\'кубоподібна\',\'Дерево\',0,88,80,\'Рейка кубоподібна S-88,H-80 RAL Дерево\',104.37,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (683,160880350000,0,\'Рейка\',\'кубоподібна\',\'ANY RAL\',0,88,35,\'Рейка кубоподібна S-88,H-35 ANY RAL\',81.56,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (684,160880450000,0,\'Рейка\',\'кубоподібна\',\'ANY RAL\',0,88,45,\'Рейка кубоподібна S-88,H-45 ANY RAL\',88.62,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (685,160880550000,0,\'Рейка\',\'кубоподібна\',\'ANY RAL\',0,88,55,\'Рейка кубоподібна S-88,H-55 ANY RAL\',96.32,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (686,160880650000,0,\'Рейка\',\'кубоподібна\',\'ANY RAL\',0,88,65,\'Рейка кубоподібна S-88,H-65 ANY RAL\',104.76,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (687,160880800000,0,\'Рейка\',\'кубоподібна\',\'ANY RAL\',0,88,80,\'Рейка кубоподібна S-88,H-80 ANY RAL\',128.74,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (688,1608803590031,0,\'З\'\'эднувач\',\'кубоподібна\',\'9003\',0,88,35,\'З\'\'эднувальний профіль S-88,H-35 RAL 9003\',20.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (689,1608804590031,0,\'З\'\'эднувач\',\'кубоподібна\',\'9003\',0,88,45,\'З\'\'эднувальний профіль S-88,H-45 RAL 9003\',22.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (690,1608805590031,0,\'З\'\'эднувач\',\'кубоподібна\',\'9003\',0,88,55,\'З\'\'эднувальний профіль S-88,H-55 RAL 9003\',24.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (691,1608806590031,0,\'З\'\'эднувач\',\'кубоподібна\',\'9003\',0,88,65,\'З\'\'эднувальний профіль S-88,H-65 RAL 9003\',26.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (692,1608808090031,0,\'З\'\'эднувач\',\'кубоподібна\',\'9003\',0,88,80,\'З\'\'эднувальний профіль S-88,H-80 RAL 9003\',32.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (693,1608803590051,0,\'З\'\'эднувач\',\'кубоподібна\',\'9005\',0,88,35,\'З\'\'эднувальний профіль S-88,H-35 RAL 9005\',20.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (694,1608804590051,0,\'З\'\'эднувач\',\'кубоподібна\',\'9005\',0,88,45,\'З\'\'эднувальний профіль S-88,H-45 RAL 9005\',22.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (695,1608805590051,0,\'З\'\'эднувач\',\'кубоподібна\',\'9005\',0,88,55,\'З\'\'эднувальний профіль S-88,H-55 RAL 9005\',24.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (696,1608806590051,0,\'З\'\'эднувач\',\'кубоподібна\',\'9005\',0,88,65,\'З\'\'эднувальний профіль S-88,H-65 RAL 9005\',26.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (697,1608808090051,0,\'З\'\'эднувач\',\'кубоподібна\',\'9005\',0,88,80,\'З\'\'эднувальний профіль S-88,H-80 RAL 9005\',32.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (698,1608803590061,0,\'З\'\'эднувач\',\'кубоподібна\',\'9006\',0,88,35,\'З\'\'эднувальний профіль S-88,H-35 RAL 9006\',20.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (699,1608804590061,0,\'З\'\'эднувач\',\'кубоподібна\',\'9006\',0,88,45,\'З\'\'эднувальний профіль S-88,H-45 RAL 9006\',22.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (700,1608805590061,0,\'З\'\'эднувач\',\'кубоподібна\',\'9006\',0,88,55,\'З\'\'эднувальний профіль S-88,H-55 RAL 9006\',24.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (701,1608806590061,0,\'З\'\'эднувач\',\'кубоподібна\',\'9006\',0,88,65,\'З\'\'эднувальний профіль S-88,H-65 RAL 9006\',26.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (702,1608808090061,0,\'З\'\'эднувач\',\'кубоподібна\',\'9006\',0,88,80,\'З\'\'эднувальний профіль S-88,H-80 RAL 9006\',32.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (703,1608803570241,0,\'З\'\'эднувач\',\'кубоподібна\',\'7024\',0,88,35,\'З\'\'эднувальний профіль S-88,H-35 RAL 7024\',22.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (704,1608804570241,0,\'З\'\'эднувач\',\'кубоподібна\',\'7024\',0,88,45,\'З\'\'эднувальний профіль S-88,H-45 RAL 7024\',24.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (705,1608805570241,0,\'З\'\'эднувач\',\'кубоподібна\',\'7024\',0,88,55,\'З\'\'эднувальний профіль S-88,H-55 RAL 7024\',26.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (706,1608806570241,0,\'З\'\'эднувач\',\'кубоподібна\',\'7024\',0,88,65,\'З\'\'эднувальний профіль S-88,H-65 RAL 7024\',28.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (707,1608808070241,0,\'З\'\'эднувач\',\'кубоподібна\',\'7024\',0,88,80,\'З\'\'эднувальний профіль S-88,H-80 RAL 7024\',35.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (708,1608803580171,0,\'З\'\'эднувач\',\'кубоподібна\',\'8017\',0,88,35,\'З\'\'эднувальний профіль S-88,H-35 RAL 8017\',24.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (709,1608804580171,0,\'З\'\'эднувач\',\'кубоподібна\',\'8017\',0,88,45,\'З\'\'эднувальний профіль S-88,H-45 RAL 8017\',26.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (710,1608805580171,0,\'З\'\'эднувач\',\'кубоподібна\',\'8017\',0,88,55,\'З\'\'эднувальний профіль S-88,H-55 RAL 8017\',28.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (711,1608806580171,0,\'З\'\'эднувач\',\'кубоподібна\',\'8017\',0,88,65,\'З\'\'эднувальний профіль S-88,H-65 RAL 8017\',31.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (712,1608808080171,0,\'З\'\'эднувач\',\'кубоподібна\',\'8017\',0,88,80,\'З\'\'эднувальний профіль S-88,H-80 RAL 8017\',38.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (713,1608803500011,0,\'З\'\'эднувач\',\'кубоподібна\',\'Дерево\',0,88,35,\'З\'\'эднувальний профіль S-88,H-35 RAL Дерево\',28.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (714,1608804500011,0,\'З\'\'эднувач\',\'кубоподібна\',\'Дерево\',0,88,45,\'З\'\'эднувальний профіль S-88,H-45 RAL Дерево\',31.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (715,1608805500011,0,\'З\'\'эднувач\',\'кубоподібна\',\'Дерево\',0,88,55,\'З\'\'эднувальний профіль S-88,H-55 RAL Дерево\',33.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (716,1608806500011,0,\'З\'\'эднувач\',\'кубоподібна\',\'Дерево\',0,88,65,\'З\'\'эднувальний профіль S-88,H-65 RAL Дерево\',36.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (717,1608808000011,0,\'З\'\'эднувач\',\'кубоподібна\',\'Дерево\',0,88,80,\'З\'\'эднувальний профіль S-88,H-80 RAL Дерево\',52.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (718,1608803500001,0,\'З\'\'эднувач\',\'кубоподібна\',\'ANY RAL\',0,88,35,\'З\'\'эднувальний профіль S-88,H-35 ANY RAL\',40.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (719,1608804500001,0,\'З\'\'эднувач\',\'кубоподібна\',\'ANY RAL\',0,88,45,\'З\'\'эднувальний профіль S-88,H-45 ANY RAL\',44.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (720,1608805500001,0,\'З\'\'эднувач\',\'кубоподібна\',\'ANY RAL\',0,88,55,\'З\'\'эднувальний профіль S-88,H-55 ANY RAL\',48.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (721,1608806500001,0,\'З\'\'эднувач\',\'кубоподібна\',\'ANY RAL\',0,88,65,\'З\'\'эднувальний профіль S-88,H-65 ANY RAL\',52.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (722,1608808000001,0,\'З\'\'эднувач\',\'кубоподібна\',\'ANY RAL\',0,88,80,\'З\'\'эднувальний профіль S-88,H-80 ANY RAL\',64.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (723,1608803590032,0,\'Заглушка\',\'0\',\'9003\',0,88,35,\'Заглушка S-88,H-35 RAL 9003\',40.78,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (724,1608804590032,0,\'Заглушка\',\'0\',\'9003\',0,88,45,\'Заглушка S-88,H-45 RAL 9003\',44.31,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (725,1608805590032,0,\'Заглушка\',\'0\',\'9003\',0,88,55,\'Заглушка S-88,H-55 RAL 9003\',48.16,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (726,1608806590032,0,\'Заглушка\',\'0\',\'9003\',0,88,65,\'Заглушка S-88,H-65 RAL 9003\',52.38,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (727,1608808090032,0,\'Заглушка\',\'0\',\'9003\',0,88,80,\'Заглушка S-88,H-80 RAL 9003\',64.37,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (728,1608803590052,0,\'Заглушка\',\'0\',\'9005\',0,88,35,\'Заглушка S-88,H-35 RAL 9005\',40.78,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (729,1608804590052,0,\'Заглушка\',\'0\',\'9005\',0,88,45,\'Заглушка S-88,H-45 RAL 9005\',44.31,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (730,1608805590052,0,\'Заглушка\',\'0\',\'9005\',0,88,55,\'Заглушка S-88,H-55 RAL 9005\',48.16,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (731,1608806590052,0,\'Заглушка\',\'0\',\'9005\',0,88,65,\'Заглушка S-88,H-65 RAL 9005\',52.38,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (732,1608808090052,0,\'Заглушка\',\'0\',\'9005\',0,88,80,\'Заглушка S-88,H-80 RAL 9005\',64.37,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (733,1608803590062,0,\'Заглушка\',\'0\',\'9006\',0,88,35,\'Заглушка S-88,H-35 RAL 9006\',40.78,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (734,1608804590062,0,\'Заглушка\',\'0\',\'9006\',0,88,45,\'Заглушка S-88,H-45 RAL 9006\',44.31,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (735,1608805590062,0,\'Заглушка\',\'0\',\'9006\',0,88,55,\'Заглушка S-88,H-55 RAL 9006\',48.16,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (736,1608806590062,0,\'Заглушка\',\'0\',\'9006\',0,88,65,\'Заглушка S-88,H-65 RAL 9006\',52.38,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (737,1608808090062,0,\'Заглушка\',\'0\',\'9006\',0,88,80,\'Заглушка S-88,H-80 RAL 9006\',64.37,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (738,1608803570242,0,\'Заглушка\',\'0\',\'7024\',0,88,35,\'Заглушка S-88,H-35 RAL 7024\',44.86,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (739,1608804570242,0,\'Заглушка\',\'0\',\'7024\',0,88,45,\'Заглушка S-88,H-45 RAL 7024\',48.74,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (740,1608805570242,0,\'Заглушка\',\'0\',\'7024\',0,88,55,\'Заглушка S-88,H-55 RAL 7024\',52.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (741,1608806570242,0,\'Заглушка\',\'0\',\'7024\',0,88,65,\'Заглушка S-88,H-65 RAL 7024\',57.62,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (742,1608808070242,0,\'Заглушка\',\'0\',\'7024\',0,88,80,\'Заглушка S-88,H-80 RAL 7024\',70.81,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (743,1608803580172,0,\'Заглушка\',\'0\',\'8017\',0,88,35,\'Заглушка S-88,H-35 RAL 8017\',48.94,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (744,1608804580172,0,\'Заглушка\',\'0\',\'8017\',0,88,45,\'Заглушка S-88,H-45 RAL 8017\',53.17,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (745,1608805580172,0,\'Заглушка\',\'0\',\'8017\',0,88,55,\'Заглушка S-88,H-55 RAL 8017\',57.79,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (746,1608806580172,0,\'Заглушка\',\'0\',\'8017\',0,88,65,\'Заглушка S-88,H-65 RAL 8017\',62.86,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (747,1608808080172,0,\'Заглушка\',\'0\',\'8017\',0,88,80,\'Заглушка S-88,H-80 RAL 8017\',77.24,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (748,1608803500012,0,\'Заглушка\',\'0\',\'Дерево\',0,88,35,\'Заглушка S-88,H-35 RAL Дерево\',57.02,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (749,1608804500012,0,\'Заглушка\',\'0\',\'Дерево\',0,88,45,\'Заглушка S-88,H-45 RAL Дерево\',62.03,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (750,1608805500012,0,\'Заглушка\',\'0\',\'Дерево\',0,88,55,\'Заглушка S-88,H-55 RAL Дерево\',67.42,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (751,1608806500012,0,\'Заглушка\',\'0\',\'Дерево\',0,88,65,\'Заглушка S-88,H-65 RAL Дерево\',73.33,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (752,1608808000012,0,\'Заглушка\',\'0\',\'Дерево\',0,88,80,\'Заглушка S-88,H-80 RAL Дерево\',104.37,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (753,1608803500002,0,\'Заглушка\',\'0\',\'ANY RAL\',0,88,35,\'Заглушка S-88,H-35 ANY RAL\',81.56,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (754,1608804500002,0,\'Заглушка\',\'0\',\'ANY RAL\',0,88,45,\'Заглушка S-88,H-45 ANY RAL\',88.62,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (755,1608805500002,0,\'Заглушка\',\'0\',\'ANY RAL\',0,88,55,\'Заглушка S-88,H-55 ANY RAL\',96.32,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (756,1608806500002,0,\'Заглушка\',\'0\',\'ANY RAL\',0,88,65,\'Заглушка S-88,H-65 ANY RAL\',104.76,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (757,1608808000002,0,\'Заглушка\',\'0\',\'ANY RAL\',0,88,80,\'Заглушка S-88,H-80 ANY RAL\',128.74,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (758,1603503590032,0,\'Заглушка\',\'0\',\'9003\',0,35,35,\'Заглушка S-35,H-35 RAL 9003\',31.13,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (759,1603504590032,0,\'Заглушка\',\'0\',\'9003\',0,35,45,\'Заглушка S-35,H-45 RAL 9003\',33.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (760,1603505590032,0,\'Заглушка\',\'0\',\'9003\',0,35,55,\'Заглушка S-35,H-55 RAL 9003\',36.76,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (761,1603506590032,0,\'Заглушка\',\'0\',\'9003\',0,35,65,\'Заглушка S-35,H-65 RAL 9003\',39.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (762,1603507590032,0,\'Заглушка\',\'0\',\'9003\',0,35,75,\'Заглушка S-35,H-75 RAL 9003\',44.58,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (763,1603508590032,0,\'Заглушка\',\'0\',\'9003\',0,35,85,\'Заглушка S-35,H-85 RAL 9003\',49.14,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (764,1603509590032,0,\'Заглушка\',\'0\',\'9003\',0,35,95,\'Заглушка S-35,H-95 RAL 9003\',53.70,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (765,1603510590032,0,\'Заглушка\',\'0\',\'9003\',0,35,105,\'Заглушка S-35,H-105 RAL 9003\',59.07,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (766,1603503590052,0,\'Заглушка\',\'0\',\'9005\',0,35,35,\'Заглушка S-35,H-35 RAL 9005\',31.13,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (767,1603504590052,0,\'Заглушка\',\'0\',\'9005\',0,35,45,\'Заглушка S-35,H-45 RAL 9005\',33.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (768,1603505590052,0,\'Заглушка\',\'0\',\'9005\',0,35,55,\'Заглушка S-35,H-55 RAL 9005\',36.76,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (769,1603506590052,0,\'Заглушка\',\'0\',\'9005\',0,35,65,\'Заглушка S-35,H-65 RAL 9005\',39.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (770,1603507590052,0,\'Заглушка\',\'0\',\'9005\',0,35,75,\'Заглушка S-35,H-75 RAL 9005\',44.58,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (771,1603508590052,0,\'Заглушка\',\'0\',\'9005\',0,35,85,\'Заглушка S-35,H-85 RAL 9005\',49.14,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (772,1603509590052,0,\'Заглушка\',\'0\',\'9005\',0,35,95,\'Заглушка S-35,H-95 RAL 9005\',53.70,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (773,1603510590052,0,\'Заглушка\',\'0\',\'9005\',0,35,105,\'Заглушка S-35,H-105 RAL 9005\',59.07,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (774,1603503590062,0,\'Заглушка\',\'0\',\'9006\',0,35,35,\'Заглушка S-35,H-35 RAL 9006\',31.13,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (775,1603504590062,0,\'Заглушка\',\'0\',\'9006\',0,35,45,\'Заглушка S-35,H-45 RAL 9006\',33.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (776,1603505590062,0,\'Заглушка\',\'0\',\'9006\',0,35,55,\'Заглушка S-35,H-55 RAL 9006\',36.76,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (777,1603506590062,0,\'Заглушка\',\'0\',\'9006\',0,35,65,\'Заглушка S-35,H-65 RAL 9006\',39.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (778,1603507590062,0,\'Заглушка\',\'0\',\'9006\',0,35,75,\'Заглушка S-35,H-75 RAL 9006\',44.58,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (779,1603508590062,0,\'Заглушка\',\'0\',\'9006\',0,35,85,\'Заглушка S-35,H-85 RAL 9006\',49.14,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (780,1603509590062,0,\'Заглушка\',\'0\',\'9006\',0,35,95,\'Заглушка S-35,H-95 RAL 9006\',53.70,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (781,1603510590062,0,\'Заглушка\',\'0\',\'9006\',0,35,105,\'Заглушка S-35,H-105 RAL 9006\',59.07,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (782,1603503570242,0,\'Заглушка\',\'0\',\'7024\',0,35,35,\'Заглушка S-35,H-35 RAL 7024\',34.24,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (783,1603504570242,0,\'Заглушка\',\'0\',\'7024\',0,35,45,\'Заглушка S-35,H-45 RAL 7024\',37.21,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (784,1603505570242,0,\'Заглушка\',\'0\',\'7024\',0,35,55,\'Заглушка S-35,H-55 RAL 7024\',40.44,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (785,1603506570242,0,\'Заглушка\',\'0\',\'7024\',0,35,65,\'Заглушка S-35,H-65 RAL 7024\',43.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (786,1603507570242,0,\'Заглушка\',\'0\',\'7024\',0,35,75,\'Заглушка S-35,H-75 RAL 7024\',49.04,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (787,1603508570242,0,\'Заглушка\',\'0\',\'7024\',0,35,85,\'Заглушка S-35,H-85 RAL 7024\',54.05,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (788,1603509570242,0,\'Заглушка\',\'0\',\'7024\',0,35,95,\'Заглушка S-35,H-95 RAL 7024\',59.07,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (789,1603510570242,0,\'Заглушка\',\'0\',\'7024\',0,35,105,\'Заглушка S-35,H-105 RAL 7024\',64.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (790,1603503580172,0,\'Заглушка\',\'0\',\'8017\',0,35,35,\'Заглушка S-35,H-35 RAL 8017\',37.36,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (791,1603504580172,0,\'Заглушка\',\'0\',\'8017\',0,35,45,\'Заглушка S-35,H-45 RAL 8017\',40.60,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (792,1603505580172,0,\'Заглушка\',\'0\',\'8017\',0,35,55,\'Заглушка S-35,H-55 RAL 8017\',44.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (793,1603506580172,0,\'Заглушка\',\'0\',\'8017\',0,35,65,\'Заглушка S-35,H-65 RAL 8017\',47.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (794,1603507580172,0,\'Заглушка\',\'0\',\'8017\',0,35,75,\'Заглушка S-35,H-75 RAL 8017\',53.50,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (795,1603508580172,0,\'Заглушка\',\'0\',\'8017\',0,35,85,\'Заглушка S-35,H-85 RAL 8017\',58.97,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (796,1603509580172,0,\'Заглушка\',\'0\',\'8017\',0,35,95,\'Заглушка S-35,H-95 RAL 8017\',64.44,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (797,1603510580172,0,\'Заглушка\',\'0\',\'8017\',0,35,105,\'Заглушка S-35,H-105 RAL 8017\',70.88,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (798,1603503500012,0,\'Заглушка\',\'0\',\'Дерево\',0,35,35,\'Заглушка S-35,H-35 RAL  Дерево\',43.58,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (799,1603504500012,0,\'Заглушка\',\'0\',\'Дерево\',0,35,45,\'Заглушка S-35,H-45 RAL  Дерево\',47.36,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (800,1603505500012,0,\'Заглушка\',\'0\',\'Дерево\',0,35,55,\'Заглушка S-35,H-55 RAL  Дерево\',51.46,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (801,1603506500012,0,\'Заглушка\',\'0\',\'Дерево\',0,35,65,\'Заглушка S-35,H-65 RAL  Дерево\',55.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (802,1603507500012,0,\'Заглушка\',\'0\',\'Дерево\',0,35,75,\'Заглушка S-35,H-75 RAL  Дерево\',62.41,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (803,1603508500012,0,\'Заглушка\',\'0\',\'Дерево\',0,35,85,\'Заглушка S-35,H-85 RAL  Дерево\',68.80,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (804,1603509500012,0,\'Заглушка\',\'0\',\'Дерево\',0,35,95,\'Заглушка S-35,H-95 RAL  Дерево\',75.18,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (805,1603510500012,0,\'Заглушка\',\'0\',\'Дерево\',0,35,105,\'Заглушка S-35,H-105 RAL  Дерево\',82.70,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (806,1603503500002,0,\'Заглушка\',\'0\',\'ANY RAL\',0,35,35,\'Заглушка S-35,H-35 ANY RAL\',62.26,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (807,1603504500002,0,\'Заглушка\',\'0\',\'ANY RAL\',0,35,45,\'Заглушка S-35,H-45 ANY RAL\',67.66,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (808,1603505500002,0,\'Заглушка\',\'0\',\'ANY RAL\',0,35,55,\'Заглушка S-35,H-55 ANY RAL\',73.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (809,1603506500002,0,\'Заглушка\',\'0\',\'ANY RAL\',0,35,65,\'Заглушка S-35,H-65 ANY RAL\',79.98,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (810,1603507500002,0,\'Заглушка\',\'0\',\'ANY RAL\',0,35,75,\'Заглушка S-35,H-75 ANY RAL\',89.16,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (811,1603508500002,0,\'Заглушка\',\'0\',\'ANY RAL\',0,35,85,\'Заглушка S-35,H-85 ANY RAL\',98.28,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (812,1603509500002,0,\'Заглушка\',\'0\',\'ANY RAL\',0,35,95,\'Заглушка S-35,H-95 ANY RAL\',107.40,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (813,1603510500002,0,\'Заглушка\',\'0\',\'ANY RAL\',0,35,105,\'Заглушка S-35,H-105 ANY RAL\',118.14,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (814,1603503590031,0,\'З\'\'эднувач\',\'кубоподібна\',\'9003\',0,35,35,\'З\'\'эднувальний профіль S-35,H-35 RAL 9003\',15.57,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (815,1603504590031,0,\'З\'\'эднувач\',\'кубоподібна\',\'9003\',0,35,45,\'З\'\'эднувальний профіль S-35,H-45 RAL 9003\',16.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (816,1603505590031,0,\'З\'\'эднувач\',\'кубоподібна\',\'9003\',0,35,55,\'З\'\'эднувальний профіль S-35,H-55 RAL 9003\',18.38,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (817,1603506590031,0,\'З\'\'эднувач\',\'кубоподібна\',\'9003\',0,35,65,\'З\'\'эднувальний профіль S-35,H-65 RAL 9003\',20.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (818,1603507590031,0,\'З\'\'эднувач\',\'кубоподібна\',\'9003\',0,35,75,\'З\'\'эднувальний профіль S-35,H-75 RAL 9003\',22.29,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (819,1603508590031,0,\'З\'\'эднувач\',\'кубоподібна\',\'9003\',0,35,85,\'З\'\'эднувальний профіль S-35,H-85 RAL 9003\',24.57,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (820,1603509590031,0,\'З\'\'эднувач\',\'кубоподібна\',\'9003\',0,35,95,\'З\'\'эднувальний профіль S-35,H-95 RAL 9003\',26.85,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (821,1603510590031,0,\'З\'\'эднувач\',\'кубоподібна\',\'9003\',0,35,105,\'З\'\'эднувальний профіль S-35,H-105 RAL 9003\',29.54,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (822,1603503590051,0,\'З\'\'эднувач\',\'кубоподібна\',\'9005\',0,35,35,\'З\'\'эднувальний профіль S-35,H-35 RAL 9005\',15.57,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (823,1603504590051,0,\'З\'\'эднувач\',\'кубоподібна\',\'9005\',0,35,45,\'З\'\'эднувальний профіль S-35,H-45 RAL 9005\',16.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (824,1603505590051,0,\'З\'\'эднувач\',\'кубоподібна\',\'9005\',0,35,55,\'З\'\'эднувальний профіль S-35,H-55 RAL 9005\',18.38,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (825,1603506590051,0,\'З\'\'эднувач\',\'кубоподібна\',\'9005\',0,35,65,\'З\'\'эднувальний профіль S-35,H-65 RAL 9005\',20.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (826,1603507590051,0,\'З\'\'эднувач\',\'кубоподібна\',\'9005\',0,35,75,\'З\'\'эднувальний профіль S-35,H-75 RAL 9005\',22.29,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (827,1603508590051,0,\'З\'\'эднувач\',\'кубоподібна\',\'9005\',0,35,85,\'З\'\'эднувальний профіль S-35,H-85 RAL 9005\',24.57,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (828,1603509590051,0,\'З\'\'эднувач\',\'кубоподібна\',\'9005\',0,35,95,\'З\'\'эднувальний профіль S-35,H-95 RAL 9005\',26.85,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (829,1603510590051,0,\'З\'\'эднувач\',\'кубоподібна\',\'9005\',0,35,105,\'З\'\'эднувальний профіль S-35,H-105 RAL 9005\',29.54,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (830,1603503590061,0,\'З\'\'эднувач\',\'кубоподібна\',\'9006\',0,35,35,\'З\'\'эднувальний профіль S-35,H-35 RAL 9006\',15.57,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (831,1603504590061,0,\'З\'\'эднувач\',\'кубоподібна\',\'9006\',0,35,45,\'З\'\'эднувальний профіль S-35,H-45 RAL 9006\',16.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (832,1603505590061,0,\'З\'\'эднувач\',\'кубоподібна\',\'9006\',0,35,55,\'З\'\'эднувальний профіль S-35,H-55 RAL 9006\',18.38,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (833,1603506590061,0,\'З\'\'эднувач\',\'кубоподібна\',\'9006\',0,35,65,\'З\'\'эднувальний профіль S-35,H-65 RAL 9006\',20.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (834,1603507590061,0,\'З\'\'эднувач\',\'кубоподібна\',\'9006\',0,35,75,\'З\'\'эднувальний профіль S-35,H-75 RAL 9006\',22.29,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (835,1603508590061,0,\'З\'\'эднувач\',\'кубоподібна\',\'9006\',0,35,85,\'З\'\'эднувальний профіль S-35,H-85 RAL 9006\',24.57,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (836,1603509590061,0,\'З\'\'эднувач\',\'кубоподібна\',\'9006\',0,35,95,\'З\'\'эднувальний профіль S-35,H-95 RAL 9006\',26.85,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (837,1603510590061,0,\'З\'\'эднувач\',\'кубоподібна\',\'9006\',0,35,105,\'З\'\'эднувальний профіль S-35,H-105 RAL 9006\',29.54,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (838,1603503570241,0,\'З\'\'эднувач\',\'кубоподібна\',\'7024\',0,35,35,\'З\'\'эднувальний профіль S-35,H-35 RAL 7024\',9999.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (839,1603504570241,0,\'З\'\'эднувач\',\'кубоподібна\',\'7024\',0,35,45,\'З\'\'эднувальний профіль S-35,H-45 RAL 7024\',18.61,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (840,1603505570241,0,\'З\'\'эднувач\',\'кубоподібна\',\'7024\',0,35,55,\'З\'\'эднувальний профіль S-35,H-55 RAL 7024\',20.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (841,1603506570241,0,\'З\'\'эднувач\',\'кубоподібна\',\'7024\',0,35,65,\'З\'\'эднувальний профіль S-35,H-65 RAL 7024\',22.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (842,1603507570241,0,\'З\'\'эднувач\',\'кубоподібна\',\'7024\',0,35,75,\'З\'\'эднувальний профіль S-35,H-75 RAL 7024\',24.52,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (843,1603508570241,0,\'З\'\'эднувач\',\'кубоподібна\',\'7024\',0,35,85,\'З\'\'эднувальний профіль S-35,H-85 RAL 7024\',9999.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (844,1603509570241,0,\'З\'\'эднувач\',\'кубоподібна\',\'7024\',0,35,95,\'З\'\'эднувальний профіль S-35,H-95 RAL 7024\',29.54,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (845,1603510570241,0,\'З\'\'эднувач\',\'кубоподібна\',\'7024\',0,35,105,\'З\'\'эднувальний профіль S-35,H-105 RAL 7024\',32.49,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (846,1603503580171,0,\'З\'\'эднувач\',\'кубоподібна\',\'8017\',0,35,35,\'З\'\'эднувальний профіль S-35,H-35 RAL 8017\',18.68,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (847,1603504580171,0,\'З\'\'эднувач\',\'кубоподібна\',\'8017\',0,35,45,\'З\'\'эднувальний профіль S-35,H-45 RAL 8017\',20.30,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (848,1603505580171,0,\'З\'\'эднувач\',\'кубоподібна\',\'8017\',0,35,55,\'З\'\'эднувальний профіль S-35,H-55 RAL 8017\',9999.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (849,1603506580171,0,\'З\'\'эднувач\',\'кубоподібна\',\'8017\',0,35,65,\'З\'\'эднувальний профіль S-35,H-65 RAL 8017\',24.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (850,1603507580171,0,\'З\'\'эднувач\',\'кубоподібна\',\'8017\',0,35,75,\'З\'\'эднувальний профіль S-35,H-75 RAL 8017\',26.75,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (851,1603508580171,0,\'З\'\'эднувач\',\'кубоподібна\',\'8017\',0,35,85,\'З\'\'эднувальний профіль S-35,H-85 RAL 8017\',29.49,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (852,1603509580171,0,\'З\'\'эднувач\',\'кубоподібна\',\'8017\',0,35,95,\'З\'\'эднувальний профіль S-35,H-95 RAL 8017\',32.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (853,1603510580171,0,\'З\'\'эднувач\',\'кубоподібна\',\'8017\',0,35,105,\'З\'\'эднувальний профіль S-35,H-105 RAL 8017\',35.44,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (854,1603503500011,0,\'З\'\'эднувач\',\'кубоподібна\',\'Дерево\',0,35,35,\'З\'\'эднувальний профіль S-35,H-35 RAL  Дерево\',21.79,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (855,1603504500011,0,\'З\'\'эднувач\',\'кубоподібна\',\'Дерево\',0,35,45,\'З\'\'эднувальний профіль S-35,H-45 RAL  Дерево\',23.68,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (856,1603505500011,0,\'З\'\'эднувач\',\'кубоподібна\',\'Дерево\',0,35,55,\'З\'\'эднувальний профіль S-35,H-55 RAL  Дерево\',25.73,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (857,1603506500011,0,\'З\'\'эднувач\',\'кубоподібна\',\'Дерево\',0,35,65,\'З\'\'эднувальний профіль S-35,H-65 RAL  Дерево\',27.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (858,1603507500011,0,\'З\'\'эднувач\',\'кубоподібна\',\'Дерево\',0,35,75,\'З\'\'эднувальний профіль S-35,H-75 RAL  Дерево\',31.21,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (859,1603508500011,0,\'З\'\'эднувач\',\'кубоподібна\',\'Дерево\',0,35,85,\'З\'\'эднувальний профіль S-35,H-85 RAL  Дерево\',34.40,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (860,1603509500011,0,\'З\'\'эднувач\',\'кубоподібна\',\'Дерево\',0,35,95,\'З\'\'эднувальний профіль S-35,H-95 RAL  Дерево\',37.59,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (861,1603510500011,0,\'З\'\'эднувач\',\'кубоподібна\',\'Дерево\',0,35,105,\'З\'\'эднувальний профіль S-35,H-105 RAL  Дерево\',41.35,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (862,1603503500001,0,\'З\'\'эднувач\',\'кубоподібна\',\'ANY RAL\',0,35,35,\'З\'\'эднувальний профіль S-35,H-35 ANY RAL\',31.13,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (863,1603504500001,0,\'З\'\'эднувач\',\'кубоподібна\',\'ANY RAL\',0,35,45,\'З\'\'эднувальний профіль S-35,H-45 ANY RAL\',33.83,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (864,1603505500001,0,\'З\'\'эднувач\',\'кубоподібна\',\'ANY RAL\',0,35,55,\'З\'\'эднувальний профіль S-35,H-55 ANY RAL\',36.76,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (865,1603506500001,0,\'З\'\'эднувач\',\'кубоподібна\',\'ANY RAL\',0,35,65,\'З\'\'эднувальний профіль S-35,H-65 ANY RAL\',39.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (866,1603507500001,0,\'З\'\'эднувач\',\'кубоподібна\',\'ANY RAL\',0,35,75,\'З\'\'эднувальний профіль S-35,H-75 ANY RAL\',44.58,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (867,1603508500001,0,\'З\'\'эднувач\',\'кубоподібна\',\'ANY RAL\',0,35,85,\'З\'\'эднувальний профіль S-35,H-85 ANY RAL\',49.14,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (868,1603509500001,0,\'З\'\'эднувач\',\'кубоподібна\',\'ANY RAL\',0,35,95,\'З\'\'эднувальний профіль S-35,H-95 ANY RAL\',53.70,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (869,1603510500001,0,\'З\'\'эднувач\',\'кубоподібна\',\'ANY RAL\',0,35,105,\'З\'\'эднувальний профіль S-35,H-105 ANY RAL\',59.07,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (870,11115900312,0,\'Fortis\',\'T15\',\'9003\',1200,15,25,\'Профіль KRAFT Fortis T-15 1200*25*15 мм RAL 9003\',12.87,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (871,11115900336,0,\'Fortis\',\'T15\',\'9003\',3600,15,38,\'Профіль KRAFT Fortis T-15 3600*38*15 мм RAL 9003\',25.99,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (872,11115900306,0,\'Fortis\',\'T15\',\'9003\',600,15,25,\'Профіль KRAFT Fortis T-15 600*25*15 мм RAL 9003\',77.22,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (873,11115900512,0,\'Fortis\',\'T15\',\'9005\',1200,15,25,\'Профіль KRAFT Fortis T-15 1200*25*15 мм RAL 9005\',16.09,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (874,11115900536,0,\'Fortis\',\'T15\',\'9005\',3600,15,38,\'Профіль KRAFT Fortis T-15 3600*38*15 мм RAL 9005\',32.43,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (875,11115900506,0,\'Fortis\',\'T15\',\'9005\',600,15,25,\'Профіль KRAFT Fortis T-15 600*25*15 мм RAL 9005\',97.02,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (876,11115900612,0,\'Fortis\',\'T15\',\'9006\',1200,15,25,\'Профіль KRAFT Fortis T-15 1200*25*15 мм RAL 9006\',16.09,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (877,11115900636,0,\'Fortis\',\'T15\',\'9006\',3600,15,38,\'Профіль KRAFT Fortis T-15 3600*38*15 мм RAL 9006\',32.43,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (878,11115900606,0,\'Fortis\',\'T15\',\'9006\',600,15,25,\'Профіль KRAFT Fortis T-15 600*25*15 мм RAL 9006\',97.02,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (879,11115702412,0,\'Fortis\',\'T15\',\'7024\',1200,15,25,\'Профіль KRAFT Fortis T-15 1200*25*15 мм RAL 7024\',16.09,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (880,11115702436,0,\'Fortis\',\'T15\',\'7024\',3600,15,38,\'Профіль KRAFT Fortis T-15 3600*38*15 мм RAL 7024\',32.43,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (881,11115702406,0,\'Fortis\',\'T15\',\'7024\',600,15,25,\'Профіль KRAFT Fortis T-15 600*25*15 мм RAL 7024\',97.02,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (882,11115801712,0,\'Fortis\',\'T15\',\'8017\',1200,15,25,\'Профіль KRAFT Fortis T-15 1200*25*15 мм RAL 8017\',16.09,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (883,11115801736,0,\'Fortis\',\'T15\',\'8017\',3600,15,38,\'Профіль KRAFT Fortis T-15 3600*38*15 мм RAL 8017\',32.43,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (884,11115801706,0,\'Fortis\',\'T15\',\'8017\',600,15,25,\'Профіль KRAFT Fortis T-15 600*25*15 мм RAL 8017\',97.02,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (885,11115000112,0,\'Fortis\',\'T15\',\'Дерево\',1200,15,25,\'Профіль KRAFT Fortis T-15 1200*25*15 мм RAL Дерево\',16.73,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (886,11115000136,0,\'Fortis\',\'T15\',\'Дерево\',3600,15,38,\'Профіль KRAFT Fortis T-15 3600*38*15 мм RAL Дерево\',33.79,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (887,11115000106,0,\'Fortis\',\'T15\',\'Дерево\',600,15,25,\'Профіль KRAFT Fortis T-15 600*25*15 мм RAL Дерево\',100.39,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (888,11115000012,0,\'Fortis\',\'T15\',\'ANY RAL\',1200,15,25,\'Профіль KRAFT Fortis T-15 1200*25*15 мм ANY RAL\',16.73,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (889,11115000036,0,\'Fortis\',\'T15\',\'ANY RAL\',3600,15,38,\'Профіль KRAFT Fortis T-15 3600*38*15 мм ANY RAL\',33.79,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (890,11115000006,0,\'Fortis\',\'T15\',\'ANY RAL\',600,15,25,\'Профіль KRAFT Fortis T-15 600*25*15 мм ANY RAL\',100.39,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (891,11124900312,0,\'Fortis\',\'T24\',\'9003\',1200,24,25,\'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 9003\',10.89,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (892,11124900336,0,\'Fortis\',\'T24\',\'9003\',3600,24,38,\'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 9003\',21.78,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (893,11124900306,0,\'Fortis\',\'T24\',\'9003\',600,24,25,\'Профіль KRAFT Fortis T-24 600*25*24мм RAL 9003\',65.34,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (894,11124900512,0,\'Fortis\',\'T24\',\'9005\',1200,24,25,\'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 9005\',12.38,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (895,11124900536,0,\'Fortis\',\'T24\',\'9005\',3600,24,38,\'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 9005\',24.51,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (896,11124900506,0,\'Fortis\',\'T24\',\'9005\',600,24,25,\'Профіль KRAFT Fortis T-24 600*25*24мм RAL 9005\',73.76,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (897,11124900612,0,\'Fortis\',\'T24\',\'9006\',1200,24,25,\'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 9006\',12.38,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (898,11124900636,0,\'Fortis\',\'T24\',\'9006\',3600,24,38,\'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 9006\',24.51,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (899,11124900606,0,\'Fortis\',\'T24\',\'9006\',600,24,25,\'Профіль KRAFT Fortis T-24 600*25*24мм RAL 9006\',73.76,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (900,11124702412,0,\'Fortis\',\'T24\',\'7024\',1200,24,25,\'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 7024\',13.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (901,11124702436,0,\'Fortis\',\'T24\',\'7024\',3600,24,38,\'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 7024\',25.72,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (902,11124702406,0,\'Fortis\',\'T24\',\'7024\',600,24,25,\'Профіль KRAFT Fortis T-24 600*25*24мм RAL 7024\',77.44,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (903,11124801712,0,\'Fortis\',\'T24\',\'8017\',1200,24,25,\'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 8017\',13.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (904,11124801736,0,\'Fortis\',\'T24\',\'8017\',3600,24,38,\'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 8017\',25.72,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (905,11124801706,0,\'Fortis\',\'T24\',\'8017\',600,24,25,\'Профіль KRAFT Fortis T-24 600*25*24мм RAL 8017\',77.44,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (906,11124000112,0,\'Fortis\',\'T24\',\'Дерево\',1200,24,25,\'Профіль KRAFT Fortis T-24 1200*25*24мм RAL Дерево\',14.16,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (907,11124000136,0,\'Fortis\',\'T24\',\'Дерево\',3600,24,38,\'Профіль KRAFT Fortis T-24 3600*38*24мм RAL Дерево\',28.31,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (908,11124000106,0,\'Fortis\',\'T24\',\'Дерево\',600,24,25,\'Профіль KRAFT Fortis T-24 600*25*24мм RAL Дерево\',84.94,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (909,11124000012,0,\'Fortis\',\'T24\',\'ANY RAL\',1200,24,25,\'Профіль KRAFT Fortis T-24 1200*25*24мм ANY RAL\',14.16,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (910,11124000036,0,\'Fortis\',\'T24\',\'ANY RAL\',3600,24,38,\'Профіль KRAFT Fortis T-24 3600*38*24мм ANY RAL\',28.31,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (911,11124000006,0,\'Fortis\',\'T24\',\'ANY RAL\',600,24,25,\'Профіль KRAFT Fortis T-24 600*25*24мм ANY RAL\',84.94,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (912,11224900312,0,\'Nova\',\'T24\',\'9003\',1200,24,25,\'Профіль KRAFT Nova T-24 1200*25*24мм RAL 9003\',6.13,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (913,11224900336,0,\'Nova\',\'T24\',\'9003\',3600,24,38,\'Профіль KRAFT Nova T-24 3600*38*24мм RAL 9003\',12.25,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (914,11224900306,0,\'Nova\',\'T24\',\'9003\',600,24,25,\'Профіль KRAFT Nova T-24 600*25*24мм RAL 9003\',39.76,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (915,221013000,0,\'0\',\'вушко\',\'0\',3000,0,0,\'Дріт з вушком 3000 мм\',18.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (916,221012000,0,\'0\',\'вушко\',\'0\',2000,0,0,\'Дріт з вушком 2000 мм\',9.79,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (917,221011500,0,\'0\',\'вушко\',\'0\',1500,0,0,\'Дріт з вушком 1500 мм\',7.48,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (918,221011000,0,\'0\',\'вушко\',\'0\',1000,0,0,\'Дріт з вушком 1000 мм\',4.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (919,22101750,0,\'0\',\'вушко\',\'0\',750,0,0,\'Дріт з вушком 750 мм\',3.91,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (920,22101500,0,\'0\',\'вушко\',\'0\',500,0,0,\'Дріт з вушком 500 мм\',2.61,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (921,22101250,0,\'0\',\'вушко\',\'0\',250,0,0,\'Дріт з вушком 250 мм\',1.40,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (922,221113000,0,\'0\',\'гак\',\'0\',3000,0,0,\'Дріт з гаком 3000 мм\',18.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (923,221112000,0,\'0\',\'гак\',\'0\',2000,0,0,\'Дріт з гаком 2000 мм\',9.79,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (924,221111500,0,\'0\',\'гак\',\'0\',1500,0,0,\'Дріт з гаком 1500 мм\',7.48,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (925,221111000,0,\'0\',\'гак\',\'0\',1000,0,0,\'Дріт з гаком 1000 мм\',4.92,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (926,22111750,0,\'0\',\'гак\',\'0\',750,0,0,\'Дріт з гаком 750 мм\',3.91,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (927,22111500,0,\'0\',\'гак\',\'0\',500,0,0,\'Дріт з гаком 500 мм\',2.61,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (928,22111250,0,\'0\',\'гак\',\'0\',250,0,0,\'Дріт з гаком 250 мм\',1.40,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (929,2223,0,\'0\',\'підвіс\',\'0\',0,0,0,\'Пружинний підвіс\',2.75,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (930,1319003,0,\'Fortis\',\'L\',\'9003\',3000,0,0,\'Профіль пристінний KRAFT L 19*24*3000 мм RAL 9003\',42.74,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (931,1319005,0,\'Fortis\',\'L\',\'9005\',3000,0,0,\'Профіль пристінний KRAFT L 19*24*3000 мм RAL 9005\',47.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (932,1319006,0,\'Fortis\',\'L\',\'9006\',3000,0,0,\'Профіль пристінний KRAFT L 19*24*3000 мм RAL 9006\',47.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (933,1317024,0,\'Fortis\',\'L\',\'7024\',3000,0,0,\'Профіль пристінний KRAFT L 19*24*3000 мм RAL 7024\',49.36,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (934,1318017,0,\'Fortis\',\'L\',\'8017\',3000,0,0,\'Профіль пристінний KRAFT L 19*24*3000 мм RAL 8017\',51.82,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (935,1310001,0,\'Fortis\',\'L\',\'Дерево\',3000,0,0,\'Профіль пристінний KRAFT L 19*24*3000 мм RAL Дерево\',64.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (936,1310000,0,\'Fortis\',\'L\',\'ANY RAL\',3000,0,0,\'Профіль пристінний KRAFT L 19*24*3000 мм ANY RAL\',64.11,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (937,1329003,0,\'Nova\',\'L\',\'9003\',3000,0,0,\'Профіль пристінний KRAFT Nova L 19*24*3000 мм RAL 9003\',22.68,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (938,1339003,0,\'Fortis\',\'W\',\'9003\',3000,0,0,\'Профіль пристінний KRAFT W 20*15*8*15*3000 мм RAL 9003\',70.05,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (939,1339005,0,\'Fortis\',\'W\',\'9005\',3000,0,0,\'Профіль пристінний KRAFT W 20*15*8*15*3000 мм RAL 9005\',105.06,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (940,1339006,0,\'Fortis\',\'W\',\'9006\',3000,0,0,\'Профіль пристінний KRAFT W 20*15*8*15*3000 мм RAL 9006\',87.37,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (941,1338017,0,\'Fortis\',\'W\',\'8017\',3000,0,0,\'Профіль пристінний KRAFT W 20*15*8*15*3000 мм RAL 8017\',105.06,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (942,1337024,0,\'Fortis\',\'W\',\'7024\',3000,0,0,\'Профіль пристінний KRAFT W 20*15*8*15*3000 мм RAL 7024\',105.06,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (943,1330000,0,\'Fortis\',\'W\',\'ANY RAL\',3000,0,0,\'Профіль пристінний KRAFT W 20*15*8*15*3000 мм ANY RAL\',105.06,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (944,2221,0,\'Підвіс CS-10 для стелі типу "Армстронг"\',\'0\',\'0\',0,0,0,\'Підвіс CS-10 для стелі типу "Армстронг"\',4.59,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (945,2222,0,\'Підвіс для стелі типу "Грильято"\',\'0\',\'0\',0,0,0,\'Підвіс для стелі типу "Грильято"\',4.59,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (946,2231100406,0,\'Дюбель для підвісної стелі метал. 6х40 (100шт)\',\'0\',\'0\',0,0,0,\'Дюбель для підвісної стелі метал. 6х40 (100шт)\',165.00,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (947,2232100406,0,\'Дюбель з ударн.шур гриб 6х40 (100 шт.) К-06040\',\'0\',\'0\',0,0,0,\'Дюбель з ударн.шур гриб 6х40 (100 шт.) К-06040\',45.84,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (948,2200,0,\'Траверса ал/потолка 4м\',\'0\',\'0\',4000,0,0,\'Траверса ал/потолка 4м\',146.66,NULL,NULL)');
DB::insert('INSERT INTO profile_grilyatos(id,vendor_code,cells,type,speciality,color,length,weight,height,description,price,created_at,updated_at) VALUES (949,1111,0,\'З\'\'єднувач грильято\',\'0\',\'0\',0,0,0,\'З\'\'єднувач грильято\',3.66,NULL,NULL)');

    }
}
