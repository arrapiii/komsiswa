<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $mapel = array(
            'Matematika', 
            'Bahasa Indonesia', 
            'PKN', 
            'Agama Islam', 
            'Bahasa Sunda',
            'Informatika',
            'Bahasa Inggris'
        );
        $kelam = array('Laki-laki', 'Perempuan');
        $tmptlhr = array(
            'Ngawi', 'Bogor', 'Jakarta', 'Yogya', 'Depok'
        );
        $agama = array(
            'Islam', 'Kristen', 'Hindu', 'Buddha', 'Konghucu'
        );

        $lahirdi = $tmptlhr[array_rand($tmptlhr)];
        $agamas = $agama[array_rand($agama)];

        $random_keys= $mapel[array_rand($mapel)];
        $nip = rand(1000000000,9999999999);
        $kelamin = $kelam[array_rand($kelam)];
        $nomer = rand(620000000000,629999999999);

      
        DB::table('gurus')->insert([
            'guru'=>$faker->name,
            'nip'=>$nip,
            'matpel'=>$random_keys,
            'tgllahir'=>'20 April 1997',
            'tempatlahir'=>$lahirdi,
            'jeniskelamin'=>$kelamin,
            'agama'=>$agamas,
            'jeniskelamin'=>$kelamin,
            'notelp'=>$nomer,
            'email'=>$faker->email,
            'password'=>$faker->password,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
