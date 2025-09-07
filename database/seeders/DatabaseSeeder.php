<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Booktable;
use App\Models\Chef;
use App\Models\Menu;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\Kategori::create([
            'nama' => 'Breakfast',
        ]);
        \App\Models\Kategori::create([
            'nama' => 'Lunch',
        ]);
        \App\Models\Kategori::create([
            'nama' => 'Dinner',
        ]);

        \App\Models\Role::create([
            'nama' => 'Master Chef',
        ]);

        \App\Models\Role::create([
            'nama' => 'Cook',
        ]);

        \App\Models\Role::create([
            'nama' => 'Patissier',
        ]);

        Chef::factory(6)->create();
        Blog::factory(10)->create();
        Menu::factory(20)->create();
        Booktable::factory(15)->create();
    }
}
