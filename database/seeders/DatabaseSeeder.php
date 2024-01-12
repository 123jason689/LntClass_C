<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use App\Models\Genre;
use Illuminate\Database\Seeder;
use Database\Factories\BookFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Genre::create([
            'name' => 'Fantasy'
        ]);
        Genre::create([
            'name' => 'Sci-Fi'
        ]);
        Genre::create([
            'name' => 'Romance'
        ]);

        Book::factory(10)->create();
    }
}
