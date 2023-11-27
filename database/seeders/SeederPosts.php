<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;

class SeederPosts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts  =   [
            [
                'Revolutionizing Cleaning: Our Journey',
                'Join us as we take you through our journey of creating a cleaner, healthier world...',
                '01.jpeg'
            ],
            [
                'Revolutionizing Cleaning: Our Journey',
                'Discover our top 5 cleaning tips to keep your home sparkling clean...',
                '02.jpg'
            ],
            [
                'Revolutionizing Cleaning: Our Journey',
                'Learn about the science that powers our innovative cleaning solutions...',
                '03.jpg'
            ],
            [
                'Revolutionizing Cleaning: Our Journey',
                'Get to know the dedicated team members who are passionate about cleaning...',
                '04.jpg'
            ]
        ];
        for($i = 0; $i < sizeof($posts); $i++)
            Post::create([
                'nombre' => $posts[$i][0],
                'descripcion' => $posts[$i][1],
                'image' => $posts[$i][2]
            ]);
    }
}
