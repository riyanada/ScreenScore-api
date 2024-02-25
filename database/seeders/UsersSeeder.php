<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'role' => 'admin',
            'created_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Reviewer User',
            'email' => 'reviewer@example.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'role' => 'reviewer',
            'created_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Editor User',
            'email' => 'editor@example.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'role' => 'editor',
            'created_at' => Carbon::now(),
        ]);
    }
}
