<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Hobi;

class hobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        hobi::create([
            'nama' => 'Membaca'
        ]);
        hobi::create([
            'nama' => 'Menulis'
        ]);
        hobi::create([
            'nama' => 'Memasak'
        ]);
        hobi::create([
            'nama' => 'Bersepeda'
        ]);
        hobi::create([
            'nama' => 'Berolahraga'
        ]);
        hobi::create([
            'nama' => 'Bermain video game'
        ]);
        hobi::create([
            'nama' => 'Memainkan alat musik'
        ]);
        hobi::create([
            'nama' => 'Melukis atau menggambar'
        ]);
        hobi::create([
            'nama' => 'Menonton film'
        ]);
        hobi::create([
            'nama' => 'Mendengarkan lagu'
        ]);

    }
}
