<?php

namespace Modules\Category\Database\seeders;

use Illuminate\Database\Seeder;
use Modules\Category\Entities\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Giza Day Tours',
                'slug' => 'giza-day-tours',
                'type' => 'day-tours',
                'description' => 'Explore the magnificent pyramids of Giza and the Great Sphinx.',
                'image' => 'giza-day-tours.jpg',
            ],
            [
                'name' => 'Cairo Day Tours',
                'slug' => 'cairo-day-tours',
                'type' => 'day-tours',
                'description' => 'Discover the vibrant capital city with its museums and historic sites.',
                'image' => 'cairo-day-tours.jpg',
            ],
            [
                'name' => 'Luxor Day Tours',
                'slug' => 'luxor-day-tours',
                'type' => 'day-tours',
                'description' => 'Visit the ancient temples and tombs in the Valley of the Kings.',
                'image' => 'luxor-day-tours.jpg',
            ],
            [
                'name' => 'Aswan Day Tours',
                'slug' => 'aswan-day-tours',
                'type' => 'day-tours',
                'description' => 'Experience the beauty of Aswan and its stunning Nile views.',
                'image' => 'aswan-day-tours.jpg',
            ],
            [
                'name' => 'Alexandria Day Tours',
                'slug' => 'alexandria-day-tours',
                'type' => 'day-tours',
                'description' => 'Explore the Mediterranean charm of Alexandria and its ancient history.',
                'image' => 'alexandria-day-tours.jpg',
            ],
            [
                'name' => 'Egypt Classic Tours',
                'slug' => 'egypt-classic-tours',
                'type' => 'tour-packages',
                'description' => 'Experience the timeless wonders of Egypt with our Classic Tours.',
                'image' => 'egypt-classic-tours.jpg',
            ],
            [
                'name' => 'Egypt Luxury Tours',
                'slug' => 'egypt-luxury-tours',
                'type' => 'tour-packages',
                'description' => 'Enjoy Egypt in style and comfort with our exclusive Luxury Tours.',
                'image' => 'egypt-luxury-tours.jpg',
            ],
            [
                'name' => 'Egypt Family Tours',
                'slug' => 'egypt-family-tours',
                'type' => 'tour-packages',
                'description' => 'Create unforgettable memories with your loved ones on our Family Tours.',
                'image' => 'egypt-family-tours.jpg',
            ],
            [
                'name' => 'Egypt Christmas Tours',
                'slug' => 'egypt-christmas-tours',
                'type' => 'tour-packages',
                'description' => 'Celebrate the festive season in the land of the Pharaohs.',
                'image' => 'egypt-christmas-tours.jpg',
            ],
            [
                'name' => 'Egypt Honeymoon Tours',
                'slug' => 'egypt-honeymoon-tours',
                'type' => 'tour-packages',
                'description' => 'Romantic getaways and breathtaking views for your perfect Honeymoon.',
                'image' => 'egypt-honeymoon-tours.jpg',
            ],
            [
                'name' => 'Egypt Short Break Tours',
                'slug' => 'egypt-short-break-tours',
                'type' => 'tour-packages',
                'description' => 'Quick but immersive escapes to Egypt\'s highlights.',
                'image' => 'egypt-short-break-tours.jpg',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
