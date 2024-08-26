<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    {
        $paragraphs = $this->faker->paragraphs(mt_rand(10, 20));
        $bodyContent = '';

        foreach ($paragraphs as $index => $paragraph) {
            $bodyContent .= "<p>{$paragraph}</p>";

            if (($index + 1) % 5 === 0) {
                $bodyContent .= "<h2>" . $this->faker->sentence(4, true) . "</h2>";
            }
        }

        return [
            'title' => $this->faker->catchPhrase(),
            'subtitle' => $this->faker->sentence(6, true),
            'slug' => Str::slug($this->faker->unique()->sentence()),
            'excerpt' => $this->faker->text(200),
            'featured_image' => $this->faker->imageUrl(640, 480),
            'body' => $bodyContent,
            'category_id' => 2,
            'meta_description' => $this->faker->sentence(10, true),
            'reading_time' => $this->faker->numberBetween(3, 15),
            'status' => 'published',
            'author_id' => 1,
        ];
    }
}
