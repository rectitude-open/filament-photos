<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPhotos\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use RectitudeOpen\FilamentPhotos\Models\Photo;

class PhotoFactory extends Factory
{
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->realText(255),
            'description' => $this->faker->realText(1000),
            'is_published' => $this->faker->boolean(),
            'display_order' => $this->faker->numberBetween(0, 100),
            'created_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
