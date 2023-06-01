<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Post::factory(10)->create();

        Post::create([
            'id' => '1',
            'title' => 'ini title 1',
            'slug' => 'ini slug 1',
            'contrent' => 'ini contrent 1',

        ]);

        Post::create([
            'id' => '2',
            'title' => 'ini title 2',
            'slug' => 'ini slug 2',
            'contrent' => 'ini contrent 2',

        ]);

        Post::create([
            'id' => '3',
            'title' => 'ini title 3',
            'slug' => 'ini slug 3',
            'contrent' => 'ini contrent 3',


        ]);
    }
}
