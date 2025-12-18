<?php

namespace Modules\Review\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Review\Entities\Review::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'reviewer' => $this->faker->name,
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
        ];
    }
}
