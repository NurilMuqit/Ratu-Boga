<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $categories = \App\Models\Category::pluck('id');

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        for ($i = 1; $i <= 10; $i++) {
            DB::table('menus')->insert([
                'menu_name' => "Menu $i",
                'menu_description' => "Description for Menu $i",
                'menu_price' => rand(10, 100),
                'category_id' => $categories->random(),
                'menu_quantity' => rand(1, 50),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
