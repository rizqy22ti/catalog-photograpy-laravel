<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Category::create([
            "name"  => "Prewedding & Wedding",
            "slug"  => "prewedding-wedding"
        ]);
        Category::create([
            "name"  => "Foto Product",
            "slug"  => "foto-product"
        ]);
        Category::create([
            "name"  => "Foto Wisuda",
            "slug"  => "foto-wisuda"
        ]);

        Post::factory(50)->create();
    }
}
