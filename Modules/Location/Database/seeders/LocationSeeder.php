<?php

namespace Modules\Location\Database\seeders;

use Illuminate\Database\Seeder;
use Modules\Location\Entities\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            ['name' => 'Giza', 'image' => 'locations/giza.jpg'],
            ['name' => 'Cairo', 'image' => 'locations/cairo.jpg'],
            ['name' => 'Luxor', 'image' => 'locations/luxor.jpg'],
            ['name' => 'Aswan', 'image' => 'locations/aswan.jpg'],
            ['name' => 'Alexandria', 'image' => 'locations/alexandria.jpg'],
            ['name' => 'Siwa', 'image' => 'locations/siwa.jpg'],
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
