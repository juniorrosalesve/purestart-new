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
                'Join us as we take you through our journey of creating a cleaner, healthier world. We started with a simple idea - to make cleaning services more accessible and effective. Over the years, we’ve developed innovative cleaning solutions and methods that not only clean but also enhance the health and wellbeing of our customers. In this post, we share our story, our challenges, and how we overcame them to revolutionize the cleaning industry.',
                '01.jpeg'
            ],
            [
                'Top 5 Cleaning Tips for Your Home',
                'Discover our top 5 cleaning tips to keep your home sparkling clean. A clean home is a healthy home, and with our expert cleaning tips, you can ensure your home is not only clean but also a safe and comfortable space for you and your family. From the best cleaning products to use, to tips on maintaining cleanliness, this post covers it all.',
                '02.jpg'
            ],
            [
                'The Science Behind Our Cleaning Solutions',
                'Learn about the science that powers our innovative cleaning solutions. At our company, we believe in the power of science to create solutions that are not only effective but also safe and environmentally friendly. In this post, we delve into the scientific principles that guide our product development and how these result in superior cleaning solutions.',
                '03.jpg'
            ],
            [
                'Meet Our Team: The People Behind the Clean',
                'Get to know the dedicated team members who are passionate about cleaning. Our team is our strength, and in this post, we introduce you to the people who work tirelessly to ensure you have a clean and healthy living space. From our cleaning experts to our customer service representatives, meet the people who make it all happen.',
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
