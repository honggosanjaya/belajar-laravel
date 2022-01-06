<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Fakultas;
use App\Models\Mahasiswa;
use App\Models\Pembimbing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // User::factory(10)->create();

      User::create([
        'name' => 'Honggo',
        'email' => 'honggo@gmail.com',
        'password' => bcrypt('12345678'),
      ]);

      Mahasiswa::create([
        'pembimbing_id' => '1',
        'fakultas_id' => '1',
        'nim' => '2201770025',
        'nama' => 'Honggo Sanjaya',
        'email' => 'honggo@gmail.com',
      ]);

      Fakultas::factory(3)->create();
      Pembimbing::factory(3)->create();
      Mahasiswa::factory(10)->create();
    }
}
