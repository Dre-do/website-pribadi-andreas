<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { $imagePath = Storage::disk('public') -> putFile('/images', $this->faker->image());
        return [
            'title' => $this->faker->word,
            'author' => $this->faker->numberBetween(10, 100),
            'description' => $this->faker->sentence,
            'image_url' => $this->faker->imageUrl(640, 480),
            'image' => basename($imagePath),
        ];
    }
}
