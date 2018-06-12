<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'id'=>1,
            'vendor_code'=>'00-00001004',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'1200',
            'color'=>9003,
            'description'=>'Профіль KRAFT Fortis HD T-24 1200*25*24мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>2,
            'vendor_code'=>'00-00001003',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'3600',
            'color'=>9003,
            'description'=>'Профіль KRAFT Fortis HD T-24 3600*38*24мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>3,
            'vendor_code'=>'00-00001005',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'600',
            'color'=>9003,
            'description'=>'Профіль KRAFT Fortis HD T-24 600*25*24мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>4,
            'vendor_code'=>'00-00000207',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'1200',
            'color'=>7024,
            'description'=>'Профіль KRAFT Fortis T-15 1200*25*15мм RAL 7024',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>5,
            'vendor_code'=>'00-00000210',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'1200',
            'color'=>8017,
            'description'=>'Профіль KRAFT Fortis T-15 1200*25*15мм RAL 8017',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>6,
            'vendor_code'=>'00-00000214',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'1200',
            'color'=>9003,
            'description'=>'Профіль KRAFT Fortis T-15 1200*25*15мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>7,
            'vendor_code'=>'00-00000219',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'1200',
            'color'=>9005,
            'description'=>'Профіль KRAFT Fortis T-15 1200*25*15мм RAL 9005',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>8,
            'vendor_code'=>'00-00000226',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'1200',
            'color'=>9006,
            'description'=>'Профіль KRAFT Fortis T-15 1200*25*15мм RAL 9006',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>9,
            'vendor_code'=>'00-00000242',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'1200',
            'color'=>9007,
            'description'=>'Профіль KRAFT Fortis T-15 1200*25*15мм RAL 9007',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>10,
            'vendor_code'=>'00-00000209',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'3600',
            'color'=>7024,
            'description'=>'Профіль KRAFT Fortis T-15 3600*38*15мм RAL 7024',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>11,
            'vendor_code'=>'00-00000212',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'3600',
            'color'=>8017,
            'description'=>'Профіль KRAFT Fortis T-15 3600*38*15мм RAL 8017',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>12,
            'vendor_code'=>'00-00000217',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'3600',
            'color'=>9003,
            'description'=>'Профіль KRAFT Fortis T-15 3600*38*15мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>13,
            'vendor_code'=>'00-00000223',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'3600',
            'color'=>9005,
            'description'=>'Профіль KRAFT Fortis T-15 3600*38*15мм RAL 9005',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>14,
            'vendor_code'=>'00-00000231',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'3600',
            'color'=>9006,
            'description'=>'Профіль KRAFT Fortis T-15 3600*38*15мм RAL 9006',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>15,
            'vendor_code'=>'00-00000240',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'3600',
            'color'=>9007,
            'description'=>'Профіль KRAFT Fortis T-15 3600*38*15мм RAL 9007',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>16,
            'vendor_code'=>'00-00000208',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'600',
            'color'=>7024,
            'description'=>'Профіль KRAFT Fortis T-15 600*25*15мм RAL 7024',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>17,
            'vendor_code'=>'00-00000211',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'600',
            'color'=>8017,
            'description'=>'Профіль KRAFT Fortis T-15 600*25*15мм RAL 8017',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>18,
            'vendor_code'=>'00-00000216',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'600',
            'color'=>9003,
            'description'=>'Профіль KRAFT Fortis T-15 600*25*15мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>19,
            'vendor_code'=>'00-00000221',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'600',
            'color'=>9005,
            'description'=>'Профіль KRAFT Fortis T-15 600*25*15мм RAL 9005',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>20,
            'vendor_code'=>'00-00000229',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'600',
            'color'=>9006,
            'description'=>'Профіль KRAFT Fortis T-15 600*25*15мм RAL 9006',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>21,
            'vendor_code'=>'00-00000241',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>15,
            'profile'=>'600',
            'color'=>9007,
            'description'=>'Профіль KRAFT Fortis T-15 600*25*15мм RAL 9007',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>22,
            'vendor_code'=>'00-00000152',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'1200',
            'color'=>1015,
            'description'=>'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 1015',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>23,
            'vendor_code'=>'00-00000155',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'1200',
            'color'=>1033,
            'description'=>'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 1033',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>24,
            'vendor_code'=>'00-00000145',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'1200',
            'color'=>7024,
            'description'=>'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 7024',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>25,
            'vendor_code'=>'00-00000148',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'1200',
            'color'=>8017,
            'description'=>'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 8017',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>26,
            'vendor_code'=>'00-00000134',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'1200',
            'color'=>9003,
            'description'=>'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>27,
            'vendor_code'=>'00-00000136',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'1200',
            'color'=>9005,
            'description'=>'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 9005',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>28,
            'vendor_code'=>'00-00000139',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'1200',
            'color'=>9006,
            'description'=>'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 9006',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>29,
            'vendor_code'=>'00-00000142',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'1200',
            'color'=>9007,
            'description'=>'Профіль KRAFT Fortis T-24 1200*25*24мм RAL 9007',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>30,
            'vendor_code'=>'00-00000996',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'300',
            'color'=>9003,
            'description'=>'Профіль KRAFT Fortis T-24 300*25*24мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>31,
            'vendor_code'=>'00-00001256',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'3000',
            'color'=>7024,
            'description'=>'Профіль KRAFT Fortis T-24 3000*38*24мм RAL 7024',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>32,
            'vendor_code'=>'00-00000153',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'3600',
            'color'=>1015,
            'description'=>'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 1015',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>33,
            'vendor_code'=>'00-00000157',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'3600',
            'color'=>1033,
            'description'=>'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 1033',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>34,
            'vendor_code'=>'00-00000146',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'3600',
            'color'=>7024,
            'description'=>'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 7024',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>35,
            'vendor_code'=>'00-00000149',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'3600',
            'color'=>8017,
            'description'=>'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 8017',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>36,
            'vendor_code'=>'00-00000135',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'3600',
            'color'=>9003,
            'description'=>'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>37,
            'vendor_code'=>'00-00000138',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'3600',
            'color'=>9005,
            'description'=>'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 9005',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>38,
            'vendor_code'=>'00-00000140',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'3600',
            'color'=>9006,
            'description'=>'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 9006',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>39,
            'vendor_code'=>'00-00000143',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'3600',
            'color'=>9007,
            'description'=>'Профіль KRAFT Fortis T-24 3600*38*24мм RAL 9007',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>40,
            'vendor_code'=>'00-00001257',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'5000',
            'color'=>7024,
            'description'=>'Профіль KRAFT Fortis T-24 5000*38*24мм RAL 7024',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>41,
            'vendor_code'=>'00-00000154',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'600',
            'color'=>1015,
            'description'=>'Профіль KRAFT Fortis T-24 600*25*24мм RAL 1015',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>42,
            'vendor_code'=>'00-00000159',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'600',
            'color'=>1033,
            'description'=>'Профіль KRAFT Fortis T-24 600*25*24мм RAL 1033',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>43,
            'vendor_code'=>'00-00000147',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'600',
            'color'=>7024,
            'description'=>'Профіль KRAFT Fortis T-24 600*25*24мм RAL 7024',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>44,
            'vendor_code'=>'00-00000150',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'600',
            'color'=>8017,
            'description'=>'Профіль KRAFT Fortis T-24 600*25*24мм RAL 8017',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>45,
            'vendor_code'=>'00-00000131',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'600',
            'color'=>9003,
            'description'=>'Профіль KRAFT Fortis T-24 600*25*24мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>46,
            'vendor_code'=>'00-00000137',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'600',
            'color'=>9005,
            'description'=>'Профіль KRAFT Fortis T-24 600*25*24мм RAL 9005',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>47,
            'vendor_code'=>'00-00000141',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'600',
            'color'=>9006,
            'description'=>'Профіль KRAFT Fortis T-24 600*25*24мм RAL 9006',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>48,
            'vendor_code'=>'00-00000144',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>24,
            'profile'=>'600',
            'color'=>9007,
            'description'=>'Профіль KRAFT Fortis T-24 600*25*24мм RAL 9007',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>49,
            'vendor_code'=>'00-00000243',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>15,
            'profile'=>'1200',
            'color'=>9003,
            'description'=>'Профіль KRAFT Nova T-15 1200*25*24мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>50,
            'vendor_code'=>'00-00000245',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>15,
            'profile'=>'3600',
            'color'=>9003,
            'description'=>'Профіль KRAFT Nova T-15 3600*38*24мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>51,
            'vendor_code'=>'00-00000244',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>15,
            'profile'=>'600',
            'color'=>9003,
            'description'=>'Профіль KRAFT Nova T-15 600*25*24мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>52,
            'vendor_code'=>'00-00000204',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'1200',
            'color'=>1013,
            'description'=>'Профіль KRAFT Nova T-24 1200*25*24мм RAL 1013',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>53,
            'vendor_code'=>'00-00000175',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'1200',
            'color'=>7024,
            'description'=>'Профіль KRAFT Nova T-24 1200*25*24мм RAL 7024',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>54,
            'vendor_code'=>'00-00001267',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'1200',
            'color'=>8017,
            'description'=>'Профіль KRAFT Nova T-24 1200*25*24мм RAL 8017',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>55,
            'vendor_code'=>'00-00000192',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'1200',
            'color'=>9003,
            'description'=>'Профіль KRAFT Nova T-24 1200*25*24мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>56,
            'vendor_code'=>'00-00000195',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'1200',
            'color'=>9005,
            'description'=>'Профіль KRAFT Nova T-24 1200*25*24мм RAL 9005',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>57,
            'vendor_code'=>'00-00000198',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'1200',
            'color'=>9006,
            'description'=>'Профіль KRAFT Nova T-24 1200*25*24мм RAL 9006',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>58,
            'vendor_code'=>'00-00000201',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'1200',
            'color'=>9007,
            'description'=>'Профіль KRAFT Nova T-24 1200*25*24мм RAL 9007',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>59,
            'vendor_code'=>'00-00000998',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'300',
            'color'=>9003,
            'description'=>'Профіль KRAFT Nova T-24 300*25*24мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>60,
            'vendor_code'=>'00-00000997',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'300',
            'color'=>9003,
            'description'=>'Профіль KRAFT Nova T-24 300*38*24мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>61,
            'vendor_code'=>'00-00000206',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'3600',
            'color'=>1013,
            'description'=>'Профіль KRAFT Nova T-24 3600*25*24мм RAL 1013',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>62,
            'vendor_code'=>'00-00000184',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'3600',
            'color'=>7024,
            'description'=>'Профіль KRAFT Nova T-24 3600*38*24мм RAL 7024',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>63,
            'vendor_code'=>'00-00000190',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'3600',
            'color'=>8017,
            'description'=>'Профіль KRAFT Nova T-24 3600*38*24мм RAL 8017',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>64,
            'vendor_code'=>'00-00000194',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'3600',
            'color'=>9003,
            'description'=>'Профіль KRAFT Nova T-24 3600*38*24мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>65,
            'vendor_code'=>'00-00000197',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'3600',
            'color'=>9005,
            'description'=>'Профіль KRAFT Nova T-24 3600*38*24мм RAL 9005',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>66,
            'vendor_code'=>'00-00000200',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'3600',
            'color'=>9006,
            'description'=>'Профіль KRAFT Nova T-24 3600*38*24мм RAL 9006',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>67,
            'vendor_code'=>'00-00000203',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'3600',
            'color'=>9007,
            'description'=>'Профіль KRAFT Nova T-24 3600*38*24мм RAL 9007',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>68,
            'vendor_code'=>'00-00000205',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'600',
            'color'=>1013,
            'description'=>'Профіль KRAFT Nova T-24 600*25*24мм RAL 1013',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>69,
            'vendor_code'=>'00-00000188',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'600',
            'color'=>7024,
            'description'=>'Профіль KRAFT Nova T-24 600*25*24мм RAL 7024',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>70,
            'vendor_code'=>'00-00000191',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'600',
            'color'=>8017,
            'description'=>'Профіль KRAFT Nova T-24 600*25*24мм RAL 8017',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>71,
            'vendor_code'=>'00-00000193',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'600',
            'color'=>9003,
            'description'=>'Профіль KRAFT Nova T-24 600*25*24мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>72,
            'vendor_code'=>'00-00000196',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'600',
            'color'=>9005,
            'description'=>'Профіль KRAFT Nova T-24 600*25*24мм RAL 9005',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>73,
            'vendor_code'=>'00-00000199',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'600',
            'color'=>9006,
            'description'=>'Профіль KRAFT Nova T-24 600*25*24мм RAL 9006',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profiles')->insert([
            'id'=>74,
            'vendor_code'=>'00-00000202',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>24,
            'profile'=>'600',
            'color'=>9007,
            'description'=>'Профіль KRAFT Nova T-24 600*25*24мм RAL 9007',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        //angle
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>1,
            'vendor_code'=>'00-00000888',
            'price'=>'11',
            'model'=>'Fortis',
            'profile_thickness'=>0,
            'profile'=>'L',
            'color'=>9003,
            'description'=>'Профіль пристінний KRAFT Fortis L 19*24*3000 мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>2,
            'vendor_code'=>'00-00001277',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'L',
            'color'=>7011,
            'description'=>'Профіль пристінний KRAFT L 19*24*3000 мм RAL 7011',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>3,
            'vendor_code'=>'00-00001272',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'L',
            'color'=>7016,
            'description'=>'Профіль пристінний KRAFT L 19*24*3000 мм RAL 7016',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>4,
            'vendor_code'=>'00-00000891',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'L',
            'color'=>7024,
            'description'=>'Профіль пристінний KRAFT L 19*24*3000 мм RAL 7024',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>5,
            'vendor_code'=>'00-00000892',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'L',
            'color'=>8017,
            'description'=>'Профіль пристінний KRAFT L 19*24*3000 мм RAL 8017',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>6,
            'vendor_code'=>'00-00000893',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'L',
            'color'=>9005,
            'description'=>'Профіль пристінний KRAFT L 19*24*3000 мм RAL 9005',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>7,
            'vendor_code'=>'00-00000894',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'L',
            'color'=>9006,
            'description'=>'Профіль пристінний KRAFT L 19*24*3000 мм RAL 9006',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>8,
            'vendor_code'=>'00-00000895',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'L',
            'color'=>9007,
            'description'=>'Профіль пристінний KRAFT L 19*24*3000 мм RAL 9007',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>9,
            'vendor_code'=>'00-00000999',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'L',
            'color'=>NULL,
            'description'=>'Профіль пристінний KRAFT L 19*24*3000 мм Дерево',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>10,
            'vendor_code'=>'00-00001180',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'L',
            'color'=>1015,
            'description'=>'Профіль пристінний KRAFT L 19*24*3000мм RAL 1015',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>11,
            'vendor_code'=>'00-00001182',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'L',
            'color'=>1033,
            'description'=>'Профіль пристінний KRAFT L 19*24*3000мм RAL 1033',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>12,
            'vendor_code'=>'00-00001199',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'L',
            'color'=>2004,
            'description'=>'Профіль пристінний KRAFT L 19*24*3000мм RAL 2004',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>13,
            'vendor_code'=>'00-00001000',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'L',
            'color'=>7021,
            'description'=>'Профіль пристінний KRAFT L 19*24*3000мм RAL 7021',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>14,
            'vendor_code'=>'00-00001185',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'L',
            'color'=>7035,
            'description'=>'Профіль пристінний KRAFT L 19*24*3000мм RAL 7035',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>15,
            'vendor_code'=>'00-00001297',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'L',
            'color'=>8025,
            'description'=>'Профіль пристінний KRAFT L 19*24*3000мм RAL 8025',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>16,
            'vendor_code'=>'00-00000889',
            'price'=>'11',
            'model'=>'Nova',
            'profile_thickness'=>0,
            'profile'=>'L',
            'color'=>9003,
            'description'=>'Профіль пристінний KRAFT Nova L 19*24*3000 мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>17,
            'vendor_code'=>'00-00000890',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'W',
            'color'=>9003,
            'description'=>'Профіль пристінний KRAFT W 20*15*8*15*3000 мм RAL 9003',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>18,
            'vendor_code'=>'00-00001311',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'W',
            'color'=>9005,
            'description'=>'Профіль пристінний KRAFT W 20*15*8*15*3000 мм RAL 9005',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        DB::table('vendor_code_t_profile_angles')->insert([
            'id'=>19,
            'vendor_code'=>'00-00001002',
            'price'=>'11',
            'model'=>'',
            'profile_thickness'=>0,
            'profile'=>'W',
            'color'=>9006,
            'description'=>'Профіль пристінний KRAFT W 20*15*8*15*3000 мм RAL 9006',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
        //susps
        DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>1,
            'vendor_code'=>'00-00000864',
            'price'=>'11',
            'model'=>'Дріт з вушком',
            'profile_thickness'=>0,
            'profile'=>'1000',
            'color'=>0,
            'description'=>'Дріт з вушком 1000 мм',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>2,
            'vendor_code'=>'00-00000850',
            'price'=>'11',
            'model'=>'Дріт з вушком',
            'profile_thickness'=>0,
            'profile'=>'1000',
            'color'=>0,
            'description'=>'Дріт з вушком 1000 мм чорний',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>3,
            'vendor_code'=>'00-00000865',
            'price'=>'11',
            'model'=>'Дріт з вушком',
            'profile_thickness'=>0,
            'profile'=>'1500',
            'color'=>0,
            'description'=>'Дріт з вушком 1500 мм',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>4,
            'vendor_code'=>'00-00000851',
            'price'=>'11',
            'model'=>'Дріт з вушком',
            'profile_thickness'=>0,
            'profile'=>'1500',
            'color'=>0,
            'description'=>'Дріт з вушком 1500 мм чорний',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>5,
            'vendor_code'=>'00-00000866',
            'price'=>'11',
            'model'=>'Дріт з вушком',
            'profile_thickness'=>0,
            'profile'=>'2000',
            'color'=>0,
            'description'=>'Дріт з вушком 2000 мм',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>6,
            'vendor_code'=>'00-00000852',
            'price'=>'11',
            'model'=>'Дріт з вушком',
            'profile_thickness'=>0,
            'profile'=>'2000',
            'color'=>0,
            'description'=>'Дріт з вушком 2000 мм чорний',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>7,
            'vendor_code'=>'00-00000867',
            'price'=>'11',
            'model'=>'Дріт з вушком',
            'profile_thickness'=>0,
            'profile'=>'250',
            'color'=>0,
            'description'=>'Дріт з вушком 250 мм.',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>8,
            'vendor_code'=>'00-00000853',
            'price'=>'11',
            'model'=>'Дріт з вушком',
            'profile_thickness'=>0,
            'profile'=>'250',
            'color'=>0,
            'description'=>'Дріт з вушком 250 мм. чорний',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>9,
            'vendor_code'=>'00-00000868',
            'price'=>'11',
            'model'=>'Дріт з вушком',
            'profile_thickness'=>0,
            'profile'=>'2500',
            'color'=>0,
            'description'=>'Дріт з вушком 2500 мм',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>10,
            'vendor_code'=>'00-00000869',
            'price'=>'11',
            'model'=>'Дріт з вушком',
            'profile_thickness'=>0,
            'profile'=>'3000',
            'color'=>0,
            'description'=>'Дріт з вушком 3000 мм',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>11,
            'vendor_code'=>'00-00000854',
            'price'=>'11',
            'model'=>'Дріт з вушком',
            'profile_thickness'=>0,
            'profile'=>'3000',
            'color'=>0,
            'description'=>'Дріт з вушком 3000 мм чорний',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>12,
            'vendor_code'=>'00-00000870',
            'price'=>'11',
            'model'=>'Дріт з вушком',
            'profile_thickness'=>0,
            'profile'=>'500',
            'color'=>0,
            'description'=>'Дріт з вушком 500 мм',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>13,
            'vendor_code'=>'00-00000855',
            'price'=>'11',
            'model'=>'Дріт з вушком',
            'profile_thickness'=>0,
            'profile'=>'500',
            'color'=>0,
            'description'=>'Дріт з вушком 500 мм чорний',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>14,
            'vendor_code'=>'00-00000871',
            'price'=>'11',
            'model'=>'Дріт з вушком',
            'profile_thickness'=>0,
            'profile'=>'750',
            'color'=>0,
            'description'=>'Дріт з вушком 750 мм',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>15,
            'vendor_code'=>'00-00000856',
            'price'=>'11',
            'model'=>'Дріт з вушком',
            'profile_thickness'=>0,
            'profile'=>'750',
            'color'=>0,
            'description'=>'Дріт з вушком 750 мм чорний',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>16,
            'vendor_code'=>'00-00000857',
            'price'=>'11',
            'model'=>'Дріт з гаком',
            'profile_thickness'=>0,
            'profile'=>'1000',
            'color'=>0,
            'description'=>'Дріт з гаком 1000 мм. чорний',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>17,
            'vendor_code'=>'00-00000858',
            'price'=>'11',
            'model'=>'Дріт з гаком',
            'profile_thickness'=>0,
            'profile'=>'125',
            'color'=>0,
            'description'=>'Дріт з гаком 125 мм. чорний',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>18,
            'vendor_code'=>'00-00000872',
            'price'=>'11',
            'model'=>'Дріт з гаком',
            'profile_thickness'=>0,
            'profile'=>'1500',
            'color'=>0,
            'description'=>'Дріт з гаком 1500 мм. ',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>19,
            'vendor_code'=>'00-00000859',
            'price'=>'11',
            'model'=>'Дріт з гаком',
            'profile_thickness'=>0,
            'profile'=>'1500',
            'color'=>0,
            'description'=>'Дріт з гаком 1500 мм. чорний',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>20,
            'vendor_code'=>'00-00000860',
            'price'=>'11',
            'model'=>'Дріт з гаком',
            'profile_thickness'=>0,
            'profile'=>'2000',
            'color'=>0,
            'description'=>'Дріт з гаком 2000 мм. чорний',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>21,
            'vendor_code'=>'00-00000873',
            'price'=>'11',
            'model'=>'Дріт з гаком',
            'profile_thickness'=>0,
            'profile'=>'250',
            'color'=>0,
            'description'=>'Дріт з гаком 250 мм.',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>22,
            'vendor_code'=>'00-00000861',
            'price'=>'11',
            'model'=>'Дріт з гаком',
            'profile_thickness'=>0,
            'profile'=>'250',
            'color'=>0,
            'description'=>'Дріт з гаком 250 мм. чорний',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>23,
            'vendor_code'=>'00-00000862',
            'price'=>'11',
            'model'=>'Дріт з гаком',
            'profile_thickness'=>0,
            'profile'=>'3000',
            'color'=>0,
            'description'=>'Дріт з гаком 3000 мм чорний',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>24,
            'vendor_code'=>'00-00000874',
            'price'=>'11',
            'model'=>'Дріт з гаком',
            'profile_thickness'=>0,
            'profile'=>'500',
            'color'=>0,
            'description'=>'Дріт з гаком 500 мм. ',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>25,
            'vendor_code'=>'00-00000863',
            'price'=>'11',
            'model'=>'Дріт з гаком',
            'profile_thickness'=>0,
            'profile'=>'500',
            'color'=>0,
            'description'=>'Дріт з гаком 500 мм. чорний',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
         DB::table('vendor_code_t_profile_susps')->insert([
            'id'=>26,
            'vendor_code'=>'00-00000875',
            'price'=>'11',
            'model'=>'Пружинный подвес',
            'profile_thickness'=>NULL,
            'profile'=>NULL,
            'color'=>NULL,
            'description'=>'',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
    }
}
