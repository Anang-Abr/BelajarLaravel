<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\BookInfo;

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

        BookInfo::create([
            "name" => "Alasan Untuk Tetap Hidup",
            "author" => "Matt Haig",
            "picture" => "alasan-untuk-tetap-hidup.jpg"
        ]);
    }
}
