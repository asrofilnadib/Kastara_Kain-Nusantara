<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'asrofilnadib',
            'email' => 'asrofil@asrofil.co.id',
            'password' => Hash::make(12345678),
            'role' => 'admin',
            'balance' => '999999'
        ]);
    }
}
