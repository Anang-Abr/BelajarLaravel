<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\BookInfo;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@email.com',
            'password' => Hash::make('password')
        ]);

        $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu justo orci. Mauris ultrices pharetra tempus. Pellentesque lacinia dui in lorem porttitor finibus. Sed sed accumsan lacus, vel volutpat justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sed ultricies velit. Vestibulum vel orci ipsum. Integer a eleifend enim, a congue nibh. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas eros erat, dignissim in fringilla sed, suscipit ut magna.';
        BookInfo::factory(2)->create();
        BookInfo::create([
            "title" => "Alasan Untuk Tetap Hidup",
            "author" => "Matt Haig",
            "picture" => "alasan-untuk-tetap-hidup.jpg",
            "price" => 99999,
            "description" => $description
        ]);
        BookInfo::create([
            "title" => "Laut Bercerita",
            "author" => "Leila S. Chudori",
            "picture" => "laut-bercerita.jpg",
            "price" => 99999,
            "description" => $description
        ]);
        BookInfo::create([
            "title" => "Sapiens",
            "author" => "Yuval Noah Harari",
            "picture" => "sapiens.jpg",
            "price" => 99999,
            "description" => $description
        ]);
        BookInfo::create([
            "title" => "Filosofi Teras",
            "author" => "Henry Manampiring",
            "picture" => "filosofi-teras.jpg",
            "price" => 99999,
            "description" => $description
        ]);
        // BookInfo::create([
        //     "title" => "Test Book",
        //     "author" => "Test Author",
        //     "price" => 99999
        // ]);
    }
}
