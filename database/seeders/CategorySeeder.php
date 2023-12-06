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
        DB::table('categories')->insert([
            'name' => Str::random(12),
        ]);
        DB::table('categories')->insert([
            'name' => 'Jawa Barat',
        ]);
        DB::table('categories')->insert([
            'name' => 'Jawa Timur',
        ]);
    }
}
