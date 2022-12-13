<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $kelas = array('10', '11', '12');
        $kelam = array('Laki-laki', 'Perempuan');
        $jurusan = array(
            'TJKT', 'Animasi', 'PPLG', 'BRC', 'TE'
        );

        $jurusans = $jurusan[array_rand($jurusan)];
        $nisn = rand(1000000000,9999999999);
        $kelass= $kelas[array_rand($kelas)];
        $walas = rand(1, 2);
        $kelamin = $kelam[array_rand($kelam)];
        $nomer = rand(620000000000,629999999999);

      
        DB::table('siswas')->insert([
            'siswa'=>$faker->name,
            'kelas'=>$kelass,
            'jurusan'=>$jurusans,
            'nis'=>$nisn,
            'jeniskelamin'=>$kelamin,
            'alamat'=>$faker->address,
            'notelp'=>$nomer,
            'email'=>$faker->email,
            'password'=>$faker->text,
            'guru_id'=>$walas,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
