<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Hobi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@utama.id',
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'guru',
            'email' => 'guru@utama.id',
            'password' => Hash::make('guru123'),
            'role' => 'guru'
        ]);

        User::create([
            'name' => 'murid',
            'email' => 'murid@utama.id',
            'password' => Hash::make('murid123'),
            'role' => 'murid'
        ]);
    }
}
