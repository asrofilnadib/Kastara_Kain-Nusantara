<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name' => Str::random(12),
        ]);
        DB::table('category')->insert([
            'name' => 'Jawa Barat',
        ]);
        DB::table('category')->insert([
            'name' => 'Jawa Timur',
        ]);
    }
}
