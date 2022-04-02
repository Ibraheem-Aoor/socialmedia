<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jauoad',
            'email' => 'jauoad@admin',
            'password' => Hash::make('admin123'),
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
            'is_admin' => true,
            'is_owner' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
