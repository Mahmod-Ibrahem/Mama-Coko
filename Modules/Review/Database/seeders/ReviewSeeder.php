<?php

namespace Modules\Review\Database\seeders;

use Illuminate\Database\Seeder;
use Modules\Review\Entities\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::factory()->count(10)->create();
    }
}
