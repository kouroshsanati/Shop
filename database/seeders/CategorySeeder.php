<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::query()->create(['name' => 'digital', 'parent_id' => null, 'status' => 1]);
        Category::query()->create(['name' => 'clothes', 'parent_id' => null, 'status' => 1]);
        Category::factory(5)->create();
    }
}
