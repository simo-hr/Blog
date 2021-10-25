<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => config('admin.email'),
            'email_verified_at' => now(),
            'password' => Hash::make(config('admin.password')),
            'remember_token' => Str::random(10),
        ]);
    }
}
